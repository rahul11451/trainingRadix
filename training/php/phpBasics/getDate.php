<?php
include("../../header.php");
$paths = '/php/';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    get date in 6 different format
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <?php
                     echo 'today is: '. date("d-M-Y"). '<br> <br>';
                     echo 'today is: '. date("m d Y h:iA"). '<br> <br>';
                     echo 'today is: '. date("jS M Y h:i:s"). '<br> <br>';
                     $tomorrow=strtotime('tomorrow');
                     echo 'Tomorrow is: '. date("d M Y", $tomorrow). '<br> <br>';
                     $nextWeek= strtotime('+1 week');
                     echo 'next week is: '.date('d-m-y',$nextWeek).'<br> <br>';
                     $nextMonday= strtotime('next monday');
                     echo 'next monday is: '.date('d-m-y',$nextMonday);
                    ?>

                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/pictureVerification.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/findAge.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
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