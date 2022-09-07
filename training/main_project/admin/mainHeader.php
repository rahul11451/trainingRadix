<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include '../filepath.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/main_project/css_custom/style.css">
    </link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body class="bg-opacity-75">
    <nav class="border navbar navbar-expand-lg bg-white bg-opacity-50 navbar-dark sticky-top border-start-0 border-end-0 border-dark border-2 shadow-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto ">

                <li class="nav-item nav-link pt-3 lg:px-5 ps-xl-5 ps-2 text-dark me-5"> <a href="<?php echo SITE_URL; ?>/main_project/index.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/index.php" ? "active" : ""); ?> text-decoration-none text-dark"> FRONTPAGE </a></li>

                <li class="nav-item nav-link pt-3 lg:px-5 text-dark me-5 ps-2"> <a href="<?php echo SITE_URL; ?>/main_project/admin/dashboard.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/admin/dashboard.php" ? "active" : ""); ?> text-decoration-none text-dark"> DASHBOARD </a></li>

                <li class="nav-item nav-link pt-3 lg:px-5 text-dark me-5 ps-2"> <a href="<?php echo SITE_URL; ?>/main_project/admin/locationManage.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/admin/locationManage.php" ? "active" : ""); ?> text-decoration-none text-dark"> LOCATION </a></li>

                <li class="nav-item nav-link pt-3 lg:px-5 text-dark me-5 ps-2"> <a href="<?php echo SITE_URL; ?>/main_project/admin/hotelManage.php" class=" <?php echo ($_SERVER['PHP_SELF'] == "main_project/admin/hotelManage.php" ? "active" : ""); ?> text-decoration-none text-dark"> HOTELS </a></li>

                <li class="nav-item ps-2">
                    <form action="" class="" method="post">
                        <h4 class=""><input type="submit" value="Logout" class="btn mt-3 btn-danger me-3 text-white fw-bold " name='logout'></h4>
                    </form>
                </li>
            </ul>
        </div>
    </nav>