<?php
include 'Query.php';
class Login extends Query{

    function loginUser($userId, $password){
        $result = $this->select('admin', 'nId', array('sPassword' => array($password, '=', 'AND ( '), 'sEmail' => array($userId, '=', 'OR'), 'nPhoneNumber' => array($userId, '=', ' )')));

        if(!empty($result)){
            $_SESSION['user_id'] = $result[0]['nId'];
            if($result[0]['nId'] == 1){
                header('Location: admin/index.php');
            } else if(isset($_GET['contact'])) {
                header('Location: user/serviceList.php');
            } else {
                header('Location: ../index.php');
            }
            
        } else {
            $errorPass = 'Your Data is invalid.';
        }

        return $errorPass;
    }

}
