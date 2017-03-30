<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Form\Element\Text;
use Zend\ServiceManager\ServiceManager;

class ClaimAccountForm extends Form
{

    public function __construct(ServiceManager $sm = null)
    {
        
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