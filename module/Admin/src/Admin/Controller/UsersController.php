<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\AddUserForm;
use Zend\Session\Container;
use Zend\View\Model\JsonModel;
use Application\Model\User;
use Admin\Form\AddConnectorToUserForm;
use Application\Model\Group;
use Admin\Form\DeleteUserForm;
use Application\Model\GlobalMessage;
use Admin\Form\DeleteConnectorFromUserForm;

/**
 * UsersController
 *
 * @author
 *
 * @version
 *
 */
class UsersController extends AbstractActionController
{

	/**
	 * The default action - show the home page
	 */
	public function indexAction()
	{
		$loginContainer = new Container('login');
		$connector = $this->getConnectorById($loginContainer->connectorId);
		$users = $connector->getAllUsers();

		$form = new AddUserForm();
		$addConnectorToUserForm = new AddConnectorToUserForm($this->serviceLocator);
		$deleteUserForm = new DeleteUserForm();
		$deleteConnectorFromUserForm = new DeleteConnectorFromUserForm();
		//$connector->deleteGroup('connector-0');

		$connectors = array();
		foreach($users as $user){
			/**
			 * @var $user \Application\Model\User
			 */
			$groups = $connector->getMemberships($user->getId());
			foreach($groups as $group){
				/**
				 * @var $group \Application\Model\Group
				 */
				if(strpos($group->getId(), 'connector-') !== false){
					$id = explode('-',$group->getId())[1];
					$connectorDb = $this->getConnectorTableGateway()->get($id);
					if($connectorDb){
						$connectors[$user->getId()][] = $connectorDb;
					}else {
						$connector->deleteMembership($user->getId(), $group->getId());
					}
				}
			}

		}
		$form->setAttribute('action', $this->url()->fromRoute('admin/default', array(
			'controller' => 'users',
			'action' => 'add-users-do',
		)));
		$addConnectorToUserForm->setAttribute('action', $this->url()->fromRoute('admin/default', array(
			'controller' => 'users',
			'action' => 'add-connector-to-user-do',
		)));
		$deleteUserForm->setAttribute('action', $this->url()->fromRoute('admin/default', array(
			'controller' => 'users',
			'action' => 'delete-user-do',
		)));
		$deleteConnectorFromUserForm->setAttribute('action', $this->url()->fromRoute('admin/default', array(
			'controller' => 'users',
			'action' => 'delete-connector-from-user-do',
		)));

		return new ViewModel(array(
			'formyform' => $form,
			'addConnectorToUserForm' => $addConnectorToUserForm,
			'users' => $users,
			'connectors' => $connectors,
			'deleteUserForm' => $deleteUserForm,
			'deleteConnectorFromUserForm' => $deleteConnectorFromUserForm,
		));
	}


	public function deleteUserDoAction(){

		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$form = new DeleteUserForm();
			$form->setData($data);

			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$data = $form->getData();

				$loginContainer = new Container('login');
				$connector = $this->getConnectorById($loginContainer->connectorId);
				$user = $connector->get($data['user-id']);
				$connector->delete($user->getId());

				$url = $this->url()->fromRoute('admin/default' , array(
				 'controller' => 'users',
				 'action' => 'index',
					));
				$messages = new Container('messages');
				$messages->global[] = new GlobalMessage('User ' . $user->getId() .' has been successfully deleted.');

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

	public function addUsersDoAction(){

		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$form = new AddUserForm();
			$form->setData($data);

			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$data = $form->getData();

				$loginContainer = new Container('login');
				$connector = $this->getConnectorById($loginContainer->connectorId);
				$user = new User();
				$user->setId($data['user-id']);
				$user->setUsername($data['user-id']);
				$user->setFirstname($data['first-name']);
				$user->setMiddlename($data['middle-name']);
				$user->setLastname($data['last-name']);
				$user->setEmail($data['email']);

				$connector->add($user);
				$connector->resetPassword($user->getUsername(), $data['new-password']);
				if($data['issuperadmin'] == '1'){
					$connector->addMembership($user->getId(), 'superadmins');
				}

				$messages = new Container('messages');
				$messages->global[] = new GlobalMessage('User ' . $user->getId() .' has been successfully added to the system.');

				$url = $this->url()->fromRoute('admin/default' , array(
					'controller' => 'users',
					'action' => 'index',
				));

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

	public function addConnectorToUserDoAction(){
		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$form = new AddConnectorToUserForm($this->serviceLocator);
			$form->setData($data);


			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$loginContainer = new Container('login');
				$connector = $this->getConnectorById($loginContainer->connectorId);
				//test if group exists
				$url = $this->url()->fromRoute('admin/default' , array(
					'controller' => 'users',
					'action' => 'index',
				));
				try{
					$group = $connector->getGroup('connector-' . $data['connector-id']);
					if(!$group){
						$group = new Group();
						$group->setId('connector-' . $data['connector-id']);
						$group->setName('Connector' . $data['connector-id']);
						$connector->addGroup($group);
					}
					$connector->addMembership($data['user-id'], 'connector-' . $data['connector-id']);
					$messages = new Container('messages');
					$messages->global[] = new GlobalMessage('User ' . $data['user-id'] .' has been successfully granted full access to connector id ' . $data['connector-id']);
				} catch(\Exception $e){
					$status = false;
					$messages = array(
						'global' => array(
							'error' => 'Error while adding: ' . $e->getMessage(),
						),
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
	public function deleteConnectorFromUserDoAction(){
		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$form = new AddConnectorToUserForm($this->serviceLocator);
			$form->setData($data);


			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$loginContainer = new Container('login');
				$connector = $this->getConnectorById($loginContainer->connectorId);
				//test if group exists
				$url = $this->url()->fromRoute('admin/default' , array(
					'controller' => 'users',
					'action' => 'index',
				));
				try{
					$group = $connector->getGroup('connector-' . $data['connector-id']);
					if(!$group){
						$group = new Group();
						$group->setId('connector-' . $data['connector-id']);
						$group->setName('Connector' . $data['connector-id']);
						$connector->addGroup($group);
					}
					$connector->deleteMembership($data['user-id'], 'connector-' . $data['connector-id']);
					$messages = new Container('messages');
					$messages->global[] = new GlobalMessage('User ' . $data['user-id'] .'\'s access to connector id ' . $data['connector-id'] . ' has been sucessfully removed');
				} catch(\Exception $e){
					$status = false;
					$messages = array(
						'global' => array(
							'error' => 'Error while adding: ' . $e->getMessage(),
						),
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

	/**
	 *
	 * @param Number $id
	 * @return \Application\Interfaces\Connector
	 */
	private function getConnectorById($id){
		return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
	}
	/**
	 * @return \Application\Model\ConnectorTable
	 */
	private function getConnectorTableGateway(){
		if(!isset($this->connectorTableGateway)){
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}

}