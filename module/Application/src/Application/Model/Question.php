<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory;

class Question
{
    public $id;
    public $connector_id;
    public $question;
    public $attribute;

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
     * @return the $question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return the $attribute
     */
    public function getAttribute()
    {
        return $this->attribute;
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
     * @param field_type $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @param field_type $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
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
                'name'     => 'connector_id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'question',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            )));
            $inputFilter->add($factory->createInput(array(
                'name'     => 'attribute',
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