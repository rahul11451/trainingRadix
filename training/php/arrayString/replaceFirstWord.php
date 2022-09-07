<?php
include("../../header.php");
$paths = '/php/';
$str1 = 'PHP is a server-side language and PHP is loosely coupled language.';
$result = substr_replace($str1, 'Java', 0, 3);
$detail = '<h4 class="h4">Input is:  <span class="h5">' . $str1 . '</span></h4>';
$output = '<h4 class="h4">Result is:  <span class="h5 text-primary">' . $result . '</span></h4>';
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create a program to replace the first 'PHP' of the following string with 'Java'.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        echo $detail . $output ;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/findDiffStr.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/calculatorUsingOneFun.php" class="text-white">
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