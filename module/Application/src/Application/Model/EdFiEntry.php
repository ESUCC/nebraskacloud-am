<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;

class EdFiEntry
{
    public $id;
    public $connector_id;
    public $sync_students;
    public $sync_staff;
    public $pattern1;
    public $pattern2;
    public $pattern3;
    public $pattern4;
    public $who_to_notify_on_fail;
    public $edfi_username;
    public $edfi_password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getConnectorId()
    {
        return $this->connector_id;
    }

    public function setConnectorId($connector_id)
    {
        $this->connector_id = $connector_id;
        return $this;
    }

    public function getSyncStudents()
    {
        return $this->sync_students;
    }

    public function setSyncStudents($sync_students)
    {
        $this->sync_students = $sync_students;
        return $this;
    }

    public function getSyncStaff()
    {
        return $this->sync_staff;
    }

    public function setSyncStaff($sync_staff)
    {
        $this->sync_staff = $sync_staff;
        return $this;
    }

    public function getPattern1()
    {
        return $this->pattern1;
    }

    public function setPattern1($pattern1)
    {
        $this->pattern1 = $pattern1;
        return $this;
    }

    public function getPattern2()
    {
        return $this->pattern2;
    }

    public function setPattern2($pattern2)
    {
        $this->pattern2 = $pattern2;
        return $this;
    }

    public function getPattern3()
    {
        return $this->pattern3;
    }

    public function setPattern3($pattern3)
    {
        $this->pattern3 = $pattern3;
        return $this;
    }

    public function getPattern4()
    {
        return $this->pattern4;
    }

    public function setPattern4($pattern4)
    {
        $this->pattern4 = $pattern4;
        return $this;
    }

    public function getWhoToNotifyOnFail()
    {
        return $this->who_to_notify_on_fail;
    }

    public function setWhoToNotifyOnFail($who_to_notify_on_fail)
    {
        $this->who_to_notify_on_fail = $who_to_notify_on_fail;
        return $this;
    }


    public function exchangeArray($data){
        foreach($this as $var => $value){
            $this->$var = (isset($data[$var])) ? $data[$var] : $this->$var;
        }
    }

    public function getArrayCopy(){
        return get_object_vars($this);
    }
	/**
	 * @return the $edfi_username
	 */
	public function getEdfi_username()
	{
		return $this->edfi_username;
	}

	/**
	 * @return the $edfi_password
	 */
	public function getEdfi_password()
	{
		return $this->edfi_password;
	}

	/**
	 * @param field_type $edfi_username
	 */
	public function setEdfi_username($edfi_username)
	{
		$this->edfi_username = $edfi_username;
	}

	/**
	 * @param field_type $edfi_password
	 */
	public function setEdfi_password($edfi_password)
	{
		$this->edfi_password = $edfi_password;
	}


}