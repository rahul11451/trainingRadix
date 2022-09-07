<?php

class Query
{

    public $conn;

    function __construct()
    {
        $this->conn = new mysqli("192.168.101.86", 'root', 'deep70', "apiTest");

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            // echo 'connected successfully';
            // return $this->conn;
        }
    }

    // insert
    // $tableName is a string which contains table name
    // $data is an associative array
    // $data = array('column_name' => 'value')
    function insert($tableName, $data = array())
    {
        $col = '';
        $val = '';
        $insert = "INSERT INTO $tableName ";
        foreach ($data as $colName => $value) {
            if (array_key_last($data) != $colName) {
                $col .=  $colName . ', ';
                $val .= $value . ', ';
            } else {
                $col .=  $colName;
                $val .= $value;
            }
        }
        $insert .= '( ' . $col . ' ) VALUES ( ' . $val . ' );';

        if ($this->conn->query($insert)) {
            $lastId = $this->conn->insert_id;
            http_response_code(200);
            return json_encode(array('status' => 200, "id" => $lastId, "response" => "New record created successfully"));
        } else {
            http_response_code(400);
            return json_encode(array('status' => 400, "response" => "Failed"));
        }
    }

    // select
    // $tableName is a string which contains table name
    // $column is a string which contains column name as string
    // $condition is an multi associative array
    // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
    // $orderBy is a string which contains order by, limit or other extra logic 
    function select($tableName, $column = '*', $condition = array(), $orderBy = '')
    {

        $select = "SELECT $column FROM $tableName";
        if (!empty($condition)) {
            $select .= ' WHERE ';
            foreach ($condition as $colNames => $array) {
                $select .= $colNames . ' ' . $array[1] . ' ' . $array[0] . ' ' . $array[2] . ' ';
            }
            $select .= $orderBy . ';';
        } else {
            $select .=  " " . $orderBy . ';';
        }
        $selectPdo = $this->conn->query($select);
        return $selectPdo;
    }

    function __destruct()
    {
        $this->conn->close();;
    }

    // update
    // $tableName is a string which contains table name
    // $data is an associative array
    // $data = array('column_name' => 'value')
    // $condition is an multi associative array
    // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
    function update($tableName, $data = array(), $condition = array())
    {
        $update = "UPDATE $tableName SET ";
        foreach ($data as $colName => $value) {
            if (array_key_last($data) == $colName) {
                $update .= $colName . ' = ' . $value;
            } else {
                $update .= $colName . ' = ' . $value . ', ';
            }
        }

        $update .= " WHERE ";
        foreach ($condition as $colNames => $array) {
            $update .= $colNames . $array[1] . ' ' . $array[0] . ' ' . $array[2] . ' ';
        }

        $update .= ' ;';

        if ($this->conn->query($update)) {
            http_response_code(200);
            return json_encode(array('status' => 200, "response" => "Data Updated successfully"));
        } else {
            http_response_code(400);
            return json_encode(array('status' => 400, "response" => "Failed"));
        }
    }

    // delete
    // $tableName is a string which contains table name
    // $data is an associative array
    // $data = array('column_name' => 'value')
    // $condition is an multi associative array
    // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
    function delete($tableName, $condition = array())
    {
        $delete =  "DELETE FROM $tableName WHERE ";

        foreach ($condition as $colNames => $array) {
            $delete .= $colNames . $array[1] . ' ' . $array[0] . ' ' . $array[2] . ' ';
        }
        $delete .= ';';
        if($this->conn->query($delete)){
            return json_encode("Data deleted successfully.");
        } else{
            return json_encode("Data could not be deleted");
        }
    }
}
