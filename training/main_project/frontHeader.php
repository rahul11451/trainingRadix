<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include 'filepath.php';
?>
<?php
session_start();

if (isset($_POST['logout'])) {
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }

    header('Location: ../admin/index.php');
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
    <link rel="stylesheet" href="css_custom/front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="css_custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="bg-opacity-75">

    <div>
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-1">
            <div class="container-fluid">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">

                        <li class="nav-item nav-link pt-4 lg:px-5 ps-xl-5 h4 ps-3 ps-sm-2 text-white me-5"> <a href="<?php echo SITE_URL; ?>/main_project/index.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/index.php" ? "active" : ""); ?> text-decoration-none text-black"> HOME </a></li>

                        <li class="nav-item nav-link pt-4 lg:px-5 ps-xl-5 h4 ps-3 ps-sm-2 text-white me-5"> <a href="<?php echo SITE_URL; ?>/main_project/listing.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/listing.php" ? "active" : ""); ?> text-decoration-none text-black"> HOTELS </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>