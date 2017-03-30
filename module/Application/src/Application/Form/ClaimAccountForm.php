<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element\Text;
use Zend\ServiceManager\ServiceManager;
use Zend\Session\Container;

class ClaimAccountForm extends Form
{

    public function __construct(ServiceManager $sm = null)
    {
        parent::__construct('claim-account-form');

        $this->serviceLocator = $sm;
        $container = new Container('claimAccountTempData');

        $this->add(array(
            'name' => 'connector-id',
            'type' => 'hidden',
            'options' => array(

            ),
        	'attributes' => array(
        		'value' =>$container->connectorId,
        	),
        ));

        $connectors = array();
        foreach ($this->getConnectorTableGateway()->fetch() as $connector) {
            $connectors{$connector->id} = $connector->hostname;
        }

        $this->add(array(
            'name' => 'user-id',
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

        $data = $this->getQuestionTableGateway()->fetchByConnector($container->connectorId);
        foreach ($data as $question) {
            $questionPrint = new Text('question-'.$question->id);
            $questionPrint->setLabel($question->question);
            $questionPrint->setOptions(array(
                'column-size' => 'sm-6',
                'inline' => true
            ));
            $questionPrint->setLabelAttributes(array(
                'class' => 'col-sm-4 control-label'
            ));
            $questionPrint->setAttributes(Array(
                'placeholder' => 'Answer'
            ));
            $this->add($questionPrint);
        };
        
        
        $passwords = array(
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
        
        
        foreach ($data as $question) {
            $mainFilter->add(array(
                'name' => 'question-' . $question->id,
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
        } 
        
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

    /**
     *
     * @return \Application\Model\QuestionTable
     */
    public function getQuestionTableGateway()
    {
        if (! isset($this->questionTableGateway)) {
            $this->questionTableGateway = $this->serviceLocator->get('Application\Model\QuestionTable');
        }
        return $this->questionTableGateway;
    }
    
    /**
     *
     * @return \Application\Model\User
     */
    public function getUserGateway()
    {
        if (! isset($this->userGateway)) {
            $this->userTableGateway = $this->serviceLocator->get('Application\Model\User');
        }
        return $this->userGateway;
    }
}

?>