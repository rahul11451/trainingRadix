<?php
include 'Query.php';

class Service extends Query{
    function serviceLogic($name, $description, $createdDate, $modifiedDate)
    {
        $result = $this->insert('service_details', array('sServiceName' => $name, 'sDescription' => $description, 'dCreatedDate' => $createdDate, 'dModifiedDate' => $modifiedDate));

        return $result;
    }

    function serviceEdit($name, $description, $id, $modifiedDate)
    {
        $result = $this->update('service_details', array('sServiceName' => $name, 'sDescription' => $description, 'dModifiedDate' => $modifiedDate), array('nId' => array($id, '=')));

        return $result;
    }
}

?>