<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
class DeleteEdFiEntryForm extends Form
{
	public function __construct(){
		parent::__construct('delete-edfi-form');


		$this->add(array(
			'name' => 'edfi-entry-id',
			'type' => 'hidden',
			'options' => array(
			)
		));

		$filter = new InputFilter();
		$filter->add(array(
			'name' => 'edfi-entry-id',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags',
				),
				array(
					'name' => 'StringTrim',
				)
			),
		));
		$this->setInputFilter($filter);
	}
}

?>