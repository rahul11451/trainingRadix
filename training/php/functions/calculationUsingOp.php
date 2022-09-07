<?php
include("../../header.php");
include("function.php");
$paths = '/php/';   

if (isset($_POST['submit'])) {
    $result = '';
    $num1 = 20;
    $num2 = 10;
    $op = $_POST['opration'];

    $result = calculationUsingOp($num1, $num2, $op);
    $result = '<br><div class="form-control w-25 border-primary"> 
                        <h4 class="text-primary">
                            <span class="pe-2 text-black"> First number is: </span>' . $num1 .
                        '</h4>
                        <h4 class="text-primary">
                            <span class="pe-2 text-black"> Second number is: </span>' . $num2 .  
                        '</h4>
                        <h4 class="text-primary">
                            <span class="pe-2 text-black">' . ucfirst($op) . ' is: </span>' . $result .
                        '</h4>
                    </div>';
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
                    Implement same calculator functionality with all operations
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="">
                            <select name="opration" id="" class="border-primary form-select text-primary">
                                <option value="addition" class="" <?php if(isset($op)){if ($op == 'addition') {
                                                                        echo 'selected';}
                                                                    } ?>>addition</option>
                                <option value="subtraction" class="" <?php if(isset($op)){if ($op == 'subtraction') {
                                                                            echo 'selected';}
                                                                        } ?>>subtraction</option>
                                <option value="multiplication" class="" <?php if(isset($op)){if ($op == 'multiplication') {
                                                                            echo 'selected';}
                                                                        } ?>>multiplication</option>
                                <option value="division" class="" <?php if(isset($op)){if ($op == 'division') {
                                                                        echo 'selected';}
                                                                    } ?>>division</option>
                            </select>
                        </label>
                        <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to see your operation">
                    </form>
                    <?php
                        if (isset($_POST['submit'])) {
                            echo $result;
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/showAllOpOfCal.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/multiArrayToSingleArray.php" class="text-white">
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