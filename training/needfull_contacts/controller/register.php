<?php

include '../model/Register.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // name validation
    if(empty($name)){
      $erName = 'Name is Required';
    } else {
        $erName = '';
    }

    // email validation
    if(empty($email)){
        $erEmail = 'Email is Required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erEmail = "Invalid email format";
    } else {
        $erEmail = '';
    }

    // mobile validation
    if (empty($mobile)){
        $erMobile = 'Mobile Number is Reqiured';
    } else if (!filter_var($mobile, FILTER_SANITIZE_NUMBER_INT)){
        $erMobile = 'Invalid Mobile Number';
    } else {
        $erMobile = '';
    }

    // password validation
    if(empty($password)){
        $erPassword = 'Password is Required';
    } else {
        $erPassword = '';
    }

    // re-enter password validation
    if(empty($repassword)){
        $erRePassword = 'Please re-enter your password';
    } else if ($password != $repassword) {
        $erRePassword = 'Your password is not matched';
    } else {
        $erRePassword = '';
    }

    if($erName == '' && $erEmail == '' && $erMobile == '' && $erPassword == '' && $erRePassword == ''){
        $regi = new Register();
        $insertMessage = $regi -> registerValid($email, $mobile, $name, $password);
        
    }
}
