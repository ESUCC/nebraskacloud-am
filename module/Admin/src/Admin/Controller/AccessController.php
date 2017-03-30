<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Form\AddUserForm;
use Zend\View\Model\JsonModel;
use Zend\Session\Container;

/**
 * AccessController
 *
 * @author
 *
 * @version
 *
 */
class AccessController extends AbstractActionController
{

	/**
	 * The default action - show the home page
	 */
	public function addUserAction(){
		$form = new AddUserForm();
		$form->setAttribute('action', $this->url()->fromRoute('admin/default', array(
			'controller' 	=> 'access',
			'action'		=> 'add-user',
		)));
		return new ViewModel(array(
			'formyform' => $form,
		));

	}

	public function addUserDoAction(){
		if ($this->getRequest()->isPost()) {


			$data = $this->getRequest()->getPost();
			$form = new AddUserForm();
			$form->setData($data);


			if ($form->isValid()) {
				$status = true;
				$messages = array();
				$url = $this->url()->fromRoute('admin/default' , array(
					'controller' => 'admin',
					'action' => 'home',
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
}