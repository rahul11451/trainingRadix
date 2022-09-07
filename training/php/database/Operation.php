<?php

    class Operation{

        public $conn;

        function __construct($serverName, $userName, $password, $database)
        {
            $this->conn = new mysqli($serverName, $userName, $password, $database);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn);
            }
        }


        // insert
        function insert($tableName, $data= array()){
            $col = '';
            $colValues = '';
            $insert = "INSERT INTO $tableName ";
            
            foreach($data as $colName => $value){
                if(end($data) == $value){
                    $col .=  $colName;
                $colValues .=  '\''.$value.'\'';
                } else {
                $col .=  $colName .', ';
                $colValues .=  '\''.$value .'\', ';
                }
            }
            $insert .= '( ' . $col . ' ) VALUES ( ' . $colValues .' );';
            $this->conn->query($insert);
            return 'successfully entered data';
        }

        // update
        function update($tableName, $data=array(), $condition=''){
            $update = "UPDATE $tableName SET ";
            foreach($data as $colName => $value){
                if(end($data) == $value){
                    $update .= $colName .'='. $value;
                } else {
                    $update .= $colName .'='. $value .', ';
                }
            }
            
            $update .= " WHERE $condition";

            return $update .';';
        }

        // delete
        function delete($tableName, $condition = ''){
            $delete =  "DELETE FROM $tableName 
                        WHERE $condition";
            return $delete .';';
        }

        // select
        function select($tableName, $column = array(), $condition = ''){
            if(empty($column) && empty($condition)){
                $select = "SELECT * FROM $tableName";
            } else if(empty($column) && !empty($condition)){
                $select = "SELECT * FROM $tableName WHERE $condition";
            } else if(!empty($column) && empty($condition)){
                $select = "SELECT ";
                foreach($column as $colName){
                    if(end($column) == $colName){
                        $select .= $colName ;
                    } else {
                        $select .= $colName .', ';
                    }
                }
                $select .= " FROM $tableName ";
            } else {
                $select = "SELECT ";
                foreach($column as $colName){
                    if(end($column) == $colName){
                        $select .= $colName ;
                    } else {
                        $select .= $colName .', ';
                    }
                }
                $select .= " FROM $tableName WHERE $condition";
            }
             $select .= ';';
             return $this->conn->query($select);
        }

        function __destruct()
        {
            $this->conn->close();
        }
    }


    
?>