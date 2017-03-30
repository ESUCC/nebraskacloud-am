<?php
namespace Application\Interfaces;

use Application\Model\User;
use Application\Model\Group;
use Zend\Form\Element;
use Zend\Form\Element\Text;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\Ldap as AuthAdapter;
use Zend\Ldap\Ldap;
use Zend\Session\Container;
use Zend\Form\Element\Select;
use Zend\InputFilter\InputFilter;
use Zend\Ldap\Dn;
use Application\Model\Attribute;
use Zend\Form\Fieldset;

class OpenLDAP implements Connector{

	private $adapter;
	private $authAdapter;
	private $usersOu;
	private $groupsOu;
	private $options;
	private $objectClasses;
	private $groupObjectClasses;
	private $groupFilterFormat;
	private $studentOu;
	private $staffOu;

	public function add(User $user)
	{
		$retVal = false;
		//try {
			$arrayUser = array();
			foreach ($this->userMap as $key => $value) {
				$arrayUser[$key] = array($user->$value);
			}
			$arrayUser['objectclass'] = $this->objectClasses;


			$this->adapter->add($this->getGetUserFullDN($user->getUsername()), $arrayUser);
			$retVal = true;
		//} catch (\Exception $e) {
			//$retVal = false;
			//$this->container->lastStatus = "Failed to ADD reasons: " . $e->getMessage();
		//}
		return $retVal;
	}

	public function resetPassword($username, $newPassword)
	{
		$user = $this->get($username);
		$this->adapter->update($user->attributes['dn']->getData(), array(
			'userpassword' => array(
				"{MD5}".base64_encode(pack("H*",md5($newPassword))),
			),
		));

		return true;
	}

	public function getAllUsers()
	{
		$searchStr = '(objectClass=person)';
		$rawUsers = $this->adapter->search($searchStr);

		$users = array();
		foreach($rawUsers as $rawUser){
			/*echo '<pre>' . print_r($rawUser, true) . "</pre>";

			if(strpos($rawUser['dn'], 'ou=NSAPTest') !== FALSE){
				$this->delete($rawUser['dn'] );
			}*/

			$user = new User();

			foreach($this->userMap as $rawKey => $userKey){
				if(isset($rawUser[$rawKey])){
					$user->$userKey = $rawUser[$rawKey][count($rawUser[$rawKey]) - 1];
				}
			}
			$user->attributes = array();
			$attr = $this->getSchema()->getAttributeTypes();

			foreach($rawUser as $attribute => $data){

				if(isset($attr[$attribute])){
					$description = $attr[$attribute]->getDescription();
				} else {
					$description = "";
				}
				$user->attributes[$attribute] = new Attribute(array(
					'name' => $attribute,
					'description' => $description,
					'data' => $data,
				));
			}
			$users[] = $user;
		}
		//die('cleanipoo');
		return $users;
	}

	public function auth($username, $password)
	{
		$auth = new AuthenticationService();
		$adapter = new AuthAdapter(array('server1' => $this->options), $username, $password);
		$result = $auth->authenticate($adapter);

		return $result->isValid();
	}

	public function updateGroup( $group)
	{
		$data = array();
		foreach($group->attributes as $key => $attribute){
			$data[$key] = $attribute->getData();
		}
		foreach($this->groupMap as $attribute => $key){
			if(is_array($group->$key)){
				$data[$attribute] = $group->$key;
			} else {
				$data[$attribute] = $data[$attribute];
			}

		}
		$this->adapter->update($this->getGetGroupFullDN($group->id), $data);
	}

	public function update(User $user)
	{
		$data = array();
		if($user->attributes == null || count($user->attributes) == 0) {
			throw new \Exception('The user given does not have any attributes. For openLDAP this cannot happen');
		}
		foreach($user->attributes as $key => $attribute) {
			$data[$key] = $attribute->getData();
		}

		foreach($this->userMap as $attribute => $key){
			if(is_array($data[$attribute])){
				$data[$attribute] = array($user->$key);
			} else {
				$data[$attribute] = $user->$key;
			}
		}

		$this->adapter->update($this->getGetUserFullDN($user->getUsername()), $data);

		return true;
	}

	public function __construct(array $userMap, array $groupMap, array $connectionInformation)
	{

		$this->usersOu = $connectionInformation['users-ou'];
		unset($connectionInformation['users-ou']);
		$this->groupsOu = $connectionInformation['groups-ou'];
		unset($connectionInformation['groups-ou']);
		$this->objectClasses = explode(',',$connectionInformation['objectClass']);
		unset($connectionInformation['objectClass']);
		$this->groupObjectClasses = explode(',',$connectionInformation['groupObjectClass']);
		unset($connectionInformation['groupObjectClass']);
		$this->groupFilterFormat = $connectionInformation['groupFilterFormat'];
		unset($connectionInformation['groupFilterFormat']);
		$this->studentOu =  $connectionInformation['students-ou'];
		unset($connectionInformation['students-ou']);
		$this->staffOu =  $connectionInformation['staff-ou'];
		unset($connectionInformation['staff-ou']);

		unset($connectionInformation['submit']);



		$this->options = $connectionInformation;

		$this->adapter = new Ldap();
		$this->adapter->setOptions($connectionInformation);
		$result = $this->adapter->bind();

		$this->getSchema();
		$this->userMap = $userMap;
		$this->groupMap = $groupMap;
	}

	public function delete($fullPath)
	{
		$this->adapter->delete($fullPath);
		return true;
	}

	public function getMemberships($userId)
	{
		$retVal = array();
		$groups = $this->getGroups();
		foreach($groups as $group){
			foreach($group->members as $member){
				if(strpos($member, $userId) !== FALSE){
					$retVal[] = $group;
				}
			}
		}
		return $retVal;
	}

	public function deleteMembership($userId, $groupId)
	{
		$group = $this->getGroup($groupId);
		foreach($group->members as $key => $member){
			if($member == $this->getGetUserFullDN($userId)){
				unset($group->members[$key]);
			}
		}
		$this->updateGroup($group);
		return true;
	}

	public function get($userId)
	{
		$searchStr = sprintf($this->options['accountFilterFormat'], $userId);
		$users = $this->adapter->search($searchStr);
		if($users->count() > 1){
			throw new \Exception('Found multiple users with given search: ' . $searchStr);
		}
		$rawUser = $users->current();
		$user = new User();
		foreach($this->userMap as $rawKey => $userKey){
			if(isset($rawUser[$rawKey])){
				$user->$userKey = $rawUser[$rawKey][count($rawUser[$rawKey]) - 1];
			}
		}
		$user->attributes = array();
		$attr = $this->getSchema()->getAttributeTypes();

		if($rawUser){
			foreach($rawUser as $attribute => $data){

				if(isset($attr[$attribute])){
					$description = $attr[$attribute]->getDescription();
				} else {
					$description = "";
				}
				$user->attributes[$attribute] = new Attribute(array(
					'name' => $attribute,
					'description' => $description,
					'data' => $data,
				));
			}
		} else {
			$user = false;
		}
		return $user;
	}

	public function addMembership($userId, $groupId)
	{
		$realGroup = $this->getGroup($groupId);

		if($realGroup){
			$members = $realGroup->attributes['member']->getData();
			foreach($members as $member){
				if($this->getGetUserFullDN($userId) == $member){
					throw new \Exception('User (' . $userId . ') already added to group (' . $groupId . ')');
				}
			}
			$members[] = $this->getGetUserFullDN($userId);
			$realGroup->setMembers($members);
			$this->updateGroup($realGroup);
		} else {
			throw new \Exception('Cannot find group with Id: ' . $groupId);
		}
		return true;
	}

	public function deleteGroup($groupId)
	{
		$this->adapter->delete($this->getGetGroupFullDN($groupId));
		return true;
	}

	public function addGroup(Group $group)
	{
		$retVal = false;
		$arrayUser = array();
		foreach ($this->groupMap as $key => $value) {
			if($group->$value){
				$arrayUser[$key] = array($group->$value);
			} else {
				$arrayUser[$key] = array($this->options['username']);
			}
		}
		$arrayUser['objectclass'] = $this->groupObjectClasses;
		$this->adapter->add($this->getGetGroupFullDN($group->getId()), $arrayUser);
		$retVal = true;

		return $retVal;

	}

	public function getGroups()
	{
		$groups = array();
		$searchStr = sprintf($this->groupFilterFormat, '*');
		$groupsRaw = $this->adapter->search($searchStr);
		foreach($groupsRaw as $groupRow){
			$group = new Group();
			foreach($this->groupMap as $rawKey => $groupKey){
				if(isset($groupRow[$rawKey])){
					if($groupKey == 'members'){
						$group->$groupKey = $groupRow[$rawKey];
					} else {
						$group->$groupKey = $groupRow[$rawKey][count($groupRow[$rawKey]) - 1];
					}

				}
			}
			$group->attributes = array();
			$attr = $this->getSchema()->getAttributeTypes();

			foreach($groupRow as $attribute => $data){

				if(isset($attr[$attribute])){
					$description = $attr[$attribute]->getDescription();
				} else {
					$description = "";
				}
				$group->attributes[$attribute] = new Attribute(array(
					'name' => $attribute,
					'description' => $description,
					'data' => $data,
				));
			}
			$groups[] = $group;

		}

		return $groups;


	}

	public static function getFormElements()
	{
		// TODO: Auto-generated method stub
		$elements = array();
		//Users OU
		$element = new Text('users-ou');
		$element->setLabel('User Organizational Unit');
		$element->setValue('ou=Users,dn=example,dn=com');
		$elements[] = $element;
		//Group OU
		$element = new Text('groups-ou');
		$element->setLabel('Group Organizational Unit');
		$element->setValue('ou=Groups,dn=example,dn=com');
		$elements[] = $element;
		$element = new Text('students-ou');
		$element->setLabel('Students Organizational Unit');
		$element->setValue('ou=Users,dn=example,dn=com');
		$elements[] = $element;
		//Group OU
		$element = new Text('staff-ou');
		$element->setLabel('Staff Organizational Unit');
		$element->setValue('ou=Groups,dn=example,dn=com');
		$elements[] = $element;
		//Host
		$element = new Text('host');
		$element->setLabel('Hostname');
		$element->setValue('localhost');
		$elements[] = $element;
		//PORT
		$element = new Text('port');
		$element->setLabel('Port');
		$element->setValue('389');
		$elements[] = $element;
		//StartTLS
		$element = new Select('useStartTls');
		$element->setLabel('Start TLS');
		$element->setValue(false);
		$element->setValueOptions(array(
			0 	=> 'No',
			1	=> 'Yes',
		));
		$elements[] = $element;
		//useSSL

		$element = new Select('useSsl');
		$element->setLabel('Use SSL');
		$element->setValue(false);
		$element->setValueOptions(array(
			0 	=> 'No',
			1	=> 'Yes',
		));
		$elements[] = $element;
		//username
		$element = new Text('username');
		$element->setLabel('Bind Username');
		$elements[] = $element;
		//password
		$element = new Text('password');
		$element->setLabel('Bind Password');
		$elements[] = $element;
		//bindRequiresDn
		$element = new Select('bindRequiresDn');
		$element->setLabel('Bind Requires Full Dn');
		$element->setValue(false);
		$element->setValueOptions(array(
			0 	=> 'No',
			1	=> 'Yes',
		));
		$elements[] = $element;
		//bindRequiresDn
		$element = new Text('baseDn');
		$element->setLabel('Base Dn');
		$element->setValue('ou=Users,dn=example,dn=com');
		$elements[] = $element;
		//bindRequiresDn
		$element = new Select('accountCanonicalForm');
		$element->setLabel('Account Canonical Form');
		$element->setValue(4);
		$element->setValueOptions(array(
			2 => 'alice',
			3 => 'EXAMPLE\alice',
			4 => 'alice@example.com',
		));
		$elements[] = $element;
		//bindRequiresDn
		$element = new Text('accountDomainName');
		$element->setLabel('Account Domain Name');
		$element->setValue('example.com');
		$elements[] = $element;
		//accountDomainNameShort
		$element = new Text('accountDomainNameShort');
		$element->setLabel('Account Short Name');
		$element->setValue('EXAMPLE');
		$elements[] = $element;
		//accountDomainNameShort
		$element = new Text('accountFilterFormat');
		$element->setLabel('Account Filter Format');
		$element->setValue('(&(objectClass=user)(sAMAccountName=%s))');
		$elements[] = $element;
		//groupFilterFormat
		$element = new Text('groupFilterFormat');
		$element->setLabel('Group Filter Format');
		$element->setValue('(&(objectClass=groupOfNames)(cn=%s))');
		$elements[] = $element;
		//bindRequiresDn
		$element = new Select('optReferrals');
		$element->setLabel('Allow Referrals');
		$element->setValue(false);
		$element->setValueOptions(array(
			0 	=> 'No',
			1	=> 'Yes',
		));
		$elements[] = $element;
		//objectClass
		$element = new Text('objectClass');
		$element->setLabel('User Object CLass (if multiple then seperate with a comma)');
		$element->setValue('person');
		$elements[] = $element;
		//groupObjectClass
		$element = new Text('groupObjectClass');
		$element->setLabel('Group Object CLass (if multiple then seperate with a comma)');
		$element->setValue('group');
		$elements[] = $element;



		$fieldset = new Fieldset('usermap');
		$fieldset->setLabel('User Map');
		$fieldset->add(array(
			'name' => 'id',
			'type' => 'Text',
			'options' => array(
				'label' => 'Id',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));
		$fieldset->add(array(
			'name' => 'username',
			'type' => 'Text',
			'options' => array(
				'label' => 'Username',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));

		$fieldset->add(array(
			'name' => 'firstname',
			'type' => 'Text',
			'options' => array(
				'label' => 'First Name',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));

		$fieldset->add(array(
			'name' => 'middlename',
			'type' => 'Text',
			'options' => array(
				'label' => 'Middle Name',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));

		$fieldset->add(array(
			'name' => 'lastname',
			'type' => 'Text',
			'options' => array(
				'label' => 'Last Name',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));

		$fieldset->add(array(
			'name' => 'email',
			'type' => 'Text',
			'options' => array(
				'label' => 'Email',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));
		$elements[] = $fieldset;

		$fieldset = new Fieldset('groupmap');
		$fieldset->setLabel('Group Map');
		$fieldset->add(array(
			'name' => 'id',
			'type' => 'Text',
			'options' => array(
				'label' => 'Id',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));
		$fieldset->add(array(
			'name' => 'members',
			'type' => 'Text',
			'options' => array(
				'label' => 'Members',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			),
		));
		$elements[] = $fieldset;

		return $elements;
	}

	public static function getFormInputFilter(){
		$mainFilter = new InputFilter();
		$mainFilter->add(array(
			'name' => 'users-ou',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'groups-ou',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'host',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'port',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'useStartTls',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'useSsl',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'username',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'password',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'bindRequiresDn',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'baseDn',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'accountCanonicalForm',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'accountDomainName',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'accountDomainNameShort',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'accountFilterFormat',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'groupFilterFormat',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'optReferrals',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'objectClass',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'groupObjectClass',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));

		return $mainFilter;
	}

	private function getGetUserFullDN($userId){
		return 'uid=' . $userId . ',' . $this->usersOu;
	}
	private function getStudentFullDN($userId){
		return 'uid=' . $userId . ',' . $this->studentOu;
	}
	private function getStaffFullDN($userId){
		return 'uid=' . $userId . ',' . $this->staffOu;
	}
	private function getGetGroupFullDN($userId){
		return 'cn=' . $userId . ',' . $this->groupsOu;
	}
	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::getGroup()
	 */
	public function getGroup($groupId) {
		$retVal = array();
		$searchStr = sprintf($this->groupFilterFormat, $groupId);
		$groupsRaw = $this->adapter->search($searchStr);
		foreach($groupsRaw as $groupRow){
			$group = new Group();
			foreach($this->groupMap as $rawKey => $groupKey){
				if(isset($groupRow[$rawKey])){
					if($groupKey == 'members'){
						$group->$groupKey = $groupRow[$rawKey];
					} else {
						$group->$groupKey = $groupRow[$rawKey][count($groupRow[$rawKey]) - 1];
					}

				}
			}
			$group->attributes = array();
			$attr = $this->getSchema()->getAttributeTypes();

			foreach($groupRow as $attribute => $data){

				if(isset($attr[$attribute])){
					$description = $attr[$attribute]->getDescription();
				} else {
					$description = "";
				}
				$group->attributes[$attribute] = new Attribute(array(
					'name' => $attribute,
					'description' => $description,
					'data' => $data,
				));
			}
			$retVal = $group;
			return $retVal;
		}
	}

	public function activate($userId)
	{
	    return true;
	}

	public function deactivate($userId)
	{
	    return true;
	}

	public function addStudent(User $user)
	{
		$retVal = false;
		$arrayUser = array();
		foreach ($this->userMap as $key => $value) {
			$arrayUser[$key] = array($user->$value);
		}
		$arrayUser['objectclass'] = $this->objectClasses;


		$this->adapter->add($this->getStudentFullDN($user->getUsername()), $arrayUser);
		$retVal = true;

		return $retVal;
	}

	public function addStaff(User $user)
	{
	    $retVal = false;
	    $arrayUser = array();
		foreach ($this->userMap as $key => $value) {
			$arrayUser[$key] = array($user->$value);
		}
		$arrayUser['objectclass'] = $this->objectClasses;


		$this->adapter->add($this->getStaffFullDN($user->getUsername()), $arrayUser);
		$retVal = true;

		return $retVal;
	}

	private function getSchema(){


		if(!isset($this->schema)){

			$cache   = \Zend\Cache\StorageFactory::factory(array(
				'adapter' => array(
					'name' => 'filesystem'
				),
				'plugins' => array(
					// Don't throw exceptions on cache errors
					'exception_handler' => array(
						'throw_exceptions' => false
					),
				)
			));

			$key    = 'connector-' . str_replace('.', '', $this->adapter->getOptions()['host']) . '-schema';
			$success = false;
			$result = $cache->getItem($key, $success);
			if (!$success) {
				$result = serialize($this->adapter->getSchema());
				$cache->setItem($key, $result);
			}
			$this->schema = unserialize($result);
		}
		/*echo '<pre>' ;
		foreach($this->schema->getAttributeTypes() as $name => $data){
			echo $name . "\n";
		}
		echo '</pre>';
		die();*/
		return $this->schema;
	}



}

?>