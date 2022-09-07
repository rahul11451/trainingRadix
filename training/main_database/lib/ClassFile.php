<?php

    class ClassFile{

        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO("mysql:host=192.168.101.86;dbname=nensi_darji",'root','deep70');
                // echo 'connected successfully';

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

            return $update .';';
        }

        // delete
        function delete($tableName, $condition= array(), $logic = ''){
            $delete =  "DELETE FROM $tableName 
                        WHERE ";

            foreach($condition as $colNames=>$array){
                $delete .= $colNames . $array[1] . ':wher_'.$colNames . $logic;
            }
            $delete .= ';';
            $deletePdo = $this->conn->prepare($delete);

            foreach($condition as $keys=>$values){
                $deletePdo->bindParam(':wher_'.$keys, $values[0]);
            }
            $deletePdo->execute();
        }

        // select
        function select($tableName, $column = '*', $condition= array(), $logic = ''){
            
            $select = "SELECT $column FROM $tableName";
            if(!empty($condition)){
                $select .= ' WHERE ';
                foreach($condition as $colNames=>$array){
                    $select .= $colNames . $array[1] . ':wher_'.$colNames . $logic;
                }
                $select .= ';';
                $selectPdo = $this->conn->prepare($select);
                
                foreach($condition as $keys=>$values){
                    $selectPdo->bindParam(':wher_'.$keys, $values[0]);
                }
            } else {
                $select .= ';';
                $selectPdo= $this->conn->query($select);
            }
            $selectPdo->execute();
            return $selectPdo->fetchAll();
        }


        function join(){
            $join =  'SELECT city.city_id, city.city_name, state.state_name, country.country_name FROM city INNER JOIN state ON state.state_id = city.state_id INNER JOIN country ON state.country_id = country.country_id; ';
            $ans = $this->conn->query($join);
            $ans->execute();
            return $ans->fetchAll();
        }


        function __destruct()
        {
            $this->conn = null;
        }
    }
?>