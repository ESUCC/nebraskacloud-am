<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
class DeleteSchoolForm extends Form
{
	public function __construct(){
		parent::__construct('delete-school-form');


		$this->add(array(
			'name' => 'school-id',
			'type' => 'hidden',
			'options' => array(
			)
		));

		$filter = new InputFilter();
		$filter->add(array(
			'name' => 'school-id',
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