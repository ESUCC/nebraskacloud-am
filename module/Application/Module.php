<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\Model\Connector;
use Zend\Db\Sql\TableIdentifier;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Application\Model\ConnectorTable;
use Application\Model\ConnectorDataTable;
use Application\Model\ConnectorData;
use Application\Model\QuestionTable;
use Application\Model\Question;
use Application\Model\EdFiEntryTable;
use Application\Model\EdFiEntry;
use Swagger\Client\Configuration;
use Swagger\Client\ApiClient;
use Application\Model\SchoolTable;
use Application\Model\School;
use Application\Model\LoggerTable;
use Application\Model\Logger;

class Module
{

	public function onBootstrap(MvcEvent $e)
	{
		$eventManager = $e->getApplication()->getEventManager();
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	public function getServiceConfig()
	{
		return array(
			'factories' => array(
				'Application\Model\ConnectorTable' => function ($sm) {
					$tableGateway = $sm->get('ConnectorTableGateway');
					$table = new ConnectorTable($tableGateway);
					return $table;
				},
				'ConnectorTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Connector());
					return new TableGateway(new TableIdentifier('connectors', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
				'Application\Model\ConnectorDataTable' => function ($sm) {
					$tableGateway = $sm->get('ConnectorDataTableGateway');
					$table = new ConnectorDataTable($tableGateway);
					return $table;
				},
				'ConnectorDataTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new ConnectorData());
					return new TableGateway(new TableIdentifier('connector_data', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
				'Application\Model\QuestionTable' => function ($sm) {
					$tableGateway = $sm->get('QuestionTableGateway');
					$table = new QuestionTable($tableGateway);
					return $table;
				},
				'QuestionTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Question());
					return new TableGateway(new TableIdentifier('questions', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
				'Application\Model\EdFiEntryTable' => function ($sm) {
				$tableGateway = $sm->get('EdFiEntryTableGateway');
				$table = new EdFiEntryTable($tableGateway);
				return $table;
				},
				'EdFiEntryTableGateway' => function ($sm) {
				$dbAdapter = $sm->get('Adapter');
				$resultSetPrototype = new ResultSet();
				$resultSetPrototype->setArrayObjectPrototype(new EdFiEntry());
				return new TableGateway(new TableIdentifier('edfi_entry', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
				'Application\Model\SchoolTable' => function ($sm) {
					$tableGateway = $sm->get('SchoolTableGateway');
					$table = new SchoolTable($tableGateway);
				return $table;
				},
				'SchoolTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new School());
					return new TableGateway(new TableIdentifier('schools', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
				'ConnectorsForSelect' => function($sm){
					$connectorsRaw = $sm->get('Application\Model\ConnectorTable')->fetch();
					$connectors = array();
					foreach ($connectorsRaw as $connector) {
						if ($connector->getHostName() == 'localhost') {
							foreach ($this->getConnectorDataTableGateway()->fetchByConnector($connector->getId()) as $connectorData) {
								$this->getConnectorDataTableGateway()->delete($connectorData->getId());
							}
							$this->getConnectorTableGateway()->delete($connector->getId());
						}
						$connectors[$connector->getId()] = $connector->getHostname();
					}
					return $connectors;
				},
				'Swagger\Client\ApiClient' => function($sm){
					$config = new Configuration();
					$config->setHost($sm->get('config')['edfi']['host']);
					$config->setOAuthUrl($sm->get('config')['edfi']['oauthurl']);
					$client = new ApiClient($config);
					return $client;
				},
				'Application\Model\LoggerTable' => function ($sm) {
					$tableGateway = $sm->get('LoggerTableGateway');
					$table = new LoggerTable($tableGateway);
					return $table;
				},
				'LoggerTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Adapter');
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Logger());
					return new TableGateway(new TableIdentifier('connector_logger', $sm->get('config')['schema']), $dbAdapter, null, $resultSetPrototype);
				},
			)
		);
	}


	public function getServiceConfiguration()
	{
		return array(
			'factories' => array(
				'db_adapter' => function ($sm) {
					$config = $sm->get('Configuration');
					$dbAdapter = new \Zend\Db\Adapter\Adapter($config['db']);
					return $dbAdapter;
				}
			)
		);
	}

	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
				)
			)
		);
	}
}
