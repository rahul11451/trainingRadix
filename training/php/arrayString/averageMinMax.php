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
                    Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65,64, 68, 73, 75, 79, 73";
                    $temp = explode(",", $month_temp);
                    $average = array_sum($temp) / count($temp);
                    echo "<span class='h3 text-black'>Average temperature is: <span class='text-primary'>" . $average . "</span></span><br><br>";
                    sort($temp);
                    $count = 0;
                    echo "<span class='h3 text-black'>Minimum temperature is: ";
                    foreach ($temp as $key => $value) {
                        if ($count < 5) {
                            echo "<span class='text-primary'>" . $value . " </span>";
                        } else {
                            break;
                        }
                        $count++;
                    }
                    echo "</span><br><br>";
                    rsort($temp);
                    $count = 0;
                    echo "<span class='h3 text-black'>Maximum temperature is: ";
                    foreach ($temp as $key => $value) {
                        if ($count < 5) {
                            echo "<span class='text-primary'>" . $value . " </span>";
                        } else {
                            break;
                        }
                        $count++;
                    }
                    echo "</span>";
                    ?>
                </div>

            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/createArrayAndOperation.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/serializedToUnserialized.php" class="text-white">
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