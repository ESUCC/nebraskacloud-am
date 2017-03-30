<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class EdFiEntryTable {
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway){
        $this->tableGateway = $tableGateway;
    }

    /**
     * @return EdFiEntry[]
     */
    public function fetch(){
        $results = $this->tableGateway->select();
        $retVal = array();
        foreach($results as $result){
            $retVal[] = $result;
        }
        return $retVal;
    }

    /**
     * This function will query the database and return an array of ALL connectors in the database.
     * @return \ArrayObject[]|EdFiEntry[]
     */
    public function fetchByConnector($connector_id){
        $results = $this->tableGateway->select(array(
            'connector_id' => $connector_id,
        ));
        $retVal = array();
        foreach($results as $result){
            $retVal[] = $result;
        }
        return $retVal;
    }
    /**
     * Given the connector object, this function will attempt to update the corersponding data inside the database. if it doesnt expist it will insert the data into the database.
     * @param EdFiEntry $efe
     * @return number
     */
    public function save(EdFiEntry $efe){
        $data = $efe->getArrayCopy();

        $id = $efe->getId();
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
            $this->tableGateway->insert($data);
            $sql = "SELECT currval('" . $schema . ".edfi_entry_id_seq')";
            $curr = $this->tableGateway->getAdapter()->query($sql)->execute()->current()['currval'];
            $retVal = $curr;
        }
        return $retVal;
    }
    /**
     * Given the id of the corresponding edfientry, this function will return the data as an Connector Object.
     * @param number $id
     * @return EdFiEntry
     */
    public function get($id){
        $retVal = $this->tableGateway->select(array(
            'id' => $id,
        ))->current();
        return $retVal;
    }


    /**
     * Given the id of the corresponding edfientry, this fuction will delete the data out of the database. This function will return the number of rows deleted from the database
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