<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\InputFilter\InputFilter;
use Zend\Form\Fieldset;

class EdFiEntryForm extends Form
{

	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('ed-fi-entry-form');

		$this->serviceLocator = $sm;

		$connectorsRaw = $this->getConnectorTableGateway()->fetch();
		$connectors = array();
		foreach($connectorsRaw as $connector) {
		    /**
		     * @var $connector \Application\Model\Connector
		     */
		    $connectors[$connector->getId()] = $connector->getHostname();
		}

		$this->add(array(
		    'name' => 'connector-id',
		    'type' => 'Select',
		    'options' => array(
		        'label' => 'Connector ID',
		        //'column-size' => 'sm-6',
		        //'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(
		            //'class' => 'col-sm-4 control-label'
		        ),
		        'value_options' => $connectors,
		    ),

		));

		$this->add(array(
			'name' => 'sync-students',
			'type' => 'checkbox',
			'options' => array(
				'label' => 'Sync Students',
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
			'name' => 'sync-staff',
			'type' => 'checkbox',
			'options' => array(
				'label' => 'Sync Staff',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				)
			)
		));


		$fs = new Fieldset('ed-fi-patterns');

		$fs->add(array(
			'name' => 'pattern-1',
			'type' => 'Text',
			'options' => array(
				'label' => 'Pattern #1',
				'inline' => true,
				'label_options' => array(
					'disable_html_escape' => true,
					'always_wrap' => false
				),
				'label_attributes' => array(

				)
			)
		));

		$fs->add(array(
		    'name' => 'pattern-2',
		    'type' => 'Text',
		    'options' => array(
		        'label' => 'Pattern #2',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(

		        )
		    )
		));

		$fs->add(array(
		    'name' => 'pattern-3',
		    'type' => 'Text',
		    'options' => array(
		        'label' => 'Pattern #3',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(

		        )
		    )
		));

		$fs->add(array(
		    'name' => 'pattern-4',
		    'type' => 'Text',
		    'options' => array(
		        'label' => 'Pattern #4',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(

		        )
		    )
		));

		$this->add($fs);
		$this->add(array(
			'name' => 'who-to-notify-on-fail',
			'type' => 'Email',
			'options' => array(
				'label' => 'Who to notify on fail',
				//'column-size' => 'sm-8 col-sm-offset-4',

				'use_hidden_element' => true,
				'checked_value' => '1',
				'unchecked_value' => '0',

				'label_attributes' => array(
					'class' => 'control-label'
				),
			),
		));
		$this->add(array(
		    'name' => 'edfi-username',
		    'type' => 'Text',
		    'options' => array(
		        'label' => 'EdFi Username',
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
		    'name' => 'edfi-password',
		    'type' => 'Password',
		    'options' => array(
		        'label' => 'EdFi Password',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(

		        )
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
		$mainFilter->add(array(
			'name' => 'sync-students',
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
			'name' => 'sync-staff',
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
			'name' => 'pattern-1',
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
		    'name' => 'pattern-2',
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
		    'name' => 'pattern-3',
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
		    'name' => 'pattern-4',
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
                'name' => 'who-to-notify-on-fail',
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
			'name' => 'edfi-username',
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
			'name' => 'edfi-password',
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

	private function getConnectorById($id)
	{
		return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
	}

	private function getConnectorTableGateway(){
	    if(!isset($this->connectorTableGateway)){
	        $this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
	    }
	    return $this->connectorTableGateway;
	}
}
