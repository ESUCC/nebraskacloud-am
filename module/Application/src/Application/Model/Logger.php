<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;

class Logger
{
    public $id;
    public $timestamp;
    public $connector_id;
    public $user_id;
    public $action;
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return the $connector_id
     */
    public function getConnector_id()
    {
        return $this->connector_id;
    }

    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return the $action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @param field_type $connector_id
     */
    public function setConnector_id($connector_id)
    {
        $this->connector_id = $connector_id;
    }

    /**
     * @param field_type $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param field_type $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    public function exchangeArray($data){
        foreach($this as $var => $value){
            $this->$var = (isset($data[$var])) ? $data[$var] : $this->$var;
        }
    }

    public function getArrayCopy(){
        return get_object_vars($this);
    }

    public function getInputFilter(){
        if(!$this->inputFilter){
            $inputFilter = new InputFilter();
            $factory = new Factory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'id',
                'required' => true,
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'timestamp',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'connector_id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'user_id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'action',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }

}

?>