<?php
include("../../header.php");
include("function.php");
$paths = '/php/';
$array = array('a' => 100,
    'b' => 200,
    'c' => array(
        'c1' => 333,
        'c2' => 400
    ),
    'd' => 500,
    'e' => array(
        'e1' => 600,
        'e2' => 700
    )
);
$newArray = array();

$result = multiToSingle($array, $newArray);

?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Display multidimensional array values at single level using function.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                        echo "<div class='d-flex justify-content-around w-75'><div><h4 class='text-primary'>Input array:</h4><pre>";
                        print_r($array); "</pre>";

                        echo "</div><div><h4 class='text-primary'>Output array:</h4><pre>";
                        print_r($result);"</pre>"; 
                        echo "</div></div>";
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/calculationUsingOp.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/personsInfo.php" class="text-white">
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