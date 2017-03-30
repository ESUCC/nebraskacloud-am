<?php
namespace Application\Model;

class Group
{
    public $name;
    public $id;
    public $members;
    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	public function getMembers()
	{
		return $this->members;
	}

	public function setMembers($members)
	{
		$this->members = $members;
		return $this;
	}






}

?>