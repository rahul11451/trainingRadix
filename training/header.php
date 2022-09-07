<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (strpos($_SERVER['HTTP_HOST'], "localhost") !== FALSE) {
    define('SITE_DIRECTORY', "/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
} else {
    define('SITE_DIRECTORY', "nensi/");  // If site hosten in particular directory then set it. If site upload on Root then put it Slash (/) Only
}
define('SITE_PROTOCOL', "http://"); //$_root_path

define('SITE_URL', SITE_PROTOCOL . $_SERVER['HTTP_HOST'] . "/" . SITE_DIRECTORY);  //Site URL with Protocol
?>
<?php
    $path = $_SERVER['PHP_SELF']; $array = explode("/", $path); 
    spl_autoload_register(function ($class_name){
        include $class_name . '.php';
    });
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
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>index.php" class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : ""); ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2" style="li:focus{color=blue;}">HOME</a></li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>html/html_index.php" class=" <?php if ($array[1] == 'html') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">HTML</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>css/css_index.php" class=" <?php if ($array[1] == 'css') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">CSS</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>bootstrap/bootstrap_index.php" class=" <?php if ($array[1] == 'bootstrap') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">BOOTSTRAP</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>javascript/js_index.php" class=" <?php if ($array[1] == 'javascript') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        JAVASCRIPT</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>jQuery/jQuery_index.php" class=" <?php if ($array[1] == 'jQuery') {echo 'active'; }; ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        JQUERY</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>php/php_index.php" class=" <?php if ($array[1] == 'php') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        PHP</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>main_database/index.php" class=" <?php if ($array[1] == 'main_database') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        DatabaseProject</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>main_project/index.php" class=" <?php if ($array[1] == 'main_project') {echo 'active'; } ?> text-white nav-link lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        Project</a>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>/miniproject/banner.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "miniproject/banner.php" ? "active" : ""); ?> text-white nav-link me-5 lg:pe-5 ps-xl-3 ps-3 ps-sm-2">
                        MiniProject</a>
                </li>
            </ul>
        </div>
    </nav>