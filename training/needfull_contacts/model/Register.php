<?php
include 'Query.php';
class Register extends Query{

    function registerValid($email, $mobile, $name, $password){
        $selectResult = $this->select('admin', 'nId', array('sEmail' => array($email, '=', 'AND'), 'nPhoneNumber' => array($mobile, '=')));

        if (!empty($selectResult)) {
            $insertMessage = '<h3 class="text-center text-danger">User is already register.</h3>';
        } else {
            $insertData = array(
                'sName' => $name,
                'sEmail' => $email,
                'sPassword' => $password,
                'nPhoneNumber' => $mobile
            );
            $insertMessage = $this->insert('admin',$insertData);
            header('Location: '.SITE_URL.'index.php');
        }

        return $insertMessage;
    }

}
