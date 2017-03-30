<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element\Text;
use Zend\ServiceManager\ServiceManager;
use Zend\Form\Fieldset;

class QuestionAdminForm extends Form
{

    public function __construct(ServiceManager $sm = null)
    {
        parent::__construct('question-admin-form');
        $this->sm = $sm;
        $this->add(array(
            'name' => 'question',
            'type' => 'Text',
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
            'name' => 'attribute',
            'type' => 'Text',
            'options' => array(
                'label' => 'Question Attribute',
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
        		'label' => 'Connector ID',
        		'inline' => true,
        		'label_options' => array(
        			'disable_html_escape' => true,
        			'always_wrap' => false
        		)
        	)
        ));

        $mainFilter = new InputFilter();
        $mainFilter->add(array(
        	'name' => 'question',
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
        	'name' => 'attribute',
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

    private function getConnectorById($id)
    {
        $connector = $this->getQuestionTableGateway()->get($id);
        $connectorData = $this->getQuestionTableGateway()->fetchByConnector($id);
        $type = 'Application\\Interfaces\\' . $connector->type;
        $connectionInfo = array();
        foreach ($connectorData as $data) {
            $connectionInfo[$data->getData_type()] = $data->getData();
        }
        $userMap = array(
            'uid' => 'username',
            'givenname' => 'firstname',
            'sn' => 'lastname',
            'mail' => 'email',
            'cn' => 'id'
        );

        $retVal = new $type($userMap, array(), $connectionInfo);
        return $retVal;
    }

    public function getConnectorTableGateway()
    {
        if (! isset($this->connectorTableGateway)) {
            $this->connectorTableGateway = $this->sm->get('Application\Model\ConnectorTable');
        }
        return $this->connectorTableGateway;
    }

    public function getConnectorDataTableGateway()
    {
        if (! isset($this->connectorDataTableGateway)) {
            $this->connectorDataTableGateway = $this->sm->get('Application\Model\ConnectorDataTable');
        }
        return $this->connectorDataTableGateway;
    }

    public function getQuestionTableGateway()
    {
        if (! isset($this->questionTableGateway)) {
            $this->questionTableGateway = $this->sm->get('Application\Model\QuestionTable');
        }
        return $this->questionTableGateway;
    }
}

?>