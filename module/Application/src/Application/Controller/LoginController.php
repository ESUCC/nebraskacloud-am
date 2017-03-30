<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\LoginForm;
use Zend\View\Model\JsonModel;

/**
 * LoginController
 *
 * @author
 *
 * @version
 *
 */
class LoginController extends AbstractActionController
{

	/**
	 * The default action - show the home page
	 */
	public function indexAction()
	{


		$loginForm = new LoginForm($this->serviceLocator);
		if($this->params()->fromQuery('connector-id',null)){
			$loginForm->get('connector-id')->setValue($this->params()->fromQuery('connector-id',null));
		}
		$loginForm->setAttribute('action', $this->url()
			->fromRoute('application/default', array(
				'controller' => 'login',
				'action' => 'login-do'
			)));
		$loginForm->setAttribute('ajaxform', 'true');
		return new ViewModel(array(
			'loginForm' => $loginForm,
		));
	}

	public function loginDoAction(){
		$status = false;
		$messages = array();
		$url = '';

		if($this->getRequest()->isPost()){
			$loginForm = new LoginForm($this->serviceLocator);
			$data = $this->getRequest()->getPost();

			$loginForm->setData($data);

			if($loginForm->isValid()){
				$access = $this->serviceLocator->get('Access\Model\Access');
				$access->login($data['connector-id'], $data['userid']);
				$url = $this->url()->fromRoute('home');
				$status = true;
			} else {
				$messages = $loginForm->getMessages();
			}

		} else {
			throw new \Exception('Invalid use of action');
		}

		return new JsonModel(array(
			'status' => $status,
			'messages' => $messages,
			'url' => $url
		));

	}

	public function logoutAction(){
		$access = $this->serviceLocator->get('Access\Model\Access');
		$access->logout();
		return $this->redirect()->toRoute('application/default', array(
			'controller' => 'login',
			'action' => 'index',
		));
	}
}