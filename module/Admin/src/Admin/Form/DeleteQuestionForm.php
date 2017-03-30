<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element\Text;
use Zend\ServiceManager\ServiceManager;
use Zend\Form\Fieldset;

class DeleteQuestionForm extends Form
{

    public function __construct()
    {
        parent::__construct('question-admin-form');

        $this->add(array(
            'name' => 'question-id',
            'type' => 'hidden',
            'options' => array(
                'label' => 'Question',
                'inline' => true,
                'label_options' => array(
                    'disable_html_escape' => true,
                    'always_wrap' => false
                )
            )
        ));

        $this->add(array(
        	'name' => 'conid',
        	'type' => 'hidden',
        	'options' => array(
        		'label' => 'Question Attribute',
        		'inline' => true,
        		'label_options' => array(
        			'disable_html_escape' => true,
        			'always_wrap' => false
        		)
        	)
        ));

        $mainFilter = new InputFilter();
        $mainFilter->add(array(
            'name' => 'question-id',
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
        	'name' => 'conid',
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

    /**
     *
     * @param Number $id
     * @return \Application\Interfaces\Connector
     */
    private function getConnectorById($id){
        return $this->serviceLocator->get('Access\Model\Access')->getConnectorById($id);
    }

    private function getConnectorTableGateway(){
        if(!isset($this->connectorTableGateway)){
            $this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
        }
        return $this->connectorTableGateway;
    }
    private function getConnectorDataTableGateway(){
        if(!isset($this->connectorDataTableGateway)){
            $this->connectorDataTableGateway = $this->serviceLocator->get('Application\Model\ConnectorDataTable');
        }
        return $this->connectorDataTableGateway;
    }
}