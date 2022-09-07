<?php
include("../../header.php");
$paths = '/php/';
$str = $_SERVER["PHP_SELF"];
$result = substr($str, strrpos($str, "/") + 1);
$detail = "<span class='h4'>Input is: {$str} </span><br><br>";
$output =  "<span class='h4'>Result is: {$result} </span>";
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create a program to get the characters after the last '/' in an URL.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        echo $detail .'<br>'. $output;              
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/replaceCharacter.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/insertString.php" class="text-white">
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