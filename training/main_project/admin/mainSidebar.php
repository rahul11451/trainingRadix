<?php
$path = '/php/';
?>
<!-- content -->
<div class="pt-lg-5 pt-3 text-lg-start text-center col-lg-2  bg-white bg-opacity-50 navbar-expand-lg navbar-dark ">
    <div class="">
        <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
            <span class="fa fa-home"></span></button>
    </div>
    <ul id="data" class="list-unstyled pb-3 mb-4 collapse navbar-collapse">
        <li class="">
            <div class="mb-5">
                <h3 class="mb-2 text-white text-decoration-underline">
                    <div href="#day1" data-bs-toggle="collapse" data-parent="#data">
                        Details
                    </div>
                </h3>
            </div>

            <ul class="collapse list-unstyled show">
                <li class="mb-3">
                    <a class="<?php echo ($_SERVER['PHP_SELF'] == "main_project/admin/locationManage.php" ? "active" : ""); ?>  btn btn-info bg-opacity-75 py-3 text-white shadow-lg fw-bolder w-100" href="<?php echo SITE_URL; ?>main_project/admin/locationManage.php">
                        Location Management
                    </a>
                </li>
                <li class="mb-3">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == "main_project/admin/hotelManage.php" ? "active" : ""); ?> btn btn-info bg-opacity-75 py-3 text-white shadow-lg fw-bolder w-100" href="<?php echo SITE_URL; ?>main_project/admin/hotelManage.php">
                            Hotel Management
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
</div>