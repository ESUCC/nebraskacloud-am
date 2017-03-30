<?php
namespace Application\Interfaces;

use Application\Model\User;
use Application\Model\Group;
use Zend\InputFilter\InputFilter;
interface Connector
{
    /**
     * This function creates the object, passes the arrayMap that will be used to map the group and user dataelements to the user directory attributes
     * @param array $arrayMap
     * @param array $groupMap
     * @param array $connectionInformation
     */
    public function __construct(Array $userMap, Array $groupMap, Array $connectionInformation);
    /**
     * This function updates the user directory with the user object given.
     * @param User $user
     * @return bool
     */
    public function update(User $user);
    /**
     * This function returns a User object based of the ID that is passed.
     * @param Mixed $userId
     * @return User $user
     */
    public function get($userId);
    /**
     * This function returns a User object if the given username and password is correct, Otherwise it will return FALSE
     * @param string $username
     * @param string $password
     * @return User $user | FALSE
     */
    public function auth($username, $password);
    /**
     * This function returns a true or false pending on if the password was set sucessfully for the given userid
     * @param mixed $userId
     * @param string $newPassword
     * @return bool
     */
    public function resetPassword($userId, $newPassword);
    /**
     * This function adds the given user to the user directory and returns true if sucessful otherwise false.
     * @param User $user
     * @return bool
     */
    public function add(User $user);
    /**
     * This function adds the given student to the user directory and returns true if sucessful otherwise false.
     * @param User $user
     * @return bool
     */
    public function addStudent(User $user);
    /**
     * This function adds the given staff member to the user directory and returns true if sucessful otherwise false.
     * @param User $user
     * @return bool
     */
    public function addStaff(User $user);
    /**
     * This function will delete the given user from the user directory and returns true if sucessful otherwise false.
     * @param string $userId
     * @return bool
     */
    public function delete($userId);
    /**
     * This function returns an array of form elements to create the connector
     * @return Array<Elements>
     */
    public static function getFormElements();
    /**
     * This function returns the inputfilter associated
     * @return InputFilter
     */
    public static function getFormInputFilter();
    /**
     * This function will return all the groups that is in the user directory
     * @return Array<Group>
     */
    public function getGroups();
    /**
     * This function will return all the groups that is in the user directory
     * @return Group
     */
    public function getGroup($groupId);
    /**
     * This function will add the given group to the user directory
     * @param Group $group
     * @return bool
     */
    public function addGroup(Group $group);
    /**
     * This function will delete the grouop from the userdirectory
     * @param mixed $groupId
     * @return bool
     */
    public function deleteGroup($groupId);
    /**
     * This function will update the grouop in the userdirectory
     * @param mixed $groupId
     * @return bool
     */
    public function updateGroup($groupId);
    /**
     * This function will return an array of groups that the given userid is assigned to
     * @param mixed $userId
     * @return bool
     */
    public function getMemberships($userId);
    /**
     * This function will add a group membership to the user given
     * @param mixed $userId
     * @param mixed $groupId
     * @return bool
     */
    public function addMembership($userId, $groupId);
    /**
     * This function will remove the group membership of the userId
     * @param mixed $userId
     * @param mixed $groupId
     * @return bool
     */
    public function deleteMembership($userId, $groupId);
    /**
     * This function returns all users from the userdirectory
     * @return Array<User>
     */
    public function getAllUsers();
    /**
     * This function will activate a user.
     * @param string $userId
     * @return bool
     */
    public function activate($userId);
    /**
     * This function will deactivate a user.
     * @param string $userId
     * @return bool
     */
    public function deactivate($userId);
}

?>