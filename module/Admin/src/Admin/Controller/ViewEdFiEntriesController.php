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
use Admin\Form\ViewEdFiEntriesForm;
use Application\Model\EdFiEntry;
use Zend\Form\Form;

/**
 * QuestionsController
 *
 * @author
 *
 * @version
 *
 */
class ViewEdFiEntriesController extends AbstractActionController
{
    protected $EdFiEntryTableGateway;

    public function viewEdFiEntriesAction()
    {
        $form = new ViewEdFiEntriesForm($this->serviceLocator);
        $data = $this->getEdFiEntryTableGateway();
        $form->setAttribute('connector-id', $data['connector-id']);


        return new ViewModel(array(
            'formyform' => $form,
        ));
    }
    
    public function viewEdFiEntriesDoAction()
    {
        if ($this->getRequest()->isPost()) {
            $form = new ViewEdFiEntriesForm($this->serviceLocator);
            $data = $this->getRequest()->getPost();
        
            $form->setData($data);
        
            if ($form->isValid()) {
                $data = $form->getData();
                $edFiEntries = new EdFiEntry();
                $this->getEdFiEntryTableGateway()->save($edFiEntries);
                $status = true;
                $messages = new Container('messages');
                $url = $this->url()->fromRoute('admin/question-admin', array(
                    'connector-id' => $data['connector-id'],
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
    private function getEdFiEntryTableGateway(){
        if(!isset($this->EdFiEntryTableGateway)){
            $this->EdFiEntryTableGateway = $this->serviceLocator->get('Application\Model\EdFiEntryTable');
        }
        return $this->EdFiEntryTableGateway;
    }
}