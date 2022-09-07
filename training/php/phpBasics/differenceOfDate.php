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
                    Find difference of dates
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">
                            First date: <input type="date" name="date1" id="" class="border border-primary rounded form-control" <?php $date1=$_POST['date1']; echo "value='$date1'"; ?> required>
                        </label>
                        <br>
                        <br>
                        <label for="">
                            Second date: <input type="date" name="date2" id="" class="border border-primary rounded form-control" <?php $date2=$_POST['date2']; echo "value='$date2'"; ?> required>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">submit</button>
                    </form>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                $date1 = $_POST['date1'];
                $date2 = $_POST['date2'];
                $date1 = (string)$date1;
                $date2 = (string)$date2;
                $dateCal1 = preg_split('/-/', $date1);
                $dateCal2 = preg_split('/-/', $date2);
                for ($i = 0; $i < count($dateCal1); $i++) {
                    if ($dateCal1[$i] >= $dateCal2[$i]) {
                        $result = $dateCal1[$i] - $dateCal2[$i];
                    } else {
                        $result = $dateCal2[$i] - $dateCal1[$i];
                    }
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black">Diff. of ' . $dateCal1[$i] . ' and ' . $dateCal2[$i] . ': </span>' . $result . '<br></h4>';
                }
            }
                ?>
            </div>
            <div class="d-sm-flex justify-content-between mt-5 mx-md-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/findAge.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/dateValidation.php" class="text-white">
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