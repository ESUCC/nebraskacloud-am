<?php
namespace Application\Model;

class Attribute
{
	public $name;
	public $description;
	public $data;

	public function __construct($data = null){
		$this->setData($data);
	}

	public function setData(Array $data){
		foreach(get_object_vars($this) as $key => $value){
			$this->$key = isset($data[$key]) ? $data[$key] : $value;
		}
	}
	/**
	 * @return the $name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return the $description
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @return the $data
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @param field_type $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}





}

?>