<?php
include("../../header.php");
$paths = '/php/';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 ps-lg-5 pt-4 column10">
            <div class="p-md-5 m-md-5 bg-white border rounded shadow-lg border-primary">
                <h5 class="mb-5 text-center fw-bold text-decoration-underline text-primary">print string using echo</h5>
                <div class="text-center">
                    <?php
                    echo 'we\'ve learned basic PHP. 
                        <br> We are going to develop a basic application. 
                        <br> You are at C:\\\\';
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_overview/version_confi.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-5">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_overview/detail.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-5">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include("../../footer.php");
?>