<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;

class Connector
{
    public $id;
    public $hostname;
    public $type;

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
                'name'     => 'hostname',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'type',
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
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $hostname
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @return the $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @param field_type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }




}

?>