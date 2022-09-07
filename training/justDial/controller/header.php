<?php

session_start();
include '../view/layout/filepath.php';

if (isset($_POST['logout'])) {
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }

    header('Location: ' . SITE_URL . '/index.php');
}

if (isset($_SESSION['user_id'])) {
    $log = '<form action="" class="" method="post"><input type="submit" value="Logout" class="btn btn-outline-dark " name="logout"></form>';
} else {
    $log = '<a href="' ?><?php $log .= SITE_URL; ?>
    <?php $log .= '/view/login.php" class="btn btn-outline-dark">Login</a></li>

<li class="nav-item">
    <a href="'.SITE_URL.'/view/registrationForm.php" class="btn btn-dark">Sign-Up</a>';
}

// text hover
// index.php

if($_SERVER['PHP_SELF'] == "/needfull_contacts/index.php" || $_SERVER['PHP_SELF'] == "needfull_contacts/view/admin/index.php") {
    $index =  'text-dark fw-bolder';
} else {
    $index =  'text-dark';
}

// service file
if($_SERVER['PHP_SELF'] == "/needfull_contacts/view/user/serviceList.php") {
    $service =  'text-dark fw-bolder';
} else {
    $service =  'text-dark';
}


// adjust link regarding admin and user side
// index file

if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    $indexFile =  SITE_URL . '/view/admin/index.php';
} else {
    $indexFile =  SITE_URL . '/index.php';
}

?>