<?php

include '../model/Login.php';

if (isset($_SESSION['user_id'])) {
    if($_SESSION['user_id'] == 1) {
        header('Location: admin/index.php');
    } else {
        header('Location: ../index.php');
    }
}

if(isset($_POST['login'])){
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    // name validation
    if(empty($userId)){
      $erUserId = 'userId is Required';
    } else {
        $erUserId = '';
    }

    // password validation
    if(empty($password)){
        $erPassword = 'Password is Required';
    } else {
        $erPassword = '';
    }

    if($erUserId == '' && $erPassword == ''){
        $login = new Login();
        $loginResult = $login -> loginUser($userId, $password);
    }
}
