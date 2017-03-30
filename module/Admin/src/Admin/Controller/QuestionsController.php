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
use Admin\Form\SelectConnectorForm;
/**
 * QuestionsController
 *
 * @author
 *
 * @version
 *
 */
class QuestionsController extends AbstractActionController
{
	public function selectConnectorAction(){
		$form = new SelectConnectorForm($this->serviceLocator);

		$form->setAttribute('action', $this->url()
			->fromRoute('admin/default', array(
				'controller' => 'questions',
				'action' => 'select-connector-do'
			)));

		return new ViewModel(array(
			'formyform' => $form,
		));
	}

	public function selectConnectorDoAction(){
		if ($this->getRequest()->isPost()) {
			$form = new SelectConnectorForm($this->serviceLocator);
			$data = $this->getRequest()->getPost();

			$form->setData($data);

			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$data = $form->getData();
				$url = $this->url()->fromRoute('admin/question-admin', array(
					'connectorid' => $data['connector-id'],
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


	public function questionAdminAction()
	{
	    $form = new QuestionAdminForm($this->serviceLocator);
	    $deleteQuestionForm = new DeleteQuestionForm();

	    $conid = $this->params('connectorid');
	    $data = $form->getQuestionTableGateway()->fetchByConnector($conid);

	    $form->setData(array(
	    	'conid' => $conid
	    ));
	    $deleteQuestionForm->setData(array(
	    	'conid' => $conid
	    ));

	    $form->setAttribute('action', $this->url()
	        ->fromRoute('admin/default', array(
	            'controller' => 'questions',
	            'action' => 'question-admin-do'
	        )));

	    $deleteQuestionForm->setAttribute('action', $this->url()
	        ->fromRoute('admin/default', array(
	            'controller' => 'questions',
	            'action' => 'delete-question-do'
	        )));

	    return new ViewModel(array(
	        'formyform' => $form,
	    	'deleteQuestionForm' => $deleteQuestionForm,
	        'querydata' => $data,
	        'conid' => $conid,
	    ));
	}

	public function questionAdminDoAction()
	{
	    if ($this->getRequest()->isPost()) {
	        $form = new QuestionAdminForm($this->serviceLocator);
	        $data = $this->getRequest()->getPost();

	        $form->setData($data);

	        if ($form->isValid()) {
	            $data = $form->getData();
	            $questionObj = new Question();
	            $questionObj->setAttribute($data['attribute']);
	            $questionObj->setQuestion($data['question']);
	            $questionObj->setConnector_id($data['conid']);
	            $this->getQuestionTableGateway()->save($questionObj);
	            $status = true;
	            $messages = new Container('messages');
	            $messages->global[] = new GlobalMessage('You have successfully added a question');
	            $url = $this->url()->fromRoute('admin/question-admin', array(
	                'connectorid' => $data['conid'],
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

	public function deleteQuestionDoAction(){

	    if ($this->getRequest()->isPost()) {


	        $data = $this->getRequest()->getPost();
	        $form = new DeleteQuestionForm();
	        $form->setData($data);

	        if ($form->isValid()) {
	            $status = true;
	            $messages = array();
	            $data = $form->getData();

	            $this->getQuestionTableGateway()->delete($data['question-id']);
	            $url = $this->url()->fromRoute('admin/default' , array(
	                'controller' => 'users',
	                'action' => 'index',
	            ));
	            $messages = new Container('messages');
	            $messages->global[] = new GlobalMessage('Question ' . $data['question-id'] .' has been successfully deleted.');
	            $url = $this->url()->fromRoute('admin/question-admin', array(
	                'connectorid' => $data['conid'],
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
	 * @return \Application\Model\ConnectorTable
	 */
	private function getQuestionTableGateway(){
		if(!isset($this->questionTableGateway)){
			$this->questionTableGateway = $this->serviceLocator->get('Application\Model\QuestionTable');
		}
		return $this->questionTableGateway;
	}
}