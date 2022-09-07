<div class="pt-lg-5 pt-5 col-lg-2 bg-danger navbar-expand-lg navbar-dark">
    <div class="">
        <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
            <span class="fa fa-home"></span></button>
    </div>
    <h3 class=" text-decoration-underline mb-3 ">
        Details
    </h3>
    <ul class="collapse list-unstyled show ">
        <li class="mb-1">
            <a class="<?php echo ($_SERVER['PHP_SELF'] == "/justDial/view/admin/addServices.php" ? "text-decoration-underline" : ""); ?>  btn text-white rounded-0 bg-opacity-75 py-3  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/addServices.php">
                Add Services
            </a>
        </li>
        <li class="mb-1">
            <a class="<?php echo ($_SERVER['PHP_SELF'] == "/justDial/view/admin/addProvider.php" ? "text-decoration-underline" : ""); ?>  btn text-white rounded-0 bg-opacity-75 py-3  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/addProvider.php">
                Add Service Provider
            </a>
        </li>
        <li class="mb-1">
            <a class="<?php echo ($_SERVER['PHP_SELF'] ==  "/justDial/view/admin/serviceList.php" ? "text-decoration-underline" : ""); ?> btn text-white rounded-0 bg-opacity-75 py-3  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/serviceList.php">
                List of Services
            </a>
        </li>
        <li class="mb-1">
            <a class="<?php echo ($_SERVER['PHP_SELF'] == "/justDial/view/admin/providerList.php" ? "text-decoration-underline" : ""); ?> btn text-white rounded-0 bg-opacity-75 py-3  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/providerList.php">
                List of Services Provider
            </a>
        </li>
    </ul>
</div>