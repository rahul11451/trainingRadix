<div class="pt-lg-5 pt-5 text-lg-start text-center col-lg-2 navbar-expand-lg navbar-dark shadow adminSidebar">
            <div class="">
                <button class="navbar-toggler mb-2" data-bs-toggle="collapse" data-bs-target="#data">
                    <span class="fa fa-home"></span></button>
            </div>
            <h3 class=" text-decoration-underline mb-3 ms-2">
                Details
            </h3>
            <ul class="collapse list-unstyled show ms-2">
                <li class="mb-3">
                    <a class="<?php echo ($_SERVER['PHP_SELF'] == "/view/admin/addServices.php" ? "active" : ""); ?>  btn btn-dark bg-opacity-75 py-3 text-white  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/addServices.php">
                        Add Services
                    </a>
                </li>
                <li class="mb-3">
                    <a class="<?php echo ($_SERVER['PHP_SELF'] == "/view/admin/addProvider.php" ? "active" : ""); ?>  btn btn-dark bg-opacity-75 py-3 text-white  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/addProvider.php">
                        Add Service Provider
                    </a>
                </li>
                <li class="mb-3">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == SITE_URL."/view/admin/serviceList.php" ? "active" : ""); ?> btn btn-dark bg-opacity-75 py-3 text-white  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/serviceList.php">
                            List of Services
                        </a>
                    </h5>
                </li>
                <li class="mb-3">
                    <h5>
                        <a class="<?php echo ($_SERVER['PHP_SELF'] == "/view/admin/providerList.php" ? "active" : ""); ?> btn btn-dark bg-opacity-75 py-3 text-white  fw-bolder w-100" href="<?php echo SITE_URL; ?>/view/admin/providerList.php">
                            List of Services Provider
                        </a>
                    </h5>
                </li>
            </ul>
        </div>