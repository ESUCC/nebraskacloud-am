<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ClaimAccountForm;
use Application\Interfaces\Dummy;
use Zend\Session\Container;
use Application\Model\GlobalMessage;
use Zend\View\Model\JsonModel;
use Zend\Form\Form;
use Application\Model\Logger;
use Application\Model\LoggerTable;

/**
 * ClaimAccountController
 *
 * @author
 *
 * @version
 *
 */
class ClaimAccountController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */


    public function selectConnectorAction()
    {
        // TODO Auto-generated ConnectorController::indexAction() default action

        $form = new Form('select-connector-form');

        $connectorsRaw = $this->getConnectorTableGateway()->fetch();
        $connectors = array();
        foreach($connectorsRaw as $connector){
            /**
             * @var $connector \Application\Model\Connector
             */
            $connectors[$connector->getId()] = $connector->getHostname();
        }

        $form->add(array(
            'name' => 'connector-type',
            'type' => 'Select',
            'options' => array(
                'label' => 'Connector ID',
                'column-size' => 'sm-6',
                'inline' => true,
                'label_options' => array(
                    'disable_html_escape' => true,
                    'always_wrap' => false
                ),
                'label_attributes' => array(
                    'class' => 'col-sm-4 control-label'
                ),
                'value_options' => $connectors,
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
            ->fromRoute('application/default', array(
                'controller' => 'claim-account',
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
            $container = new Container('claimAccountTempData');
            $container->connectorId = $type;
            $status = true;
            $messages = array();
            $url = $this->url()->fromRoute('application/default' , array(
                'controller' => 'claim-account',
                'action' => 'claim-account',
            ));
        }

        return new JsonModel(array(
            'status' => $status,
            'messages' => $messages,
            'url' => $url
        ));
    }

    public function claimAccountAction()
    {
        $form = new ClaimAccountForm($this->serviceLocator);

        $form->setAttribute('action', $this->url()
            ->fromRoute('application/default', array(
                'controller' => 'claim-account',
                'action' => 'claim-account-do'
            )));

        return new ViewModel(array(
            'formyform' => $form
        ));
    }

    public function claimAccountDoAction()
    {
        if ($this->getRequest()->isPost()) {
            $form = new ClaimAccountForm($this->serviceLocator);
            $data = $this->getRequest()->getPost();
            $form->setData($data);

            if ($form->isValid()) {
                $status = true;
                $verified = true;
                $messages = new Container('messages');
                $questions = $this->getQuestionTableGateway()->fetchByConnector($data['connector-id']);
                if (count($questions) == 0) {
                    $messages->global[] = new GlobalMessage('There are no questions in this connector. Contact System Administrator.');
                    $url = $this->url()->fromRoute('application/default', array(
                        'controller' => 'login',
                        'action' => 'index'
                    ));
                } 
                else {
                    $con = $this->getConnectorById($data['connector-id']);
                    
                    if (($user = $con->get($data['user-id'])) === FALSE) {
                        $messages->global[] = new GlobalMessage('Username entered wrong or Questions not answered correctly.');
                        $url = $this->url()->fromRoute('application/default', array(
                            'controller' => 'login',
                            'action' => 'index'
                        ));
                    }
                    else {
                        foreach ($questions as $question) {
                            if (!($data['question-' . $question->id] == $user->attributes[$question->getAttribute()]->getData())) {
                                $verified = false;
                            }
                        }
                        if (!($verified)) {
                            
                            $messages->global[] = new GlobalMessage('Username entered wrong or Questions not answered correctly.');
                            $url = $this->url()->fromRoute('application/default', array(
                                'controller' => 'login',
                                'action' => 'index'
                            ));
                        }
                        else {
                            $connector = $this->getConnectorById($data['connector-id']);
            
                            $data = $form->getData();
                            $connector->resetPassword($data['user-id'], $data['new-password']);
            
                            $this->getLoggerTableGateway()->log($data['user-id'], $data['connector-id'], "Claimed Account");
            
                            $status = true;
                            
                            $messages->global[] = new GlobalMessage('You have successfully claimed your account. You should now be able to log in using your account.');
                            $url = $this->url()->fromRoute('application/default', array(
                                'controller' => 'login',
                                'action' => 'index'
                            ));
                        }
                    }
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
     * @return \Application\Model\QuestionTable
     */
    public function getQuestionTableGateway()
    {
        if (! isset($this->questionTableGateway)) {
            $this->questionTableGateway = $this->serviceLocator->get('Application\Model\QuestionTable');
        }
        return $this->questionTableGateway;
    }
    
    
    public function claimAccountCompleteAction()
    {
        return new ViewModel();
    }

    private function getConnectorTableGateway(){
        if(!isset($this->connectorTableGateway)){
            $this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
        }
        return $this->connectorTableGateway;
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
     * @return \Application\Model\LoggerTable
     */
    private function getLoggerTableGateway(){
        if(!isset($this->LoggerTableGateway)){
            $this->LoggerTableGateway = $this->serviceLocator->get('Application\Model\LoggerTable');
        }
        return $this->LoggerTableGateway;
    }
}