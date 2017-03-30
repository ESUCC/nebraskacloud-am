<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\QuestionAdminForm;
use Application\Model\Question;
use Zend\Session\Container;
use Application\Model\GlobalMessage;
use Zend\View\Model\JsonModel;
use Admin\Form\DeleteQuestionForm;
use Admin\Form\EdFiEntryForm;
use Application\Model\EdFiEntry;
use Zend\Form\Form;
use Admin\Form\SchoolForm;
use Application\Model\School;
use Swagger\Client\Api\SchoolsApi;
use Admin\Form\DeleteEdFiEntryForm;
use Admin\Form\DeleteSchoolForm;

/**
 * QuestionsController
 *
 * @author
 *
 * @version
 *
 */
class EdFiEntryController extends AbstractActionController
{
    protected $EdFiEntryTableGateway;


    public function indexAction()
    {
    	$loginContainer = new Container('login');
    	$connector = $this->getConnectorById($loginContainer->connectorId);


        $form = new EdFiEntryForm($this->serviceLocator);

        $deleteForm = new DeleteEdFiEntryForm();


        $form->setAttribute('action', $this->url()
        	->fromRoute('admin/default', array(
        		'controller' => 'ed-fi-entry',
        		'action' => 'ed-fi-entry-do'
        	)));

        $deleteForm->setAttribute('action', $this->url()
        	->fromRoute('admin/default', array(
        		'controller' => 'ed-fi-entry',
        		'action' => 'delete-ed-fi-entry-do'
        	)));

        $edfiEntrysRaw = $this->getEdFiEntryTableGateway()->fetch();
        $membershipsRaw = $connector->getMemberships($loginContainer->user);

        $connectorsPossible = array();
        $isSuperAdmin = false;
        foreach($membershipsRaw as $group){
        	/**
        	 * @var $group \Application\Model\Group
        	 */
        	$expl = explode('connector-', $group->getId());
        	if(count($expl) > 1){
	        	$connectorId = $expl[1];
	        	$connectorsPossible[$connectorId] = true;
        	}
        	if($group->getId() == 'superadmins'){
        		$isSuperAdmin = true;
        	}
        }

		$edfiEntries = array();
		$connectors = array();
        foreach($edfiEntrysRaw as $edfiEntry){
        	if(isset($connectorsPossible[$edfiEntry->getConnectorId()]) || $isSuperAdmin){
        		$edfiEntries[] = $edfiEntry;
        		$connectors[$edfiEntry->connector_id] = $this->getConnectorTableGateway()->get($edfiEntry->connector_id);
        	}
        }

        return new ViewModel(array(
            'addEdfiEntryForm' => $form,
        	'edfiEntries' => $edfiEntries,
        	'connectors' => $connectors,
        	'deleteEdFiEntryForm' => $deleteForm,
        ));
    }

    public function edFiEntryDoAction()
    {
        if ($this->getRequest()->isPost()) {
            $form = new EdFiEntryForm($this->serviceLocator);
            $data = $this->getRequest()->getPost();
            $form->setData($data);

            if ($form->isValid()) {
                $data = $form->getData();
                $efeObj = new EdFiEntry();
                $efeObj->setConnectorId($data['connector-id']);
                $efeObj->setSyncStaff($data['sync-staff']);
                $efeObj->setSyncStudents($data['sync-students']);
                $efeObj->setWhoToNotifyOnFail($data['who-to-notify-on-fail']);
                $efeObj->setPattern1($data['pattern-1']);
                $efeObj->setPattern2($data['pattern-2']);
                $efeObj->setPattern3($data['pattern-3']);
                $efeObj->setPattern4($data['pattern-4']);
                $this->getEdFiEntryTableGateway()->save($efeObj);

                //$this->getLoggerTableGateway()->log($data['user-id'], $data['connector-id'],);

                $status = true;
                $messages = new Container('messages');
                $messages->global[] = new GlobalMessage('You have successfully added an Ed-Fi Definition');
                $url = $this->url()->fromRoute('admin/default', array(
    				'controller' => 'ed-fi-entry',
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

    public function deleteEdFiEntryDoAction(){
    	if ($this->getRequest()->isPost()) {
    		$form = new DeleteEdFiEntryForm();
    		$data = $this->getRequest()->getPost();
    		$form->setData($data);

    		if ($form->isValid()) {
    			$data = $form->getData();

    			$this->getEdFiEntryTableGateway()->delete($data['edfi-entry-id']);

    			$status = true;
    			$messages = new Container('messages');
    			$messages->global[] = new GlobalMessage('You have successfully removed school');
    			$url = $this->url()->fromRoute('admin/default', array(
    				'controller' => 'ed-fi-entry',
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

    /**
     *
     * @param Number $id
     * @return \Application\Interfaces\Connector
     */
    private function getConnectorById($id){

        return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
    }

    /**
     * @return \Application\Model\EdFiEntryTable
     */
    private function getEdFiEntryTableGateway(){
        if(!isset($this->EdFiEntryTableGateway)){
            $this->EdFiEntryTableGateway = $this->serviceLocator->get('Application\Model\EdFiEntryTable');
        }
        return $this->EdFiEntryTableGateway;
    }

    private function getConnectorTableGateway(){
        if(!isset($this->connectorTableGateway)){
            $this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
        }
        return $this->connectorTableGateway;
    }

    /**
     * @return \Swagger\Client\ApiClient
     */
    private function getEdFiClient(){
    	if(!isset($this->edfiClient)){
    		$this->edfiClient = $this->serviceLocator->get('Swagger\Client\ApiClient');
    	}
    	return $this->edfiClient;
    }


    private function getLoggerTableGateway(){
        if(!isset($this->LoggerTableGateway)){
            $this->LoggerTableGateway = $this->serviceLocator->get('Application\Model\LoggerTable');
        }
        return $this->LoggerTableGateway;
    }
}