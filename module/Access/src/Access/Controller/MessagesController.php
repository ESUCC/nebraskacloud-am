<?php
namespace Access\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * AccessController
 *
 * @author
 *
 * @version
 *
 */
class MessagesController extends AbstractActionController
{

	/**
	 * The default action - show the home page
	 */
	public function accessDeniedAction()
	{
		return new ViewModel();
	}
}