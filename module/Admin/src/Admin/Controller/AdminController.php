<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Admin for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Model\User;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
	{
	    $user = new User();
	    $user->setFirstname("Karl");
	    $user->getMiddlename("T");
	    $user->setLastname("Feeder");


	    $connectors = $this->getConnectorTableGateway()->fetch();

		return new ViewModel(array(
		    'user' => $user,
			'connectors' => $connectors,
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
