<?php
$path = '/php/';
?>
<!-- content -->
<div class="pt-lg-5 px-3 pt-3 pb-2 text-lg-start text-center col-lg-2 pb-md-4 bg-primary bg-opacity-50 navbar-expand-lg navbar-dark vh-100">
    <div class="">
        <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
            <span class="fa fa-home"></span></button>
    </div>
    <ul id="data" class="list-unstyled pb-3 mb-4 collapse navbar-collapse">
        <li class="">
            <div class="">
                <h3 class="mb-2">
                    <div href="#day1" data-bs-toggle="collapse" data-parent="#data">
                        Details
                    </div>
                </h3>
            </div>

            <ul id="day1" class="collapse list-unstyled show">
                <li class="mb-3">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == "main_database/admin/actionForm.php" ? "active" : "");?>text-white text-decoration-none" href="<?php echo SITE_URL; ?>main_database/admin/actionForm.php">
                            Add Employee Detail
                        </a>
                    </h5>
                </li>
                <li class="mb-3">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == "main_database/admin/listing.php" ? "active" : "");?>text-white text-decoration-none" href="<?php echo SITE_URL; ?>main_database/admin/listing.php">
                            Employee Detail List
                        </a>
                    </h5>
                </li>
            </ul>
        </li>
    </ul>
</div>