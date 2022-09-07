<?php
include("../../header.php");
$paths = '/php/';
$submit = $_POST['submit'];
$value1 = $_POST['str'];
$value2 = $_POST['str1'];
$value3 = $_POST['str2'];
$value4 = $_POST['str3'];
if (isset($submit)) {
    if (empty($value1)) {
        $error1 = 'enter value';
    }
    if (empty($value2)) {
        $error2 = 'enter value';
    }
    if (empty($value3)) {
        $error3 = 'enter value';
    }
    if (empty($value4)) {
        $error4 = 'enter value';
    }
}
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Array function
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str" <?php $text = $_POST['str'];echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error1; ?></span>
                        </label>
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str1" <?php $text = $_POST['str1'];echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error2; ?></span>
                        </label>
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str2" <?php $text = $_POST['str2'];echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error3; ?></span>
                        </label>
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str3" <?php $text = $_POST['str3'];echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error4; ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn-outline-primary btn" value="click me to show result of array function">
                    </form>
                </div>
                <?php
                if (!empty($value1) && !empty($value2) && !empty($value3) && !empty($value4)) {
                    $firstArray = array();
                    array_push($firstArray, $value1, $value2, $value3, $value4);
                    echo "<span class='text-center text-primary h6 me-5'> Minimum value of array is: <span class='text-black'>" . min($firstArray) . "</span></span>";
                    // max
                    echo "<span class='text-center text-primary h6 me-5'> Maximum value of array is: <span class='text-black'>" . max($firstArray) . "</span></span>";
                    // count
                    echo "<span class='text-center text-primary h6 me-5'> Number of values in array is: <span class='text-black'>" . count($firstArray) . "</span></span>";
                    // random
                    $key = array_rand($firstArray);
                    echo "<span class='text-center text-primary h6 me-5'> random value from the array is: <span class='text-black'>" . $firstArray[$key] . "</span></span><br>";
                    // ascending sort
                    asort($firstArray);
                    echo "<br><div class='row'><div class='col'>";
                    echo "<span class='text-center text-primary h6 me-5'> ascending order using key: </span><br>";
                    foreach ($firstArray as $key => $values) {
                        echo "key = " . $key . " value = " . $values . "<br>";
                    }
                    // associated sort
                    echo "</div><div class='col'>";
                    ksort($firstArray);
                    echo "<span class='text-center text-primary h6 me-5'> ascending order using value: </span><br>";
                    foreach ($firstArray as $key => $values) {
                        echo "key = " . $key . " value = " . $values . "<br>";
                    }
                    // unique
                    echo "</div><div class='col'>";
                    echo "<span class='text-primary h6'> Array unique: </span><br><pre>";
                    print_r(array_unique($firstArray));
                    "</pre>";
                    // keys
                    echo "</div><div class='col'>";
                    echo "<span class='text-primary h6'> keys in array are: </span><br><pre>";
                    print_r(array_keys($firstArray));
                    "</pre>";
                    // values
                    echo "</div><br><div class='row'><div class='col'>";
                    echo "<span class='text-primary h6'> values in array are: </span><br><pre>";
                    print_r(array_values($firstArray));
                    "</pre>";
                    // reverse
                    echo "</div><div class='col'>";
                    echo "<span class='text-primary h6'> Reverse array is: </span><br><pre>";
                    print_r(array_reverse($firstArray));
                    "</pre>";
                    // chunk
                    echo "</div><div class='col'>";
                    echo "<span class='text-primary h6'> Array chunk: </span><br><pre>";
                    print_r(array_chunk($firstArray, 1));
                    "</pre>";

                    echo "</div><div class='col'></div></div></div>";
                }
                ?>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/formValidation.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/createArrayAndOperation.php" class="text-white">
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