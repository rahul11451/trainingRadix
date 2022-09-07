<?php
include("../../header.php");
$paths = '/php/';
$str = $_SERVER["PHP_SELF"];
$result = substr($str, strrpos($str, "/") + 1);
$result = trim($result, strpbrk($result, '.'));
$detail = "<br><span class='h4'>Input is: {$str} </span><br><br>";
$output = "<br><span class='h4'>Result is: {$result} </span><br><br>";
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create a program to get the filename component of the following path.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        echo $detail . $output;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/stringToArray.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/findDiffStr.php" class="text-white">
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