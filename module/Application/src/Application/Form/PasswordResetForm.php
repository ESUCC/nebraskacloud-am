<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\ServiceManager\ServiceManager;

class PasswordResetForm extends Form
{

	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('password-reset-form');
		$this->serviceLocator = $sm;
		$this->add(array(
			'name' => 'connector-id',
			'type' => 'Select',
			'options' => array(
				'label' => 'User Directory',
				'column-size' => 'sm-6',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(
					'class' => 'col-sm-4 control-label'
				)
			)
		));

		$this->add(array(
			'name' => 'userid',
			'type' => 'Text',
			'options' => array(
				'label' => 'Username',
				'column-size' => 'sm-6',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(
					'class' => 'col-sm-4 control-label'
				)
			)
		));
		$passwords = array(
			'current-password' => 'Current Password',
			'new-password' => 'New Password',
			'confirm-password' => 'Confirm Password'
		);
		foreach ($passwords as $name => $label) {
			$this->add(array(
				'name' => $name,
				'type' => 'Password',
				'options' => array(
					'label' => $label,
					'column-size' => 'sm-6',
					'label_options' => array(
						// 'position' => \Zend\Form\View\Helper\FormRow::LABEL_PREPEND,
						'disable_html_escape' => true,
						'always_wrap' => false
					),
					'label_attributes' => array(
						'class' => 'col-sm-4 control-label'
					),
					'inline' => true
				)
			));
		}

		$this->add(array(
			'name' => 'submit',
			'type' => 'Submit',
			'options' => array(
				'column-size' => 'sm-6 col-sm-offset-6'
			),
			'attributes' => array(
				'value' => 'Submit',
				'id' => 'submitbutton',
				'class' => 'btn btn-primary submit-button has-spinner',
			)
		));

		/**
		 * ****** SET INPUT FILTER **********
		 */
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
		$mainFilter->add(array(
			'name' => 'userid',
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
			'name' => 'current-password',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			),
			'validators' => array(
				array(
					'name' => 'Callback',
					'options' => array(
						'messages' => array(
							\Zend\Validator\Callback::INVALID_VALUE => 'Current Password is invalid'
						),
						'callback' => function ($value) {
							if($this->getConnectorById($this->data['connector-id'])->auth($this->data['userid'], $value)){
								return true;
							} else {
								return false;
							}
						}
					)
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'new-password',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			),
			'validators' => array(
				array(
					'name' => 'Callback',
					'options' => array(
						'messages' => array(
							\Zend\Validator\Callback::INVALID_VALUE => 'New Password does not match the Confirm Password'
						),
						'callback' => function ($value) {
							if ($this->data['new-password'] == $this->data['confirm-password']) {
								return true;
							} else {
								return false;
							}
						}
					)
				),
				array(
					'name' => 'Callback',
					'options' => array(
						'messages' => array(
							\Zend\Validator\Callback::INVALID_VALUE => 'Your new password matches your current password. Please pick a different password'
						),
						'callback' => function ($value) {
							if ($this->data['new-password'] == $this->data['current-password']) {
								return false;
							} else {
								return true;
							}
						}
					)
				)
			)
		));
		$mainFilter->add(array(
			'name' => 'confirm-password',
			'required' => true,
			'filters' => array(
				array(
					'name' => 'StripTags'
				),
				array(
					'name' => 'StringTrim'
				)
			),
			'validators' => array(
				array(
					'name' => 'Callback',
					'options' => array(
						'messages' => array(
							\Zend\Validator\Callback::INVALID_VALUE => 'Confirm Password does not match the New Password'
						),
						'callback' => function ($value) {
							if ($this->data['new-password'] == $this->data['confirm-password']) {
								return true;
							} else {
								return false;
							}
						}
					)
				)
			)
		));

		$this->setInputFilter($mainFilter);
	}

	private function getConnectorById($id){
		return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
	}

	public function getConnectorTableGateway(){
		if(!isset($this->connectorTableGateway)){
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}
	public function getConnectorDataTableGateway(){
		if(!isset($this->connectorDataTableGateway)){
			$this->connectorDataTableGateway = $this->serviceLocator->get('Application\Model\ConnectorDataTable');
		}
		return $this->connectorDataTableGateway;
	}

}

?>