<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;

class ConnectorData
{
    public $id;
    public $connector_id;
    public $data_type;
    public $data;

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
                'name'     => 'connector_id',
                'required' => true,
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'data_type',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'data',
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
     * @return the $connector_id
     */
    public function getConnector_id()
    {
        return $this->connector_id;
    }

    /**
     * @return the $data_type
     */
    public function getData_type()
    {
        return $this->data_type;
    }

    /**
     * @return the $data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $connector_id
     */
    public function setConnector_id($connector_id)
    {
        $this->connector_id = $connector_id;
    }

    /**
     * @param field_type $data_type
     */
    public function setData_type($data_type)
    {
        $this->data_type = $data_type;
    }

    /**
     * @param field_type $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
}

?>