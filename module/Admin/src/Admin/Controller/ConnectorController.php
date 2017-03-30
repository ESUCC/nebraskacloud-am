<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;
use Application\Interfaces\OpenLDAP;
use Application\Model\Connector;
use Application\Model\ConnectorData;
use Zend\View\Model\JsonModel;
use Zend\Form\Element\Select;
use Zend\Session\Container;
use Zend\InputFilter\InputFilter;
use Zend\Console\Request as ConsoleRequest;
use Application\Model\User;
use Application\Model\Group;
use Application\Model\GlobalMessage;

/**
 * ConnectorController
 *
 * @author
 *
 * @version
 *
 */
class ConnectorController extends AbstractActionController
{
	private $logFile;
	/**
	 * The default action - show the home page
	 */
	public function selectConnectorAction()
	{
		// TODO Auto-generated ConnectorController::indexAction() default action

		$form = new Form('select-connector-form');

		$types = array(
			'OpenLDAP' => 'OpenLDAP',
			'Dummy' => 'Dummy',
		    'GoogleDirectory' => 'Google Directory',
		    'ActiveDirectory' => 'Active Directory',
		);

		$form->add(array(
			'name' => 'connector-type',
			'type' => 'Select',
			'options' => array(
				'label' => 'Connector Type',
				'column-size' => 'sm-6',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(
					'class' => 'col-sm-4 control-label'
				),
				'value_options' => $types,
			),

		));

		$form->add(array(
			'name' => 'submit',
			'type' => 'Submit',
			'options' => array(
				'column-size' => 'sm-6 col-sm-offset-6'
			),
			'attributes' => array(
				'value' => 'Next',
				'id' => 'submitbutton',
                'class' => 'btn btn-primary submit-button has-spinner'
			)

		));
		$form->setAttribute('action', $this->url()
			->fromRoute('admin/default', array(
				'controller' => 'connector',
				'action' => 'select-connector-do',
			)));


		return new ViewModel(array(
			'formyform' => $form,
		));
	}
	public function selectConnectorDoAction(){

		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$type = $data['connector-type'];

			if (class_exists('Application\\Interfaces\\' . $type)) {

				$container = new Container('addConnectorTempData');
				$container->connectorType = $type;

				$status = true;
				$messages = array();
				$url = $this->url()->fromRoute('admin/default' , array(
					'controller' => 'connector',
					'action' => 'add-connector',
				));

			} else {
				$status = false;
				$messages = array(
					'connector-type' => array(
						'error' => 'Connector Type does not exist',
					),
				);
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

	public function addConnectorAction(){
		$container = new Container('addConnectorTempData');
		if(!isset($container->connectorType)){
			return $this->redirect()->toRoute('admin/default', array(
				'controller' => 'connector',
				'action' => 'select-connector',
			));
		}

		$form = new Form('add-connector-form');
		$type = 'Application\\Interfaces\\'. $container->connectorType;

		$form->add(array(
			'name' => 'name',
			'type' => 'Text',
			'options' => array(
				'label' => 'Connector Name',
				'column-size' => 'sm-6',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(
					'class' => 'col-sm-4 control-label'
				)
			)
		));

		foreach($type::getFormElements() as $element){
			$form->add($element);
		}
		$form->add(array(
			'name' => 'testButton',
			'type' => 'Submit',
			'options' => array(
				'column-size' => 'sm-6',
				'button-group' => 'group-1',
			),
			'attributes' => array(
				'value' => 'Test',
				'id' => 'testButton',
                'class' => 'btn btn-primary submit-button has-spinner'
			    
			)
		));
		$form->add(array(
			'name' => 'addButton',
			'type' => 'Submit',
			'options' => array(
				'column-size' => 'sm-6',
				'button-group' => 'group-1',
			),
			'attributes' => array(
				'value' => 'Add Connector',
				'id' => 'submitbutton',
                'class' => 'btn btn-primary submit-button has-spinner'
			)

		));

		$form->setAttribute('action', $this->url()
			->fromRoute('admin/default', array(
				'controller' => 'connector',
				'action' => 'add-connector-do',
			)));


		return new ViewModel(array(
			'formyform' => $form,
			'type' => $container->connectorType,
		));
	}

	public function addConnectorDoAction(){

		$container = new Container('addConnectorTempData');
		$status = true;
		$messages = array();
		$function = '';
		$url = '';



		if(!isset($container->connectorType)){
			return $this->redirect()->toRoute('admin/default', array(
				'controller' => 'connector',
				'action' => 'select-connector',
			));
		}

		if ($this->getRequest()->isPost()) {

			$data = $this->getRequest()->getPost();

			$type = 'Application\\Interfaces\\' . $container->connectorType;
			$inputfilter = $type::getFormInputFilter();
			if($data['backButton'] == 'Back'){
				return $this->redirect()->toRoute('admin/default', array(
					'controller' => 'connector',
					'action' => 'select-connector',
				));
			}
			$inputfilter->add(array(
				'name' => 'name',
				'required' => true,
				'filters' => array(
					array(
						'name' => 'StripTags'
					),
					array(
						'name' => 'StringTrim'
					)
				)
			));

			$inputfilter->setData($data);

			//$inputfilter = new InputFilter();



			if ($inputfilter->isValid()) {


				foreach($inputfilter->getValues() as $key => $value){
					$data[$key] = $value;
				}

				if(isset($data['addButton'])){
					$connector = new Connector();
					$connector->setHostname($data['name']);
					$connector->setType($container->connectorType);
					unset($data['name']);

					$connector->setId($this->getConnectorTableGateway()->save($connector));

					unset($data['addButton']);

					foreach($data as $key => $value){
						if(is_array($value)){
							foreach($value as $k => $val){
								$connectorData = new ConnectorData();
								$connectorData->setData_type($key . '-' . $k);
								$connectorData->setData($val);
								$connectorData->setConnector_id($connector->getId());
								$this->getConnectorDataTableGateway()->save($connectorData);
							}
						} else {
							$connectorData = new ConnectorData();
							$connectorData->setData_type($key);
							$connectorData->setData($value);
							$connectorData->setConnector_id($connector->getId());
							$this->getConnectorDataTableGateway()->save($connectorData);
						}
					}

					$messages = new Container('messages');
					$messages->global[] = new GlobalMessage('New connector (id: ' . $connector->getId() . ') added successfuly.');

					$loginContainer = new Container('login');
					$masterConnector = $this->getConnectorById($loginContainer->connectorId);

					$group = new Group();
					$group->setId('connector-' . $connector->getId());
					$group->setName('Connector ' . $connector->getId());
					$masterConnector->addGroup($group);
					$masterConnector->addMembership($loginContainer->userObject->getId(), $group->getId());


					$url = $this->url()->fromRoute('admin');
				} elseif(isset($data['testButton'])) {
					$connector = new Connector();
					$connector->setHostname($data['name']);
					$connector->setType($container->connectorType);

					$container = new Container('testConnectorPost');
					unset($data['name']);
					unset($data['testButton']);

					$connector->setId($this->getConnectorTableGateway()->save($connector));

					foreach($data as $key => $value){
						$connectorData = new ConnectorData();
						$connectorData->setData_type($key);
						$connectorData->setData($value);
						$connectorData->setConnector_id($connector->getId());
						$this->getConnectorDataTableGateway()->save($connectorData);
					}
					if(!isset($container->tmpFileLocation)){
						$file = tmpfile();
						$filename = stream_get_meta_data($file)["uri"];
						$container->tmpFileLocation = $filename;
						fclose($file);
						file_put_contents($container->tmpFileLocation, "Starting.....\n", FILE_APPEND);
					}

					$command = '/usr/local/zend/bin/php public/index.php run post-connector-test ' . $connector->getId() . ' ' . $container->tmpFileLocation . ' > /dev/null 2>&1 & echo $!';
					exec($command ,$op);
					$this->pid = (int)$op[0];
					$status = true;
					$function = 'launchTestModal';

				} else {
					throw new \Exception('not valid use of action');
				}

			} else {
				$status = false;
				$messages = $inputfilter->getMessages();
			}
		} else {
			throw new \Exception('not valid use of action');
		}

		return new JsonModel(array(
			'status' => $status,
			'messages' => $messages,
			'function' => $function,
			'url' => $url
		));
	}

	public function testConnectorUpdateAction(){
		if ($this->getRequest()->isPost()) {
			$container = new Container('testConnectorPost');
			if(!isset($container->tmpFileLocation)){
				throw new \Exception('Not initialized');

			}
			$contents = file_get_contents($container->tmpFileLocation);

			if(strpos($contents, 'TEST COMPLETE') !== false){
				$status = true;
				$container->__unset('tmpFileLocation');
			} else {
				$status = false;
			}
		} else {
			throw new \Exception('not valid use of action');
		}

		return new JsonModel(array(
			'status' => $status,
			'data' => $contents,
		));
	}
	public function postConnectorTestAction(){
		$request = $this->getRequest();

		if (!$request instanceof ConsoleRequest){
			throw new \RuntimeException('You can only use this action from a console!');
		}

		$connectorId = $request->getParam('connectorid');
		$logFile = $request->getParam('logfile');
		$this->logFile = $logFile;


		$count = 0;
		file_put_contents($logFile, "Initializing Connector with id $connectorId.....", FILE_APPEND);
		sleep(3);
		try{
			$realConnector = $this->getConnectorById($connectorId);
		} catch (\Exception $e){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}
		file_put_contents($logFile, "Pass\n", FILE_APPEND);

		file_put_contents($logFile, "AddUser.....", FILE_APPEND);
		sleep(3);
		$addUser = new User();
		$addUser->setId('mcharris');
		$addUser->setFirstname('Michael');
		$addUser->setLastname('Harris');
		$addUser->setEmail('mcharris@esucc.org');
		$addUser->setMiddlename('Christopher');
		$addUser->setUsername('mcharris@esucc.org');
		try{
			$result = $realConnector->add($addUser);
			if($result){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "Failed with no message\n", FILE_APPEND);
			}

		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Reset Password......", FILE_APPEND);
		sleep(3);
		try{
			if($realConnector->resetPassword('mcharris@esucc.org', '10293844839201')){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "Failed with no message\n", FILE_APPEND);
				$this->endScript($connectorId);
			}

		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Auth new user with WRONG password...", FILE_APPEND);
		sleep(3);
		try{
			if($realConnector->auth('mcharris@esucc.org', '1029388392013232353')){
				file_put_contents($logFile, "Auth successful....FAILED\n", FILE_APPEND);
				$this->endScript($connectorId);
			} else {
				file_put_contents($logFile, "Auth Failed....Pass\n", FILE_APPEND);
			}
		}catch(\Exception $e){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Auth new user with CORRECT password...", FILE_APPEND);
		sleep(3);
		try{
			if($realConnector->auth('mcharris@esucc.org', '10293844839201')){
				file_put_contents($logFile, "Auth successful....Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "Auth Failed....FAILED\n", FILE_APPEND);
				$this->endScript($connectorId);
			}
		}catch(\Exception $e){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Get New User...", FILE_APPEND);
		sleep(3);
		try{
			$addUser = $realConnector->get('mcharris');
			if($addUser){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
				$this->endScript($connectorId);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}
		$count++;


		file_put_contents($logFile, "Add New Group...", FILE_APPEND);
		sleep(3);
		try{
			$addGroup = new Group();
			$addGroup->setId('TESTGROUP');
			$addGroup->setName('Test Group');
			if(($result = $realConnector->addGroup($addGroup)) !== FALSE){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
				$this->endScript($connectorId);
			}

		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}


		file_put_contents($logFile, "Add Membership To Group...", FILE_APPEND);
		sleep(3);
		try{
			if(($result = $realConnector->addMembership($addUser->getUsername(), $addGroup->getId())) !== FALSE){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Get User Memberships...", FILE_APPEND);
		sleep(3);
		try{
			if(($memberships = $realConnector->getMemberships($addUser->getId())) !== FALSE){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Delete Membership...", FILE_APPEND);
		sleep(3);
		try{
			if(($result = $realConnector->deleteMembership($addUser->getUsername(), $addGroup->getId())) !== FALSE){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Delete Group...", FILE_APPEND);
		sleep(3);
		try{
			if(($result = $realConnector->deleteGroup($addGroup->getId())) !== FALSE){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Update User...", FILE_APPEND);
		sleep(3);
		try{
			$addUser->setEmail('alphabet@muike.com');
			if($realConnector->update($addUser)){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Get All Users...", FILE_APPEND);
		sleep(3);
		try{
			$users = $realConnector->getAllUsers();
			if(count($users) > 0){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Delete User...", FILE_APPEND);
		sleep(3);
		try{
			if(($result = $realConnector->delete($addUser->getId())) !== FALSE){
				if($realConnector->get($addUser->getId())){
					file_put_contents($logFile, "Failed\n", FILE_APPEND);
				} else {
					file_put_contents($logFile, "Pass\n", FILE_APPEND);
				}
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		file_put_contents($logFile, "Verify Delete User...", FILE_APPEND);
		sleep(3);
		try{
			$oldUserCount = count($users);
			$newUserCount = count($realConnector->getAllUsers());
			if($oldUserCount - 1 == $newUserCount){
				file_put_contents($logFile, "Pass\n", FILE_APPEND);
			} else {
				file_put_contents($logFile, "FAILED\n", FILE_APPEND);
			}
		} catch(\Exception $e ){
			file_put_contents($logFile, "ERROR with message " . print_r($e->getMessage(), true) . "\n", FILE_APPEND);
			$this->endScript($connectorId);
		}

		$this->endScript($connectorId);
	}

	private function endScript($connectorId){
		$connectorDatas = $this->getConnectorDataTableGateway()->fetchByConnector($connectorId);
		foreach($connectorDatas as $connectorData){
			$this->getConnectorDataTableGateway()->delete($connectorData->getId());
		}
		$this->getConnectorTableGateway()->delete($connectorId);
		file_put_contents($this->logFile, "TEST COMPLETE\n", FILE_APPEND);
		die();
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
}