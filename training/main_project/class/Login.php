<?php
include ("classpath.php");
class Login{
    public $user_name;
    public $password;
    function loginUser($user_name, $password){
        $login = new DatabaseQuery();
        $result = $login->select('admin_login');
        if($result[0]['user_name'] == $user_name){
            if($result[0]['password'] == $password){
                $success =  'Successfully Entered Data';
                $_SESSION['user_id'] = $result[0]['user_id'];
                header('Location: dashboard.php');
            } else{
                $errorPass = 'Your password is not matched.';
            }
        } else {
            $errorPass = 'Your UserName is invalid.';
        }

        return $errorPass;
    }

}
