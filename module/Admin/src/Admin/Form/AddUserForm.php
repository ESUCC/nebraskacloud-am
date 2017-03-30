<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\InputFilter\InputFilter;

class AddUserForm extends Form
{

	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('add-user-form');

		$this->serviceLocator = $sm;

		$this->add(array(
			'name' => 'user-id',
			'type' => 'Text',
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
			'name' => 'first-name',
			'type' => 'Text',
			'options' => array(
				'label' => 'First Name',

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
			'name' => 'middle-name',
			'type' => 'Text',
			'options' => array(
				'label' => 'Middle Name',

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
			'name' => 'last-name',
			'type' => 'Text',
			'options' => array(
				'label' => 'Last Name',

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
			'name' => 'email',
			'type' => 'Email',
			'options' => array(
				'label' => 'Email',

				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				)
			)
		));

		$passwords = array(
			// 'current-password' => 'Current Password',
			'new-password' => 'New Password',
			'confirm-password' => 'Confirm Password'
		);
		foreach ($passwords as $name => $label) {
			$this->add(array(
				'name' => $name,
				'type' => 'Password',
				'options' => array(
					'label' => $label,

					'label_options' => array(
						'disable_html_escape' => true,
						'always_wrap' => false
					),
					'label_attributes' => array(

					),
					'inline' => true
				)
			));
		}
		$this->add(array(
			'name' => 'issuperadmin',
			'type' => 'Checkbox',
			'options' => array(
				'label' => 'Super Admin',
				'column-size' => 'sm-8 col-sm-offset-4',

				'use_hidden_element' => true,
				'checked_value' => '1',
				'unchecked_value' => '0',

				'label_attributes' => array(
					'class' => 'control-label'
				),
			),
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
			'name' => 'first-name',
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
			'name' => 'middle-name',
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
			'name' => 'last-name',
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
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    array(
                        'name' => 'StripTags'
                    ),
                    array(
                        'name' => 'StringTrim'
                    ),
                ),
                'validators' => array(
                    array(
                        'name' => 'StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => 64,
                            'messages' => array(
                                \Zend\Validator\StringLength::TOO_LONG => 'Email too long!',
                                \Zend\Validator\StringLength::TOO_SHORT => 'Email too short!'
                            )
                        )
                    ),
                    array(
                        'name' => 'EmailAddress',
                        'options' => array(
                            'allow' => \Zend\Validator\Hostname::ALLOW_DNS,
                            'useMxCheck'    => true,
                        ),
                    ),
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

	private function getConnectorById($id)
	{
		return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
	}

	public function getConnectorTableGateway()
	{
		if (! isset($this->connectorTableGateway)) {
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}

	public function getConnectorDataTableGateway()
	{
		if (! isset($this->connectorDataTableGateway)) {
			$this->connectorDataTableGateway = $this->serviceLocator->get('Application\Model\ConnectorDataTable');
		}
		return $this->connectorDataTableGateway;
	}

	public function getQuestionTableGateway()
	{
		if (! isset($this->questionTableGateway)) {
			$this->questionTableGateway = $this->serviceLocator->get('Application\Model\QuestionTable');
		}
		return $this->questionTableGateway;
	}
}