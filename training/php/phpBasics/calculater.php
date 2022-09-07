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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Script using switch case
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="" class="text-primary">
                            Number1: <input class="form-control border-primary" type="number" name="num1" placeholder="Number1" class="border border-primary rounded" <?php $num1=$_POST['num1']; echo "value='$num1'"; ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['num1'])){echo 'enter number';} }?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number2: <input class="form-control border-primary" type="number" name="num2" placeholder="Number2" class="border border-primary rounded" <?php $num2=$_POST['num2']; echo "value='$num2'"; ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['num2'])){echo 'enter number';} }?></span></span>
                        </label>
                        <br>
                        <br>
                        <label class="me-2 text-primary">
                            addition: <input type="radio" class="form-check-input" value="add" name="opration" <?php if($_POST['opration']=='add') {echo 'checked';} ?>>
                        </label>

                        <label class="me-2 text-primary">
                            substraction: <input type="radio" class="form-check-input" value="sub" <?php if($_POST['opration']=='sub') {echo 'checked';} ?> name="opration" required>
                        </label>

                        <label class="me-2 text-primary">
                            multiplication: <input type="radio" class="form-check-input" value="mul" <?php if($_POST['opration']=='mul') {echo 'checked';} ?> name="opration">
                        </label>

                        <label class="me-2 text-primary">
                            division: <input type="radio" class="form-check-input" value="div" <?php if($_POST['opration']=='div') {echo 'checked';} ?> name="opration">
                        </label>
                        <label class="me-2 text-primary">
                            modulus: <input type="radio" class="form-check-input" value="mod" <?php if($_POST['opration']=='mod') {echo 'checked';} ?> name="opration">
                        </label>

                        <label class="me-2 text-primary">
                            square: <input type="radio" class="form-check-input" value="sq" <?php if($_POST['opration']=='sq') {echo 'checked';} ?> name="opration">
                        </label>

                        <label class="me-2 text-primary">
                            square_root: <input type="radio" class="form-check-input" value="sqrt" <?php if($_POST['opration']=='sqrt') {echo 'checked';} ?> name="opration">
                        </label>

                        <label class="me-2 text-primary">
                            factorial: <input type="radio" class="form-check-input" value="fact" <?php if($_POST['opration']=='fact') {echo 'checked';} ?> name="opration">
                        </label>
                        <br>
                        <br>
                        <button type="submit" class="btn-outline-primary btn"> click me</button>
                    </form>
                    <?php
                    $numError = '';

                    $num1 = $num2 = $operation;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        if(empty($num1)){
                            $numError = 'nen';
                        }
                        $operator = $_POST["opration"];
                        operation($num1, $num2, $operator);
                    }
                    function operation($num1, $num2, $operator) {
                        switch ($operator) {
                            case "add":
                                $result = $num1 + $num2;
                                break;
                            case "sub":
                                $result = $num1 - $num2;
                                break;
                            case "mul":
                                $result = $num1 * $num2;
                                break;
                            case "div":
                                if($num2 == 0)
                                {
                                    $result = '0 is not possible';
                                }
                                else{
                                    $result = $num1 / $num2;
                                }
                                break;
                            case "mod":
                                $result = $num1 % $num2;
                                break;
                            case "sq":
                                $result = $num1 ** 2;
                                break;
                            case "sqrt":
                                $result = $num1 ** (0.5);
                                break;
                            case "fact":
                                function fact($num1)
                                {
                                    if ($num1 == 0) {
                                        return 1;
                                    }
                                    return fact($num1 - 1) * $num1;
                                }
                                $result = fact($num1);
                                break;
                            default:
                                $result = "Upps numbers are empty";
                                break;
                        }
                        echo '<h1 class="mb-5 text-center text-primary"><span class="text-decoration-underline">The answer is: </span>' . $result .  '</h1>';
                    }

                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_overview/form.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/displayValues.php" class="text-white">
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