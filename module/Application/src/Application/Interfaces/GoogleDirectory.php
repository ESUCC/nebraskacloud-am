<?php
namespace Application\Interfaces;

use Application\Model\User;
use Application\Model\Group;
use Zend\Form\Element;
use Zend\Form\Element\Text;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element\Textarea;
use Application\Model\Attribute;
use Zend\Form\Fieldset;

class GoogleDirectory implements Connector
{
	private $service;
	private $domain;

	protected $userMap;

	private $connectionInformation;

	public static $SCOPES = array(
		\Google_Service_Directory::ADMIN_DIRECTORY_USER,
		\Google_Service_Directory::ADMIN_DIRECTORY_USERSCHEMA,
		\Google_Service_Directory::ADMIN_DIRECTORY_DOMAIN,
		\Google_Service_Directory::ADMIN_DIRECTORY_GROUP,
		\Google_Service_Directory::ADMIN_DIRECTORY_GROUP_MEMBER,
	    \Google_Service_Directory::ADMIN_DIRECTORY_ORGUNIT,
	);
	public static $ACCESSTYPE = "offline";

	public function add(User $user)
	{
	    $retVal = false;
	    $username = new \Google_Service_Directory_UserName();
	    $username->setFamilyName($user->getLastname());
	    $username->setGivenName($user->getFirstName());

	    $googleUser = new \Google_Service_Directory_User();
	    $googleUser->setName($username);
	    $googleUser->setPrimaryEmail($user->getEmail());
	    $googleUser->setExternalIds(array(
	    	'studentid' => $user->id,
	    ));
	    $googleUser->setPassword($this->randomPassword());
	    if( $this->service->users->insert($googleUser))
	    {
	        $retVal = true;
	    }

	    return $retVal;
	}

	public function addStudent(User $user)
	{
	    $retVal = false;
	    $username = new \Google_Service_Directory_UserName();
	    $username->setFamilyName($user->getLastname());
	    $username->setGivenName($user->getFirstName());

	    $googleUser = new \Google_Service_Directory_User();
	    $googleUser->setName($username);
	    $googleUser->setPrimaryEmail($user->getUsername() . '@' . $this->domain);
	    $googleUser->setExternalIds(array(
	    	array(
	    	'type' => 'organization',
	    	'value' => $user->id,
	    )));
	    $googleUser->setPassword($this->randomPassword());
	    $googleUser->setOrgUnitPath('/' . $this->connectionInformation['studentOU']);
	    if( $this->service->users->insert($googleUser))
	    {
	        $retVal = true;
	    }

	    return $retVal;
	}

	public function addStaff(User $user)
	{
	   $retVal = false;
	    $username = new \Google_Service_Directory_UserName();
	    $username->setFamilyName($user->getLastname());
	    $username->setGivenName($user->getFirstName());

	    $googleUser = new \Google_Service_Directory_User();
	    $googleUser->setName($username);
	    $googleUser->setPrimaryEmail($user->getUsername() . '@' . $this->domain);
	    $googleUser->setExternalIds(array(
	    	array(
	    	'type' => 'organization',
	    	'value' => $user->id,
	    )));
	    $googleUser->setPassword($this->randomPassword());
	    $googleUser->setOrgUnitPath('/' . $this->connectionInformation['staffOU']);
	    if( $this->service->users->insert($googleUser))
	    {
	        $retVal = true;
	    }

	    return $retVal;
	}

	public function resetPassword($userId, $newPassword)
	{
	    try{
	        $stuff = $this->service->users->get($userId . '@' . $this->domain);
	        $stuff->setPassword($newPassword);
    	    $this->service->users->update($userId . '@' . $this->domain, $stuff);
	    } catch(\Exception $e){
	        throw new \Exception($e->getMessage());
	    }
	    return true;
	}

	public function getAllUsers()
	{
	    $optParams = array(
	        'customer' => 'my_customer',
	    	'maxResults' => 500,
	    );

	    $users = array();

	    do{
	    	$usersPaginated = $this->service->users->listUsers($optParams);
		    foreach($usersPaginated as $userRaw){
		    	/**
		    	 * @var $userRaw \Google_Service_Directory_User
		    	 */
	            $users[] = $this->convertRawUsertoUser($userRaw);

	        }
	        $optParams['pageToken'] = $usersPaginated->nextPageToken;

	    }while($usersPaginated->nextPageToken);


	    return $users;
	}

	public function auth($username, $password)
	{
	    return true;
	    $retValue = false;

	    $user = $this->get($username);
	    $email = $user->getEmail();

	    $googleUser = $this->service->users->get('mcharris@esucc.org');
	    echo '<pre>' . print_r($googleUser, true) . '</pre>';
	    echo '<pre>' . print_r($password, true) . '</pre>';
	    if ($googleUser->getId() == 'mcharrris@esucc.org' && $googleUser->getPassword() == $password)
	    {
	        $retValue = true;
	    }
	    return $retValue;
	}

	public static function getFormElements()
	{
	    $elements = array();

	    $element = new Textarea('json-contents');
		$element->setLabel('Json Contents');
		$element->setValue('{"web":{"client_id"...');
		$elements[] = $element;

		$element = new Text('token');
		$element->setLabel('Token');
		$element->setAttribute('data-execute-js', 'googleGetToken');
		$element->setAttribute('data-execute-name', 'Get Token');
		$elements[] = $element;

		$element = new Text('studentOU');
		$element->setLabel('Student OU');
		$element->setValue('Students');
		$elements[] = $element;

		$element = new Text('staffOU');
		$element->setLabel('Staff OU');
		$element->setValue('Staff');
		$elements[] = $element;

		$element = new Text('domain');
		$element->setLabel('Domain');
		$element->setValue('domain.org');
		$elements[] = $element;

		$fieldset = new Fieldset('usermap');

		$fieldset->add(array(
		    'name' => 'username',
		    'type' => 'hidden',
		    'value'=> 'PrimaryEmail',
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
		    'type' => 'hidden',
		    'value'=> 'GivenName',
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
		    'type' => 'hidden',
		     'value'=> null,
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
		    'type' => 'hidden',
		    'value'=> 'FamilyName',
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
		    'type' => 'hidden',
		    'value'=> 'PrimaryEmail',
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
		$fieldset->add(array(
		    'name' => 'id',
		    'type' => 'hidden',
		    'value'=> 'PrimaryEmail',
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
		$elements[] = $fieldset;

		return $elements;
	}

	public static function getFormInputFilter(){
	    $mainFilter = new InputFilter();
	    $mainFilter->add(array(
	        'name' => 'json-contents',
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
	        'name' => 'token',
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
	        'name' => 'studentOU',
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
	        'name' => 'staffOU',
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
	        'name' => 'domain',
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
	        'name' => 'usermap',
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
	public function updateGroup($groupId)
	{
	    throw new \Exception('Not Implmeneted');

	}

	public function update(User $user)
	{
	    return true;

	    $retVal = false;
	    $username = new \Google_Service_Directory_UserName();
	    $username->setFamilyName($user->getLastname());
	    $username->setGivenName($user->getFirstName());

	    $googleUser = new \Google_Service_Directory_User();
	    $googleUser->setName($username);
	    $googleUser->setPrimaryEmail($user->getUsername() . '@' . $this->domain);
	    $googleUser->setExternalIds(array(
	    	array(
	    	'type' => 'organization',
	    	'value' => $user->id,
	    )));
	    if( $this->service->users->update($user->getEmail(), $googleUser))
	    {
	        $retVal = true;
	    }

	    return $retVal;
	}

	public function __construct(array $userMap, array $groupMap, array $connectionInformation)
	{
	    $this->connectionInformation = $connectionInformation;

		$this->client = new \Google_Client();
	    $this->client->setAuthConfig($connectionInformation['json-contents']);
	    $this->client->setApplicationName('Google Connector');
	    $this->client->setScopes(GoogleDirectory::$SCOPES);
	    $this->client->setAccessType(GoogleDirectory::$ACCESSTYPE);

	    $this->client->setAccessToken($connectionInformation['token']);

	    $this->domain = $connectionInformation['domain'];

	    $private_key = $connectionInformation['token'];
	    $scopes = array('https://www.googleapis.com/auth/admin.directory.user',
	        'https://www.googleapis.com/auth/admin.directory.group.member',
	        'https://www.googleapis.com/auth/admin.directory.rolemanagement',
	        'https://www.googleapis.com/admin/directory/v1/users',
	        'https://www.googleapis.com/admin/directory/v1/customer/customerId/orgunits',
	    );


	    if ($this->client->isAccessTokenExpired()) {
	    	 $this->client->refreshToken($this->client->getRefreshToken());
	    }

		$this->service = new \Google_Service_Directory($this->client);

		$this->userMap = $userMap;

	}

	public function delete($userId)
	{
	    $retval = false;
	    try{
	        $this->service->users->delete($userId);
	        $retval = true;
	    } catch(\Exception $e){
	        throw new \Exception('Error could not delete user.');
	    }
	    return $retval;

	}

	public function getMemberships($userId)
	{
	    throw new \Exception('Not Implmeneted');
	}

	public function deleteMembership($userId, $groupId)
	{
	   throw new \Exception('Not Implmeneted');
	}

	public function get($userId)
	{
		$userRaw = $this->service->users->get($userId . '@' . $this->domain);
		return $this->convertRawUserToUser($userRaw);
	}

	public function addMembership($userId, $groupId)
	{

	    throw new \Exception('Not Implmeneted');
	}

	public function deleteGroup($groupId)
	{
	    throw new \Exception('Not Implmeneted');
	}

	public function addGroup(Group $group)
	{
	    throw new \Exception('Not Implmeneted');
	}


	public function getGroups()
	{
	    throw new \Exception('Not Implmeneted');
	}

	private function convertRawUsertoUser(\Google_Service_Directory_User $userRaw){
		$attributes = (Array) $userRaw;

		$user = new User();

		$user->setEmail($userRaw->getPrimaryEmail());
		$user->setFirstname($userRaw->getName()->getGivenName());
		$user->setLastname($userRaw->getName()->getFamilyName());
		//echo '<pre>' . print_r($userRaw, true) . '</pre>';

		$organization = "";
		if($userRaw->getExternalIds() != null){
			foreach($userRaw->getExternalIds() as $externalId){
				if($externalId['type'] == 'organization'){
					$organization = $externalId['value'];
				}
			}
		}
		$user->setId($organization);
		$user->setUsername(explode('@', $userRaw->getPrimaryEmail())[0]);

		$user->attributes = array();
		foreach($attributes as $name => $data){
		    if ($name == 'externalIds')
		    {
		        $user->attributes[$name] = new Attribute(array(
		            'name' => $name,
		            'data' => $data[0]['value'],
		        ));
		    }
		    else {
			$user->attributes[$name] = new Attribute(array(
				'name' => $name,
				'data' => $data,
			));}
			if(isset($this->userMap[$name])){
				$user->$this->userMap[$name] = $data;
			}
		}
		return $user;
	}


    public function getGroup($groupId)
    {
        throw new \Exception('Not Implmeneted');
    }

    public function activate($userId)
    {
        $retVal = false;
        try{
           	$stuff = $this->service->users->get($userId);
	        $stuff->setSuspended('false');
    	    $this->service->users->update($userId, $stuff);
            $retval = true;
        } catch(\Exception $e){
            throw new \Exception('Error could not activate user.');
        }
        return $retVal;
    }

    public function deactivate($userId)
    {
        $retVal = false;
        try{
            $stuff = $this->service->users->get($userId);
	        $stuff->setSuspended('true');
    	    $this->service->users->update($userId, $stuff);
            $retval = true;
        } catch(\Exception $e){
            throw new \Exception('Error could not deactivate user.');
        }
        return $retVal;

    }

    private function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 14; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

}

?>