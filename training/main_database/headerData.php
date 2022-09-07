<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (strpos($_SERVER['HTTP_HOST'], "localhost") !== FALSE) {
    define('SITE_DIRECTORY', "/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
} else {
    $_SERVER['DOCUMENT_ROOT'] .=  "nensi/";
    define('SITE_DIRECTORY', "nensi/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
}
define('SITE_PROTOCOL', "http://"); //$_root_path

define('SITE_URL', SITE_PROTOCOL . $_SERVER['HTTP_HOST'] . "/" . SITE_DIRECTORY);  //Site URL with Protocol
?>
<?php
$path = $_SERVER['PHP_SELF'];
$array = explode("/", $path);
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


if (isset($_POST['logout'])) {
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        header('Location: loginEmp.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radixweb | Training</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css-custom/custom1.css">
    </link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <nav class="border navbar navbar-expand-lg bg-primary bg-opacity-50 navbar-dark sticky-top border-start-0 border-end-0 border-primary border-2 shadow-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <img src="<?php echo SITE_URL; ?>/Images/radix.jpg" alt="logo" width="80" class="navbar-brand ms-4 img-fluid logo_img">
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2 text-white"> <a href="<?php echo SITE_URL; ?>/main_database/index.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_database/index.php" ? "active" : ""); ?> text-decoration-none text-white"> HOME </a></li>

                <li class="nav-item text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2"><a href="<?php echo SITE_URL; ?>/main_database/details.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_database/details.php" ? "active" : ""); ?> text-decoration-none text-white">Detail</a>
                </li>


                <li class="nav-item">
                    <a href="<?php echo SITE_URL; ?>/main_database/loginEmp.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_database/loginEmp.php" ? "active" : ""); ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        Login</a>
                </li>

                <li class="nav-item">
                    <form action="" class="" method="post">
                        <h4 class=""><input type="submit" value="Logout" class="btn mt-2 btn-danger me-3 text-white fw-bold " name='logout'></h4>
                    </form>
                </li>
            </ul>
        </div>
    </nav>