<?php
include("../../header.php");
include("function.php");
$paths = '/php/';



if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result2 = $error1 = $error2 = $result1 = $res = $res1 = '';
    if (!empty($num1) && !is_numeric($num1)) {
        $error1 = 'please enter number only';
    } 
    if(empty($num1)){
        $error1 = 'enter number';
    }
    if (!empty($num2) && !is_numeric($num1)) {
        $error2 = 'please enter number only';
    } 
    if(empty($num2)) {
        $error2 = 'enter number';
    }

    if (!empty($num1) && !empty($num2)) {
        $res = '<br><div class="form-control border-primary d-flex justify-content-between w-50 px-3"> 
        <div><h5 class="">First number Entered: <span class="text-primary">' . $num1 . '</span></h5>
                        <h5 class="">Second number Entered: <span class="text-primary">' . $num2 . '</span></h5>';
        swapNumber($num1, $num2);
        $res1 ='<h5 class="">First number get: <span class="text-primary">' . $num1 . '</span></h5>
                        <h5 class="">Second number get: <span class="text-primary">' . $num2 . '</span></h5>
                        </div>    
                    </div>';
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
                    Swap Two Numbers
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="" class="text-primary">
                            Number1: <input class="form-control border-primary" type="number" name="num1" placeholder="Number1" class="border border-primary rounded" <?php if(isset($num1)){ echo "value='$num1'"; } ?>>
                            <span class="text-danger"><?php if(isset($num1)){ echo $error1; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Number2: <input class="form-control border-primary" type="number" name="num2" placeholder="Number2" class="border border-primary rounded" <?php if(isset($num2)){ echo "value='$num2'"; } ?>>
                            <span class="text-danger"><?php if(isset($num2)){ echo $error2; } ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to swap numbers">
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        echo $res.'
                        </div>
                        <div>
                            '.$res1;
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/calculatorUsingOneFun.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/showAllOpOfCal.php" class="text-white">
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