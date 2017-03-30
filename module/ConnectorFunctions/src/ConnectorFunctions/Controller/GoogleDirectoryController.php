<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ConnectorFunctions for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace ConnectorFunctions\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Application\Interfaces\GoogleDirectory;
use Zend\Session\Container;

class GoogleDirectoryController extends AbstractActionController
{

	public function getUrlAction()
	{
		$request = $this->getRequest();
		if($request->isPost()){
			$data = $request->getPost();
			$container = new Container('googleauthtemp');
			$container->data = $data;
			$client = new \Google_Client();
			$client->setApplicationName($data['name']);
			$client->setScopes(GoogleDirectory::$SCOPES);
			$client->setAuthConfig($data['json-contents']);
			$client->setAccessType(GoogleDirectory::$ACCESSTYPE);
			$client->setApprovalPrompt('force');
			$client->setRedirectUri($this->url()->fromRoute('connector-functions/default', array(
				'controller' 	=> 'google-directory',
				'action'		=> 'process-token',

			), array('force_canonical' => true)));
			return new JsonModel(array(
				'url' => $client->createAuthUrl(),
			));
		} else {
			throw new \Exception('Incorrect use of action');
		}
	}

	public function processTokenAction(){
		$container = new Container('googleauthtemp');
		$data = $container->data;
		$client = new \Google_Client();
		$client->setApplicationName($data['name']);
		$client->setScopes(GoogleDirectory::$SCOPES);
		$client->setAuthConfig($data['json-contents']);
		$client->setAccessType(GoogleDirectory::$ACCESSTYPE);

		$token = $client->authenticate($this->params()->fromQuery('code'));
		$client->setAccessToken($token);
		echo '<script>
				opener.addToken(\'' . $token . '\');
					window.close();
					</script>

			';
		//echo '<span id="tokenToBeProcessed">' .$this->params()->fromQuery('code') . '</span>';
		die();
	}
}
