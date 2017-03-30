<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Application\Model\Logger;

class LoggerTable {
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway){
        $this->tableGateway = $tableGateway;
    }

    /**
     * @return Logger[]
     */
    public function fetch(){
        $results = $this->tableGateway->select();
        $retVal = array();
        foreach($results as $result){
            $retVal[] = $result;
        }
        return $retVal;
    }

    public function log ($userid, $conid, $action) {
        $loggy = new Logger();
        $loggy->setUser_id($userid);
        $loggy->setAction($action);
        $loggy->setConnector_id($conid);
        $loggy->setTimestamp(time());
        $this->save($loggy);
    }

    /**
     * This function will query the database and return an array of ALL connectors in the database.
     * @return \ArrayObject[]|Logger[]
     */
    public function fetchByUserId($userid){
        $results = $this->tableGateway->select(array(
            'user_id' => $userid,
        ));
        $retVal = array();
        foreach($results as $result){
            $retVal[] = $result;
        }
        return $retVal;
    }

    /**
     * Given the connector object, this function will attempt to update the corersponding data inside the database. if it doesnt expist it will insert the data into the database.
     * @param Logger $logger
     * @return number
     */
    public function save(Logger $logger) {
        $data = $logger->getArrayCopy();

        $id = $logger->getId();
        $retVal = false;

        $schema = $this->tableGateway->getTable()->getSchema();

        if($id && $this->get($id)){
            //UPDATE to DATABASE
            $this->tableGateway->update($data, array(
                'id' => $id,
            ));
            $retVal = $id;
        } else {
            //INSERT into DATABASE
            unset($data['id']);
            unset($data['timestamp']);
            $this->tableGateway->insert($data);
            $sql = "SELECT currval('" . $schema . ".connector_logger_id_seq')";
            $curr = $this->tableGateway->getAdapter()->query($sql)->execute()->current()['currval'];
            $retVal = $curr;
        }
        return $retVal;
    }
    /**
     * Given the id of the corresponding connector, this function will return the data as an Connector Object.
     * @param number $id
     * @return Logger
     */
    public function get($id){
        $retVal = $this->tableGateway->select(array(
            'id' => $id,
        ))->current();
        return $retVal;
    }


    /**
     * Given the id of the corresponding connector, this fuction will delete the data out of the database. This function will return the number of rows deleted from the database
     * @param number $id
     * @return number
     */
    public function delete($id){
        return $this->tableGateway->delete(array(
            'id' => $id,
        ));
    }

}

?>