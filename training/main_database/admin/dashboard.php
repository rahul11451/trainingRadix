<?php

session_start();
include('headerAdmin.php');

if(!isset($_SESSION['user_name'])){
    header('Location: index.php');
}


?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
            include('../sidebarData.php');
        ?>
        <div class="col-lg-10 ps-lg-5 pt-3 column10 mt-5">
            <div class="p-md-2  d-flex justify-content-center ">
                <h5 class="h1 text-primary">Welcome to Radix Family</h5>
            </div>
            <div class="d-flex  justify-content-between mx-5 px-5 my-5">
                <a href="listing.php" class="btn btn-primary">Employees List</a>
                <a href="actionForm.php" class="btn btn-primary">Add employees</a>
            </div>
        </div>
    </div>
</div>


<?php

include('../footerData.php');
?>