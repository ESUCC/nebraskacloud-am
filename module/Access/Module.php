<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Access;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Db\TableGateway\TableGateway;
use Zend\Session\SaveHandler\DbTableGateway;
use Zend\Session\SaveHandler\DbTableGatewayOptions;
use Access\Model\Logger;
use Zend\Mail\Transport\SmtpOptions;
use Zend\Mail\Transport\Smtp;
use Zend\Session\Container;
use Zend\Session\SessionManager;

use Access\Model\Access;
use Zend\Db\Adapter\Adapter;
use Access\Model\Mailer;
use Zend\Db\Sql\TableIdentifier;


use Zend\Console\Request as ConsoleRequest;

class Module implements AutoloaderProviderInterface
{

	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\ClassMapAutoloader' => array(
				__DIR__ . '/autoload_classmap.php'
			),
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(

					// if we're in a namespace deeper than one level we need to fix the \ in the path
					__NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/', __NAMESPACE__)
				)
			)
		);
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	public function getServiceConfig()
	{
		return array(
			'factories' => array(
				'Access\Model\Logger' => function ($sm) {
					return $sm->get('Logger');
				},
				'Logger' => function ($sm) {
					return new Logger($sm, $sm->get('LoggerHandler'), $sm->get('config')['schema']);
				},
				'LoggerHandler' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					return new TableGateway(new TableIdentifier('logger', $sm->get('config')['schema']), $dbAdapter);
				},
				'MailTransport' => function ($sm) {
					$options = new SmtpOptions($sm->get('config')['mail']);
					$transport = new Smtp();
					$transport->setOptions($options);
					return $transport;
				},
				'Access' => function ($sm) {
					return $sm->get('Access\Model\Access');
				},
				'Access\Model\Access' => function ($sm) {
					return new Access($sm);
				},
				'NavigationObject' => 'Zend\Navigation\Service\DefaultNavigationFactory',
				'SessionSaveHandler' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$tableGateway = new TableGateway(new TableIdentifier('sessions', $sm->get('config')['schema']), $dbAdapter);
					$options = new DbTableGatewayOptions();
					$savehandler = new DbTableGateway($tableGateway, $options);
					return $savehandler;
				},
				'Adapter' => function ($sm) {
					$config = $sm->get('Configuration');
					$dbAdapter = new \Zend\Db\Adapter\Adapter($config['db']);
					return $dbAdapter;
				},
				'Access\Model\Mailer' => function ($sm) {
					return new Mailer($sm);
				},
				'Mailer' => function ($sm) {
					return new Mailer($sm);
				},



				'Zend\Session\SessionManager' => function ($sm) {
					$config = $sm->get('config');
					if (isset($config['session'])) {
						$session = $config['session'];

						$sessionConfig = null;
						if (isset($session['config'])) {
							$class = isset($session['config']['class']) ? $session['config']['class'] : 'Zend\Session\Config\SessionConfig';
							$options = isset($session['config']['options']) ? $session['config']['options'] : array();
							$sessionConfig = new $class();
							$sessionConfig->setOptions($options);
						}

						$sessionStorage = null;
						if (isset($session['storage'])) {
							$class = $session['storage'];
							$sessionStorage = new $class();
						}

						$sessionSaveHandler = null;
						if (isset($session['save_handler'])) {
							// class should be fetched from service manager since it will require constructor arguments
							$sessionSaveHandler = $sm->get($session['save_handler']);
						}

						$sessionManager = new SessionManager($sessionConfig, $sessionStorage, $sessionSaveHandler);

						if (isset($session['validator'])) {
							$chain = $sessionManager->getValidatorChain();
							foreach ($session['validator'] as $validator) {
								$validator = new $validator();
								$chain->attach('session.validate', array(
									$validator,
									'isValid'
								));
							}
						}
					} else {
						$sessionManager = new SessionManager();
					}
					Container::setDefaultManager($sessionManager);
					$container = new Container('login');
					if (! $container->role)
						$container->role = 'guest';
					return $sessionManager;
				}
			)
		);
	}

	public function onBootstrap(MvcEvent $e)
	{
		$eventManager = $e->getApplication()->getEventManager();
		$eventManager->attach('dispatch.error', function ($event) {
			$exception = $event->getResult()->exception;
			if ($exception) {
				$sm = $event->getApplication()
					->getServiceManager();
				$logger = $sm->get('Logger');
				$logger->log('Exception', $exception->getMessage() . "<br /><strong>Stack Trace</strong><br />" . $exception->getTraceAsString(), Logger::$LEVEL_ERROR);
			}
		});
		$eventManager->getSharedManager()->attach('Zend\View\Helper\Navigation\AbstractHelper', 'isAllowed', array(
			'\Application\Listener\RbacListener',
			'accept'
		));
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);
		$this->bootstrapSession($e);
	}

	public function bootstrapSession(\Zend\EventManager\EventInterface $e)
	{
		$session = $e->getApplication()
			->getServiceManager()
			->get('Zend\Session\SessionManager');
		$session->start();

		$container = new Container('initialized');
		if (! isset($container->init)) {
			$session->regenerateId(true);
			$container->init = 1;
		}

		$eventManager = $e->getApplication()->getEventManager();
		$eventManager->attach(MvcEvent::EVENT_ROUTE, array(
			$this,
			'authPreDispatch'
		), 1);
		$eventManager->attach(MvcEvent::EVENT_FINISH, array(
			$this,
			'cleanConnectors'
		), 1);
	}

	/**
	 * Authenticate user or redirect to log in
	 */
	public function authPreDispatch(MvcEvent $e)
	{
		// check if logged in
		$container = new Container('login');
		$request = $e->getApplication()->getRequest();
		if(!$request instanceof ConsoleRequest){
			$access = $e->getApplication()
				->getServiceManager()
				->get('Access\Model\Access');

			$routeMatch = $e->getRouteMatch();

			$controller = $routeMatch->getParam('controller');
			$controller = str_replace('\\', '', $controller);

			$action = $routeMatch->getParam('action');

			$permission = 'accessPage-' . $controller . '-' . $action;
			if (! $access->isAuthorized($permission)) {

				if($container->role == 'guest'){
					$url = $e->getRouter()->assemble(array(
						'controller' => 'login',
						'action' => 'index'
					), array(
						'name' => 'application/default'
					));
					$response = $e->getResponse();
					$response->getHeaders()->addHeaderLine('Location', $url);
					$response->setStatusCode(302);
					$response->sendHeaders();
					exit();
				}
				die($permission);
				//die($permission);
				$routeMatch = $e->getRouteMatch();
				$controller = $routeMatch->getParam('controller');
				$action = $routeMatch->getParam('action');

				if (! ($controller == 'Access\Controller\Messages' && $action == 'access-denied')) {
					$url = $e->getRouter()->assemble(array(
						'controller' => 'messages',
						'action' => 'access-denied'
					), array(
						'name' => 'access/default'
					));

					$response = $e->getResponse();
					$response->getHeaders()->addHeaderLine('Location', $url);
					$response->setStatusCode(302);
					$response->sendHeaders();
					exit();
				} else{
					echo $permission;
				}
			}
		}
	}

	public function cleanConnectors(){
		$connectors = new Container('connectors');
		foreach(array_keys($connectors->getArrayCopy()) as $key){
			unset($connectors->$key);
		}
	}
}
