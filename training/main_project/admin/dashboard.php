<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}
include('mainHeader.php');


?>

<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("mainSidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-2 column10">
            <section class="py-5 mb-4 mt-5" id="action">
                <div class="container px-5">
                    <div class="row mb-3">
                        <div class="col hotelTitle">
                            <h1 class="text-center text-white">
                                <span class="text-muted text-decoration-underline"> Welcome To </span> <br><br> Hotel Management System
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<?php
include('../mainFooter.php');
?>