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
                    Find number is power of 2 or not
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">Enter number:
                            <input type="number" placeholder="Enter number to show squre root of number" class="border border-primary rounded form-control" name="num"  <?php $num=$_POST['num']; echo "value='$num'"; ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['num'])){echo 'enter number';} }?></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to check square root of number</button>
                    </form>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                $num = $_POST['num'];
                $num = (int)$num;
                if ($num > 0) {
                    $result = sqrt($num);
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline ">Your entered number is: ' . $num . '<br><br></span> The square root of number is: '.$result.'</h4>';
                } else {
                    echo '<h4 class="mb-5 text-center text-primary">Please enter positive integer</h4>';
                }
            }
                ?>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/checkPowerOfTwo.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/reverseInteger.php" class="text-white">
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