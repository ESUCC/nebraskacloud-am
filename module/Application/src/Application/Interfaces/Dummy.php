<?php
namespace Application\Interfaces;

use Application\Model\User;
use Application\Model\Group;
use Zend\InputFilter\InputFilter;

class Dummy implements Connector
{

    public function add(User $user)
    {
        return TRUE;
    }

    public function resetPassword($userId, $newPassword)
    {
        return TRUE;
    }

    public function getAllUsers()
    {
        $user = new User();
        $user->setFirstname('Karl');
        $user->setLastname('Smith');
        $user->setMiddlename('Feeder');
        $user->setId('666');
        $user->setEmail('imthefeeder@karlsteam.com');

        return array($user);
    }

    public function auth($username, $password)
    {
        $user = new User();
        $user->setFirstname('Karl');
        $user->setLastname('Smith');
        $user->setMiddlename('Feeder');
        $user->setId('666');
        $user->setEmail('imthefeeder@karlsteam.com');
        return $user;
    }

    public function updateGroup($groupId)
    {
        return TRUE;
    }

    public function update(User $user)
    {
        return TRUE;
    }

    public function __construct(array $userMap, array $groupMap, array $connectionInformation)
    {

    }

    public function delete($userId)
    {
        return TRUE;
    }

    public function getMemberships($userId)
    {
        $group = new Group;
        $group->setId(1);
        $group->setName('Thunder');
        return array($group);
    }

    public function deleteMembership($userId, $groupId)
    {
        return TRUE;
    }

    public function get($userId)
    {
        $user = new User();
        $user->setFirstname('Karl');
        $user->setLastname('Smith');
        $user->setMiddlename('Feeder');
        $user->setId('666');
        $user->setEmail('imthefeeder@karlsteam.com');
        return $user;
    }

    public function addMembership($userId, $groupId)
    {
        return TRUE;
    }

    public function deleteGroup($groupId)
    {
        return TRUE;
    }

    public function addGroup(Group $group)
    {
        return TRUE;
    }

    public function getGroups()
    {
        $group = new Group;
        $group->setId(1);
        $group->setName('Thunder');
        return array($group);
    }
	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::getFormElements()
	 */
	public static function getFormElements() {
		// TODO: Auto-generated method stub
		return array();
	}

	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::getFormInputFilter()
	 */
	public static function getFormInputFilter() {
		// TODO: Auto-generated method stub
		$mainFilter = new InputFilter();
		return $mainFilter;
	}

	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::getGroup()
	 */
	public function getGroup($groupId) {
		// TODO: Auto-generated method stub
		$group = new Group;
		$group->setId(1);
		$group->setName('Thunder');
		return $group;
	}



	public function activate($userId)
	{
	    return true;
	}

	public function deactivate($userId)
	{
	    return true;
	}

	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::addStudent()
	 */
	public function addStudent(User $user)
	{
		// TODO: Auto-generated method stub
	}



	/**
	 * {@inheritDoc}
	 * @see \Application\Interfaces\Connector::addStaff()
	 */
	public function addStaff(User $user) {
		// TODO: Auto-generated method stub

	}

}

?>