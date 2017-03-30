<?php
namespace Application\Model;

class GlobalMessage
{
	public $type;
	public $title;
	public $message;

	public function __construct($message, $title = "Message", $type = 'success'){
		$this->message = $message;
		$this->title = $title;
		$this->type = $type;
	}
	/**
	 * @return the $type
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @return the $title
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @return the $message
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param field_type $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @param field_type $message
	 */
	public function setMessage($message)
	{
		$this->message = $message;
	}



}

?>