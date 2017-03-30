<?php
namespace Application\Listener;

use Zend\EventManager\Event;
use Zend\Session\Container;
class RbacListener
{
	public static function accept(Event $event) {
		$event->stopPropagation();

		$accepted = true;

		$serviceLocator = $event->getTarget()->getServiceLocator();
		$rbac           = $serviceLocator->get('Access\Model\Access')->rbac;

		$params = $event->getParams();
		$page = $params['page'];

		$permission = $page->getPermission();

		if ($permission) {
			$container = new Container('login');
			$accepted = $rbac->isGranted($container->role, $permission);
		}

		return $accepted;
	}
}

?>