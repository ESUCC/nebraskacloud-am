<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\InputFilter\InputFilter;
class SelectConnectorForm extends Form
{
	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('add-user-form');

		$this->serviceLocator = $sm;

		$rawConnectors = $this->getConnectorTableGateway()->fetch();
		$id = $this->serviceLocator->get('config')['adminLoginConnectorid'];
		$connectors = array();
		$connectors[''] = "Please Select a Connector";
		foreach($rawConnectors as $connector){
			/**
			 * @var $connector \Application\Model\Connector
			 */
			if($connector->getId() != $id){
				$connectors[$connector->getId()] = $connector->getHostname() . ' (id: ' . $connector->getId() . ')';
			}
		}

		$this->add(array(
			'name' => 'connector-id',
			'type' => 'Select',
			'options' => array(
				'label' => 'Connector',
				'column-size' => 'sm-8',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false,
				),
				'label_attributes' => array(
					'class' => 'col-sm-4 control-label'
				),
				'value_options' => $connectors,
			)
		));

		$this->add(array(
			'name' => 'submit',
			'type' => 'Submit',
			'options' => array(
				'column-size' => 'sm-6 col-sm-offset-6'
			),
			'attributes' => array(
				'value' => 'Next',
				'id' => 'submitbutton',
				'class' => 'btn btn-primary submit-button has-spinner'
			)
		));


		$mainFilter = new InputFilter();
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