<?php
namespace Admin\Form;

use Zend\ServiceManager\ServiceManager;
use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
class AddConnectorToUserForm extends Form
{
	protected $serviceLocator;
	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('add-connector-to-user-form');

		$this->serviceLocator = $sm;

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

		$rawConnectors = $this->getConnectorTableGateway()->fetch();
		$id = $this->serviceLocator->get('config')['adminLoginConnectorid'];
		$connectors = array();
		$connectors[''] = "Please Select a Connector";
		foreach($rawConnectors as $key => $connector){
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

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				),
				'value_options' => $connectors,
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