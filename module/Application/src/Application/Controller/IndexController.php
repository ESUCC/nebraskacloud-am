<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;
use Application\Form\PasswordResetForm;
use Zend\View\Model\JsonModel;
use Application\Interfaces\Dummy;
use Application\Model\User;
use Application\Form\ClaimAccountForm;
use Application\Form\QuestionAdminForm;
use Application\Model\Connector;
use Application\Model\ConnectorData;
use Application\Model\Group;
use Application\Model\GlobalMessage;
use Zend\Session\Container;

class IndexController extends AbstractActionController
{

public function indexAction()
	{
 
	    $container = new Container('login');
		if(isset($container->userObject)){
			/**
			 * @var $user \Application\Model\User
			 */
		    $user = $container->userObject;

		    $formattedUser = $user->getFirstname() . " " . $user->getMiddlename() . ". " . $user->getLastname();

		    $connector = $this->getConnectorById($container->connectorId);

		    $logs = $this->getLoggerTableGateway()->fetchByUserId($user->getId());

		    //$groups = $connector->getMemberships($user->getUsername());
			return new ViewModel(array(
			    'user' => $user,
			    'formattedUser' => $formattedUser,
			    'logs' => $logs
			));
	    } else {
	    	return new ViewModel(array(

	    	));
	    }
	}

	public function adminHomeAction() {

	    return new ViewModel();
	}


	public function passwordResetAction()
	{
		$connectorsRaw = $this->getConnectorTableGateway()->fetch();
		$connectors = array();
		foreach($connectorsRaw as $connector){
			if($connector->getHostName() == 'localhost'){
				foreach($this->getConnectorDataTableGateway()->fetchByConnector($connector->getId()) as $connectorData){
					$this->getConnectorDataTableGateway()->delete($connectorData->getId());
				}
				$this->getConnectorTableGateway()->delete($connector->getId());
			}
			$connectors[$connector->getId()] = $connector->getHostname();
		}

		$form = new PasswordResetForm();
		$form->get('connector-id')->setValueOptions($connectors);

		$form->setAttribute('action', $this->url()
			->fromRoute('application/default', array(
			'controller' => 'index',
			'action' => 'password-reset-do'
		)));
		$form->setAttribute('ajaxform', 'true');


		return new ViewModel(array(
			'formyform' => $form
		));
	}

	public function passwordResetDoAction()
	{
		if ($this->getRequest()->isPost()) {
			$form = new PasswordResetForm($this->serviceLocator);
			$connectorsRaw = $this->getConnectorTableGateway()->fetch();
			$connectors = array();
			foreach($connectorsRaw as $connector){
				if($connector->getHostName() == 'localhost'){
					foreach($this->getConnectorDataTableGateway()->fetchByConnector($connector->getId()) as $connectorData){
						$this->getConnectorDataTableGateway()->delete($connectorData->getId());
					}
					$this->getConnectorTableGateway()->delete($connector->getId());
				}
				$connectors[$connector->getId()] = $connector->getHostname();
			}

			$form->get('connector-id')->setValueOptions($connectors);
			$data = $this->getRequest()->getPost();
			$form->setData($data);

			if ($form->isValid()) {



				$data = $form->getData();

				$connector = $this->getConnectorById($data['connector-id']);

				if ($connector->auth($data['userid'], $data['current-password'])) {
					$connector->resetPassword($data['userid'], $data['new-password']);
					$status = true;
					$messages = array();
					$url = $this->url()->fromRoute('home');
  
					$messages = new Container('messages');
					$messages->global[] = new GlobalMessage('You have successfully reset your password');
 
					$this->getLoggerTableGateway()->log($data['userid'], $data['connector-id'], "Reset Password");
				} else {
					$status = false;
					$messages = array(
						'global' => 'Incorrect Password'
					);
					$url = '';
				}
			} else {
				$status = false;
				$messages = $form->getMessages();
				$url = '';
			}
		} else {
			throw new \Exception('not valid use of action');
		}

		return new JsonModel(array(
			'status' => $status,
			'messages' => $messages,
			'url' => $url
		));
	}

	public function testConnectorAction()
	{
		$count = 0;
		echo '<h1>Init Connector 76</h1>';
		$realConnector = $this->getConnectorById(297);

		echo '<h1>Add User</h1>';
		$addUser = new User();
		$addUser->setId('mcharris');
		$addUser->setFirstname('Michael');
		$addUser->setLastname('Harris');
		$addUser->setEmail('mcharris@esucc.org');
		$addUser->setMiddlename('Christopher');
		$addUser->setUsername('mcharris');
		try{
			$result = $realConnector->add($addUser);
			if($result){
				echo '<p>Successful</p>';
			} else {
				echo '<p>FAILED</p>';
			}

		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h2>Reset Password</h2>';
		try{
			if($realConnector->resetPassword('mcharris@esucc.org', '10293844839201')){
				echo '<p>Successful</p>';
			} else {
				echo '<p>FAILED</p>';
			}

		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;
		echo '<h1>Auth with new user and WRONG password</h1>';
		if($realConnector->auth('mcharris@esucc.org', '102938839201')){
			echo '<p>SUCESSFUL AUTH</p>';
		} else {
			echo '<p>Failed to authenicate</p>';
		}
		echo '<h1>Auth with new user</h1>';
		if($realConnector->auth('mcharris@esucc.org', '10293844839201')){
			echo '<p>SUCESSFUL AUTH</p>';
		} else {
			echo '<p>Failed to authenicate</p>';
		}

		echo '<h1>Get new user</h1>';
		try{
			$addUser = $realConnector->get('mcharris@esucc.org');
			echo '<p>Got user <a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($addUser, true) . '</pre></div>';
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Add Group</h1>';
		try{
			$addGroup = new Group();
			$addGroup->setId('TESTGROUP');
			$addGroup->setName('Test Group');
			if(($result = $realConnector->addGroup($addGroup)) !== FALSE){
				echo '<p>Successful</p>';
			} else {
				echo '<pre>' . print_r($result, true) . '</pre>';
			}

		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Add membership to group</h1>';
		try{
			if(($result = $realConnector->addMembership($addUser->getUsername(), $addGroup->getId())) !== FALSE){
				echo '<p>Successful</p>';
			} else {
				echo '<pre>' . print_r($result, true) . '</pre>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Get user memberships</h1>';
		try{


			if(($memberships = $realConnector->getMemberships($addUser->getId())) !== FALSE){
				echo '<p>Got ' . count($memberships) . ' memberships for user <a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
				echo '<pre>' . print_r($memberships, true) . '</pre></div>';
			} else {
				echo '<p>FAILED</p>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Delete membership</h1>';
		try{
			if(($result = $realConnector->deleteMembership($addUser->getUsername(), $addGroup->getId())) !== FALSE){
				echo '<p>Successful</p>';
			} else {
				echo '<pre>' . print_r($result, true) . '</pre>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Delete Group</h1>';
		try{
			if(($result = $realConnector->deleteGroup($addGroup->getId())) !== FALSE){
				echo '<p>Successful</p>';
			} else {
				echo '<pre>' . print_r($result, true) . '</pre>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Update attribute (name)</h1>';
		try{
			$addUser->setEmail('alphabet@muike.com');
			if($realConnector->update($addUser)){
				echo '<p>Successful <a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
				echo '<pre>' . print_r($realConnector->get($addUser->getId()), true) . '</pre></div>';
			} else {
				echo '<p>Failed <a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
				echo '<pre>' . print_r($realConnector->get($addUser->getId()), true) . '</pre></div>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Get All Users</h1>';
		try{
			$users = $realConnector->getAllUsers();
			$oldUserCount = count($users);
			echo '<p>Got ' . count($users) . ' users <a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($users , true) . '</pre></div>';
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;

		echo '<h1>Delete user</h1>';
		try{
			if(($result = $realConnector->delete($addUser->getId())) !== FALSE){
				if($realConnector->get($addUser->getId())){
					echo '<p>FAILED</p>';
				} else {
					echo '<p>Successful</p>';
				}

			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}

		echo '<h1>Verify Delete of User</h1>';
		try{
			$newUserCount = count($realConnector->getAllUsers());
			if($oldUserCount - 1 == $newUserCount){
				echo '<p>Verified</p>';
			} else {
				echo '<p>FAILED</p>';
			}
		} catch(\Exception $e ){
			echo '<p>Test Failed with messages</p><a role="button" data-toggle="collapse" href="#test-' . $count . '" aria-expanded="false" aria-controls="test-' . $count . '">show</a></p>
						<div class="collapse" id="test-' . $count . '">';
			echo '<pre>' . print_r($e->getMessage(), true) . '</pre></div>';
		}
		$count++;
		return new ViewModel();
	}

	/**
	 *
	 * @param Number $id
	 * @return \Application\Interfaces\Connector
	 */
	private function getConnectorById($id){
		return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
	}


	private function getConnectorTableGateway(){
		if(!isset($this->connectorTableGateway)){
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}
	private function getConnectorDataTableGateway(){
		if(!isset($this->connectorDataTableGateway)){
			$this->connectorDataTableGateway = $this->serviceLocator->get('Application\Model\ConnectorDataTable');
		}
		return $this->connectorDataTableGateway;
	}
	
	/**
	 * @return \Application\Model\LoggerTable
	 */
	private function getLoggerTableGateway(){
	    if(!isset($this->LoggerTableGateway)){
	        $this->LoggerTableGateway = $this->serviceLocator->get('Application\Model\LoggerTable');
	    }
	    return $this->LoggerTableGateway;
	}
}

