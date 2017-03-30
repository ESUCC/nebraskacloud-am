<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class DeleteConnectorFromUserForm extends Form
{

	protected $serviceLocator;
	public function __construct()
	{
		parent::__construct('add-connector-to-user-form');

		$this->add(array(
			'name' => 'user-id',
			'type' => 'hidden',
			'options' => array(
				'label' => 'Username',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				)
			)
		));

		$this->add(array(
			'name' => 'connector-id',
			'type' => 'hidden',
			'options' => array(
				'label' => 'Connector',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
			)
		));




		$mainFilter = new InputFilter();
		$mainFilter->add(array(
			'name' => 'user-id',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'connector-id',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			)
		));

		$this->setInputFilter($mainFilter);
	}

	public function getConnectorTableGateway()
	{
		if (! isset($this->connectorTableGateway)) {
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}
}

?>