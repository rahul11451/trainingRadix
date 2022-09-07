<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include '../../controller/header.php';
include 'filepath.php';

session_start();
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($_SERVER['PHP_SELF']);echo '</pre>'; die();
if (isset($_POST['logout'])) {
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }

    header('Location: ' . SITE_URL . '/index.php');
}

if (isset($_SESSION['user_id'])) {
    $log = '<form action="" class="" method="post"><input type="submit" value="Logout" class="dropdown-item text-dark" name="logout"></form>';
} else {
    $log = '<a href="' ?><?php $log .= SITE_URL; ?>
<?php $log .= '/view/login.php" class="dropdown-item text-dark">Login</a></li>

<li class="nav-item">
    <a href="' . SITE_URL . '/view/registrationForm.php" class="dropdown-item text-dark">Sign-Up</a>';
}

// text hover
// index.php

if ($_SERVER['PHP_SELF'] == "/needfull_contacts/index.php" || $_SERVER['PHP_SELF'] == "/needfull_contacts/view/admin/index.php") {
    $index =  'text-dark fw-bolder';
} else {
    $index =  'text-dark';
}

// service file
if ($_SERVER['PHP_SELF'] == "/needfull_contacts/view/user/serviceList.php" || $_SERVER['PHP_SELF'] == "/needfull_contacts/view/admin/addServices.php") {
    $service =  'text-dark fw-bolder';
} else {
    $service =  'text-dark';
}

// service provider file
if ($_SERVER['PHP_SELF'] == "/needfull_contacts/view/user/contact.php" || $_SERVER['PHP_SELF'] == "/needfull_contacts/view/admin/addProvider.php") {
    $provider =  'text-dark fw-bolder';
} else {
    $provider =  'text-dark';
}


// adjust link regarding admin and user side
// index file

if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    $indexFile =  SITE_URL . '/view/admin/index.php';
} else {
    $indexFile =  SITE_URL . '/index.php';
}

if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    $serviceFile =  SITE_URL . '/view/admin/addServices.php';
} else {
    $serviceFile =  SITE_URL . '/view/user/serviceList.php';
}

if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    $site =  SITE_URL . '/view/admin/addProvider.php';
    $siteName = 'Service Providers';
} else {
    $site =  SITE_URL . '/view/user/contact.php';
    $siteName = 'Contact Us';
}

if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    $aboutName = '';
} else {
    $about =  SITE_URL . '/view/user/aboutUs.php';
    $aboutName = 'About Us';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JustDial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="<?php echo SITE_URL; ?>/css_custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css_custom/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="bg-opacity-75">

    <div class="">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-1">
            <div class="container-fluid">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="<?php echo $index;  ?> nav-link text-dark" aria-current="page" href="<?php echo $indexFile; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php echo $service; ?> nav-link" href="<?php echo $serviceFile; ?> ">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $provider; ?>" href="<?php echo $site; ?>" rel="nofollow"><?php echo $siteName; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo $about; ?>" rel="nofollow"><?php echo $aboutName; ?></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <?php
                            echo $log;
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> 

    