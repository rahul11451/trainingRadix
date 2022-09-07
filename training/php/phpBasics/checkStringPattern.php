<?php

use function PHPSTORM_META\type;

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
                    Find string validation
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">
                            First string: <input type="text" name="text1" id="" class="border border-primary rounded form-control" <?php $text1=$_POST['text1']; echo "value = '$text1'" ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['text1'])){echo 'enter text';} }?></span>
                        </label>
                        <br>
                        <br>
                        <label for="">
                            Second string: <input type="text" name="text2" id="" class="border border-primary rounded form-control" <?php $text2=$_POST['text2']; echo "value = '$text2'" ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['text2'])){echo 'enter text';} }?></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to check 2nd string is in 1st string</button>
                    </form>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                $text1 = $_POST['text1'];
                $text2 = $_POST['text2'];
                if(!empty($text1) && !empty($text2))
                {
                    if(stristr($text1,$text2)){
                        echo '<h4 class="mb-5 text-center text-primary">text1: ' . $text1 . ' is contain text2: ' . $text2.'</h4>';
                    }
                    else{
                        echo '<h4 class="mb-5 text-center text-primary">text1: ' . $text1 . ' is not contain text2: ' . $text2.'</h4>';
                    }
                }
            }
                ?>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/serverIpAddress.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/removeLastChar.php" class="text-white">
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