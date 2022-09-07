<?php
session_start();
include 'Query.php';
class Register extends Query{

    function registerValid($email, $mobile, $school, $name, $password){
        $selectResult = $this->select('admin', 'nId', array('sEmail' => array($email, '=', 'AND'), 'nPhoneNumber' => array($mobile, '=')));

        if (!empty($selectResult)) {
            $insertMessage = '<h3 class="text-center text-danger">User is already register.</h3>';
        } else {
            $insertData = array(
                'sName' => $name,
                'sEmail' => $email,
                'sAuthorization' => $school,
                'sPassword' => $password,
                'nPhoneNumber' => $mobile
            );
            $insertMessage = $this->insert('admin',$insertData);
            unset($_SESSION['verifiedData']);
            header('Location: '.SITE_URL.'index.php');
        }

        return $insertMessage;
    }

}
