<?php
namespace Application\Model;

class User
{
    public $username;
    public $id;
    public $email;
    public $firstname;
    public $lastname;
    public $middlename;

    public $attributes;
    /**
     * @return the $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return the $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return the $middlename
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @return the $attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param field_type $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param field_type $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param field_type $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param field_type $middlename
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    /**
     * @param field_type $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }



}

?>