<?php

    class Query{

        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO("mysql:host=192.168.101.86;dbname=needful_contacts",'root','deep70');
                // echo 'connected successfully';
                // return $this->conn;

            } catch(PDOException $e){

                echo "Connection failed: " . $e->getMessage();
            }
        }


        // insert
        // $tableName is a string which contains table name
        // $data is an associative array
        // $data = array('column_name' => 'value')
        function insert($tableName, $data= array()){
            $col = '';
            $bindVar = '';
            $insert = "INSERT INTO $tableName ";
            foreach($data as $colName => $value){
                if(array_key_last($data) != $colName){
                    $col .=  $colName.', ';
                    $bindVar .= ':'.$colName.', ';
                } else {
                    $col .=  $colName;
                    $bindVar .= ':'.$colName;
                }
            }
            $insert .= '( ' . $col . ' ) VALUES ( '.$bindVar.' );';
            $insertpdo = $this->conn->prepare($insert);
            foreach($data as $key => $value){
                $insertpdo->bindParam(':'.$key,$data[$key]);
            }
            $insertpdo->execute();
            return "Successfully Data Submitted";
        }


        // update
        // $tableName is a string which contains table name
        // $data is an associative array
        // $data = array('column_name' => 'value')
        // $condition is an multi associative array
        // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
        function update($tableName, $data=array(), $condition= array()){
            $update = "UPDATE $tableName SET ";
            foreach($data as $colName => $value){
                if(array_key_last($data) == $colName){
                    $update .= $colName .' = :'. $colName;
                } else {
                    $update .= $colName .' = :'. $colName .', ';
                }
            }
            
            $update .= " WHERE ";
            foreach($condition as $colNames=>$array){
                $update .= $colNames . $array[1] . ':wher_'.$colNames . ' '. $array[2].' ';
            }

            $update .= ' ;';

            $updatePdo = $this->conn->prepare($update);
            foreach($condition as $keys=>$values){
                $updatePdo->bindParam(':wher_'.$keys, $values[0]);
            }
            foreach($data as $key=>$value){
                $updatePdo->bindParam(':'.$key,$data[$key]);
            }
            $updatePdo->execute();

            return "Successfully Data Updated";
        }

        // delete
        // $tableName is a string which contains table name
        // $data is an associative array
        // $data = array('column_name' => 'value')
        // $condition is an multi associative array
        // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
        function delete($tableName, $condition= array()){
            $delete =  "DELETE FROM $tableName 
                        WHERE ";

            foreach($condition as $colNames=>$array){
                $delete .= $colNames . $array[1] . ':wher_'.$colNames . ' '. $array[2].' ';
            }
            $delete .= ';';
            $deletePdo = $this->conn->prepare($delete);

            foreach($condition as $keys=>$values){
                $deletePdo->bindParam(':wher_'.$keys, $values[0]);
            }
            $deletePdo->execute();
            return 'Successfully data deleted';
        }

        // select
        // $tableName is a string which contains table name
        // $column is a string which contains column name as string
        // $condition is an multi associative array
        // $condition = array('column_name' => array('value','operator(=)','AND/OR (opotional)'))
        // $orderBy is a string which contains order by, limit or other extra logic 
        function select($tableName, $column = '*', $condition= array(), $orderBy=''){
            
            $select = "SELECT $column FROM $tableName";
            if(!empty($condition)){
                $select .= ' WHERE ';
                foreach($condition as $colNames=>$array){
                    $select .= $colNames .' '. $array[1] . ' :wher_'.$colNames . ' '. $array[2].' ';
                }
                $select .= $orderBy . ';';
                $selectPdo = $this->conn->prepare($select);
                
                foreach($condition as $keys=>$values){
                    $selectPdo->bindParam(':wher_'.$keys, $values[0]);
                }
            } else {
                $select .=  " " .$orderBy . ';';
                $selectPdo= $this->conn->query($select);
            }
            $selectPdo->execute();
            return $selectPdo->fetchAll();
        }

        // join
        // $selectSt is a string which contains select query
        // $joinTableName is a string which contains table name 
        // $onCondition is an associative array of join on condition
        // $whereCondition is an associative array which contains data of where condition
        function join($selectSt='',$joinTableName='',$onCondition=array(),$whereCondition=array(), $orderBy = ''){

            $join = $selectSt;
            
            $join .= ' JOIN '. $joinTableName .' ON ';
            
            foreach($onCondition as $columnName => $values){
                $join .= $columnName . ' ' . $values[1] . ' ' . $values[0] . ' ' . $values[2] . ' ';
            }
            
            if(!empty($whereCondition)){
                $join .= ' WHERE ';
                foreach($whereCondition as $colNames=>$array){
                    $join .= $colNames .' '. $array[1] . ' '.$array[0] . ' '. $array[2].' ';
                }
                $join .= " " .$orderBy . ';';
                
            } else {
                $join .=  " " .$orderBy . ';';
            }
            
            $joinPdo= $this->conn->query($join);
            $joinPdo->execute();
            // return $join;
            return $joinPdo->fetchAll();
        }


        function __destruct()
        {
            $this->conn = null;
        }
    }
