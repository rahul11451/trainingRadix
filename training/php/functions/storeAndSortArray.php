<?php
include("../../header.php");
include("function.php");
$paths = '/php/';
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];
    $number4 = $_POST['number4'];
    $number5 = $_POST['number5'];
    $number6 = $_POST['number6'];
    $number7 = $_POST['number7'];
    if (empty($number1) || !is_numeric($number1)) {
        $errorNumber1 = 'Please enter number';
    }
    if (empty($number2) || !is_numeric($number1)) {
        $errorNumber2 = 'Please enter number';
    }
    if (empty($number3) || !is_numeric($number1)) {
        $errorNumber3 = 'Please enter number';
    }
    if (empty($number4) || !is_numeric($number1)) {
        $errorNumber4 = 'Please enter number';
    }
    if (empty($number5) || !is_numeric($number1)) {
        $errorNumber5 = 'Please enter number';
    }
    if (empty($number6) || !is_numeric($number1)) {
        $errorNumber6 = 'Please enter number';
    }
    if (empty($number7) || !is_numeric($number1)) {
        $errorNumber7 = 'Please enter number';
    }
    if (!empty($number1) && !empty($number2) && !empty($number3) && !empty($number4) && !empty($number5) && !empty($number6) && !empty($number7)) {
        $numberArray = array();
        array_push($numberArray, $number1, $number2, $number3, $number4, $number5, $number6, $number7);
        $newArray = findValues($numberArray);
        $result = sorting($newArray);
    }

    $part1 = "<br><div class='d-flex justify-content-around '><div><p class='h5 text-primary'>Eneter Array:</p><pre>";
                    
    $part2 = " </pre></div><div><p class='h5 text-primary'>Descending order array which has greater than 100 values:</p><pre>";
                    
}
?>

<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-3 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Take 7 random numbers as input using form and store them in array.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="" class="text-primary">
                            Number1: <input class="form-control border-primary" type="number" name="number1" placeholder="Number" class="border border-primary rounded" <?php if(isset($number1)){ echo "value='$number1'"; } ?>>
                            <span class="text-danger"><?php if(isset($number1)){ echo $errorNumber1; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number2: <input class="form-control border-primary" type="number" name="number2" placeholder="Number" class="border border-primary rounded" <?php if(isset($number2)){ echo "value='$number2'"; } ?>>
                            <span class="text-danger"><?php if(isset($number2)){ echo $errorNumber2; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number3: <input class="form-control border-primary" type="number" name="number3" placeholder="Number" class="border border-primary rounded" <?php if(isset($number3)){ echo "value='$number3'"; } ?>>
                            <span class="text-danger"><?php if(isset($number3)){ echo $errorNumber3; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number4: <input class="form-control border-primary" type="number" name="number4" placeholder="Number" class="border border-primary rounded" <?php if(isset($number4)){ echo "value='$number4'"; } ?>>
                            <span class="text-danger"><?php if(isset($number4)){ echo $errorNumber4; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number5: <input class="form-control border-primary" type="number" name="number5" placeholder="Number" class="border border-primary rounded" <?php if(isset($number5)){ echo "value='$number5'"; } ?>>
                            <span class="text-danger"><?php if(isset($number5)){ echo $errorNumber5; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number6: <input class="form-control border-primary" type="number" name="number6" placeholder="Number" class="border border-primary rounded" <?php if(isset($number6)){ echo "value='$number6'"; } ?>>
                            <span class="text-danger"><?php if(isset($number6)){ echo $errorNumber6; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number7: <input class="form-control border-primary" type="number" name="number7" placeholder="Number" class="border border-primary rounded" <?php if(isset($number7)){ echo "value='$number7'"; } ?>>
                            <span class="text-danger"><?php if(isset($number7)){ echo $errorNumber7; } ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" class="btn-outline-primary btn form-control" name="submit" value="click me to show result">
                    </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            if (!empty($number1) && !empty($number2) && !empty($number3) && !empty($number4) && !empty($number5) && !empty($number6) && !empty($number7)) {
                                echo $part1;
                                print_r($numberArray);
                                echo $part2;
                                print_r($result);
                                "</pre></div></div>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/personsInfo.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/emplDetail.php" class="text-white">
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
