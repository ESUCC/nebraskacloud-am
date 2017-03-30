<?php
/**
 *
 * All of the data is stored within a table in the application's schema.
 *
 * @author mcharris
 *
 */
namespace Access\Model;

use Zend\Session\Container;
use Zend\ServiceManager\ServiceManager;
use Zend\Permissions\Rbac\Rbac;
use Zend\Permissions\Rbac\Role;
use SpiffyNavigation\View\Helper\NavigationMenu;
use SpiffyNavigation\Page\Page;

class Access
{

	private $serviceLocator;
	private $connector;

	public $rbac;

	function __construct(ServiceManager $sm)
	{
		$this->serviceLocator = $sm;
		$container = new Container('login');
		$this->rbac = new Rbac();
		$access = array(
			'guest' => array(
				'accessPage-AccessControllerMessages-access-denied',
				'accessPage-ApplicationControllerLogin-index',
				'accessPage-ApplicationControllerLogin-login-do',
				'accessPage-ApplicationControllerIndex-password-reset',
				'accessPage-ApplicationControllerIndex-password-reset-do',
			    'accessPage-ApplicationControllerClaimAccount-select-connector',
			    'accessPage-ApplicationControllerClaimAccount-select-connector-do',
			    'accessPage-ApplicationControllerClaimAccount-claim-account',
			    'accessPage-ApplicationControllerClaimAccount-claim-account-do',
			),
			'user' => array(
				'accessPage-AccessControllerMessages-access-denied',
				'accessPage-ApplicationControllerLogin-login-do',
				'accessPage-ApplicationControllerIndex-index',
				'accessPage-ApplicationControllerIndex-password-reset-do',
			    'accessPage-ApplicationControllerIndex-password-reset',
				'accessPage-ApplicationControllerLogin-logout',
			    'accessPage-ApplicationControllerIndex-test-connector',
			),
			'admin' => array(
			    'accessPage-AdminControllerAdmin-question',
			    'accessPage-AdminControllerAdmin-index',
				'accessPage-AdminControllerAdmin-index',
				'accessPage-AdminControllerQuestions-index',
				'accessPage-AdminControllerConnector-select-connector',
				'accessPage-AdminControllerConnector-select-connector-do',
				'accessPage-AdminControllerConnector-add-connector',
				'accessPage-AdminControllerConnector-add-connector-do',
				'accessPage-AdminControllerConnector-test-connector-update',
				'accessPage-AdminControllerQuestions-question-admin',
				'accessPage-AdminControllerQuestions-question-admin-do',
				'accessPage-AdminControllerQuestions-delete-question-do',
				'accessPage-ConnectorFunctionsControllerGoogleDirectory-get-url',
				'accessPage-ConnectorFunctionsControllerGoogleDirectory-process-token',
				'accessPage-AdminControllerQuestions-select-connector',
				'accessPage-AdminControllerQuestions-select-connector-do',
				'accessPage-AdminControllerProcess-index',
				'accessPage-AdminControllerEdFiEntry-index',
				'accessPage-AdminControllerEdFiEntry-add-school-do',
				'accessPage-AdminControllerEdFiEntry-ed-fi-entry-do',
				'accessPage-AdminControllerEdFiEntry-delete-ed-fi-entry-do',
				'accessPage-AdminControllerEdFiEntry-delete-school-do',
			),
			'superadmin' => array(
				'accessPage-AdminControllerUsers-index',
				'accessPage-AdminControllerUsers-add-users-do',
				'accessPage-AdminControllerUsers-add-connector-to-user-do',
				'accessPage-AdminControllerUsers-delete-user-do',
				'accessPage-AdminControllerUsers-delete-connector-from-user-do',
				'accessPage-AdminControllerProcess-initiate',
				'accessPage-AdminControllerProcess-process',
			),
		);
		$inheritence = array(
			'admin' => 'user',
			'superadmin' => 'admin',
		);

		foreach($access as $roleName => $permissions){
			$role = new Role($roleName);
			foreach($permissions as $permission){
				$role->addPermission($permission);
			}
			if(isset($inheritence[$roleName])){
				$role->addChild($this->rbac->getRole($inheritence[$roleName]));
			}
			$this->rbac->addRole($role);
		}

		if(isset($container->connectorId)){
			$this->connector = $this->getConnectorById($container->connectorId);
		}
	}

	/**
	 * Function used to create a session for authentication throughout the user's session.
	 *
	 * @param String $connectorId
	 * @param String $userid
	 * @return boolean on success of login.
	 */
	public function login($connectorId, $userid)
	{
		$retval = true;
		//intialize the global settings
		$container = new Container('login');
		$container->connectorId = $connectorId;
		$this->connector = $this->getConnectorById($container->connectorId);
		//get current user information
		$user = $this->connector->get($userid);
		$container->role = 'user';
		$container->user = $user->getId();
		$container->userObject = $user;
		$container->isLoggedIn = true;
		//RBAC Initilize
		if($connectorId == $this->serviceLocator->get('config')['adminLoginConnectorid']){
			$container->role = 'admin';
			foreach($this->connector->getMemberships($userid) as $group){
				/**
				 * @var $group \Application\Model\Group
				 */
				if($group->getId() == 'superadmins'){
					$container->role = 'superadmin';
				}
			}
		}
		return $retval;
	}

	public function logout()
	{
		$container = new Container('login');
		$container->getManager()
			->getStorage()
			->clear();
		$container->role = 'guest';
	}


	public function switchUser($userid)
	{
		$this->internalLogin($userid, false);
	}

	public function isAuthorized($permission)
	{
		$container = new Container('login');
		return $this->rbac->isGranted($container->role, $permission);
	}

	public function getCurrentUser()
	{
		$container = new Container('login');
		return $container->user;
	}


	/**
	 *
	 * @param Number $id
	 * @return \Application\Interfaces\Connector
	 */
	public function getConnectorById($id)
	{
		$connector = $this->getConnectorTableGateway()->get($id);
		$connectorData = $this->getConnectorDataTableGateway()->fetchByConnector($id);
		$type = 'Application\\Interfaces\\' . $connector->type;
		$connectionInfo = array();

		$userMap = array();
		$groupMap = array();


		foreach ($connectorData as $data) {
			$remove = array(
				'usermap-username',
				'usermap-firstname',
				'usermap-middlename',
				'usermap-lastname',
				'usermap-email',
				'usermap-id',
				'groupmap-id',
				'groupmap-members',
			);
			if(!in_array($data->getData_type(), $remove)){
				$connectionInfo[$data->getData_type()] = $data->getData();
			} else {
				$map = explode('-',$data->getData_type());
				if($map[0] == 'usermap'){
					$userMap[$data->getData()] = $map[1];
				} else if($map[0] == 'groupmap'){
					$groupMap[$data->getData()] = $map[1];
				}
			}
		}

		return new $type($userMap, $groupMap, $connectionInfo);
	}

	public function getConnectorTableGateway()
	{
		if (! isset($this->connectorTableGateway)) {
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}

	public function getConnectorDataTableGateway()
	{
		if (! isset($this->connectorDataTableGateway)) {
			$this->connectorDataTableGateway = $this->serviceLocator->get('Application\Model\ConnectorDataTable');
		}
		return $this->connectorDataTableGateway;
	}
}