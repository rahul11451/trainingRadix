<?php
include("../../header.php");
include("function.php");
$paths = '/php/';
$num1 = $num2 = $op = $error1 = $error2 = $result = '';


if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['opration'];

    if (!empty($num1) && !is_numeric($num1)) {
        $error1 = 'please enter number only';
    }
    if (empty($num1)) {
        $error1 = 'enter number';
    }
    if (!empty($num2) && !is_numeric($num1)) {
        $error2 = 'please enter number only';
    }
    if (empty($num2)) {
        $error2 = 'enter number';
    }

    // main logic

    if (!empty($num1) && !empty($num2)) {
        $result = calculatorUsingOneFunction($num1, $num2, $op);
        $result = '<br><div class="form-control w-25 border-primary"> <h4 class="text-primary"><span class="pe-2">' . ucfirst($op) . ' is: </span>' . $result .  '</h4></div>';
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
                    Write a program to create Calculator functionality.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="" class="text-primary">
                            Number1: <input class="form-control border-primary" type="number" name="num1" placeholder="Number1" class="border border-primary rounded" <?php echo "value='$num1'"; ?>>
                            <span class="text-danger"><?php echo $error1; ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number2: <input class="form-control border-primary" type="number" name="num2" placeholder="Number2" class="border border-primary rounded" <?php echo "value='$num2'"; ?>>
                            <span class="text-danger"><?php echo $error2; ?></span></span>
                        </label>
                        <br>
                        <br>
                        <label for="">
                            <select name="opration" id="" class="border-primary form-select text-primary">
                                <option value="addition" class="" <?php if ($op == 'addition') {
                                                                        echo 'selected';
                                                                    } ?>>addition</option>
                                <option value="subtraction" class="" <?php if ($op == 'subtraction') {
                                                                            echo 'selected';
                                                                        } ?>>subtraction</option>
                                <option value="multiplication" class="" <?php if ($op == 'multiplication') {
                                                                            echo 'selected';
                                                                        } ?>>multiplication</option>
                                <option value="division" class="" <?php if ($op == 'division') {
                                                                        echo 'selected';
                                                                    } ?>>division</option>
                            </select>
                        </label>
                        <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to see your operation">
                    </form>
                    <?php
                    echo $result;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/replaceFirstWord.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/swapTwoNum.php" class="text-white">
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