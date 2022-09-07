<?php

    class DatabaseQuery{

        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO("mysql:host=192.168.101.86;dbname=hotel_management",'root','deep70');
                // rerturn 'connected successfully';
                // return $this->conn;

            } catch(PDOException $e){

                echo "Connection failed: " . $e->getMessage();
            }
        }


        // insert
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
        function update($tableName, $data=array(), $condition= array(), $logic = ''){
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
                $update .= $colNames . $array[1] . ':wher_'.$colNames . $logic;
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
        function delete($tableName, $condition= array()){
            $delete =  "DELETE FROM $tableName 
                        WHERE ";

            foreach($condition as $colNames=>$array){
                $delete .= $colNames . $array[1] . ':wher_'.$colNames . ' '. $array[2].' ';;
            }
            $delete .= ';';
            $deletePdo = $this->conn->prepare($delete);

            foreach($condition as $keys=>$values){
                $deletePdo->bindParam(':wher_'.$keys, $values[0]);
            }
            $deletePdo->execute();
        }

        // select
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
        function join($selectSt='',$joinTableName='',$onCondition=array(),$whereCondition=array()){

            $join = $selectSt;
            
            $join .= 'JOIN '. $joinTableName .' ON ';
            
            foreach($onCondition as $columnName => $values){
                $join .= $columnName . ' ' . $values[1] . ' ' . $values[0] . ' ' . $values[2] . ' ';
            }
            
            if(!empty($whereCondition)){
                $join .= ' WHERE ';
                foreach($whereCondition as $colNames=>$array){
                    $join .= $colNames .' '. $array[1] . ' '.$array[0] . ' '. $array[2].' ';
                }
                $join .= ';';
                
            } else {
                $join .=  ';';
            }
            
            $joinPdo= $this->conn->query($join);
            $joinPdo->execute();
            return $joinPdo;
            // return $joinPdo->fetchAll();
        }


        function __destruct()
        {
            $this->conn = null;
        }
    }
