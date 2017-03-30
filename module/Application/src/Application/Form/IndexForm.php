<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class IndexForm extends Form
{

	public function __construct()
	{
		parent::__construct('index-form');
		
		$mainFilter = new InputFilter();
	}
}
?>