<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date1 = $_POST['date1'];
    $dateArray = preg_split('/-/', $date1);
    $day = $dateArray[0];
    $month = $dateArray[1];
    $year = $dateArray[2];
    if (preg_match('/^[0-9]{4}/', $year)) {
        if ((int)$year <= 2022) {
            $error = 'Year is Valid';
        } else {
            $error = 'Year is not Valid';
        }
    } else {
        $error = 'Please enter 4 digit year';
    }
    if (preg_match('/^[0-9]{2}/', $month)) {
        if ((int)$month <= 12) {
            $errorMonth = 'Month is Valid';
        } else {
            $errorMonth='Month is not Valid';
        }
    } else {
        $errorMonth='Please enter 2 digit month';
    }
    if (preg_match('/^[0-9]{2}/', $day)) {
        if ((int)$month == 02) {
            if (((int)$year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
                if ((int)$day <= 29) {
                    $errorDate = 'Day is Valid';
                } else {
                    $errorDate = 'Day must be less than and equal to 29';
                }
            } else {
                if ((int)$day <= 28) {
                    $errorDate = 'Day is Valid';
                } else {
                    $errorDate = 'Day must be less than and equal to 28';
                }
            }
        } else if (preg_match('/[1|3|5|7|8|10|12]', $month)) {
            if ((int)$day <= 31) {
                $errorDate = 'Day is Valid';
            } else {
                $errorDate = 'Day must be less than and equal to 31';
            }
        } else {
            if ((int)$day <= 30) {
                $errorDate = 'Day is Valid';
            } else {
                $errorDate = 'Day must be less than and equal to 30';
            }
        }
    } else {
        $errorDate='Please enter 2 digit date';
    }
}



function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


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
                    Date validation
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="">
                            Enter a date: <input type="text" name="date1" id="" placeholder="dd-mm-yyyy" class="border border-primary rounded form-control" required>
                        </label>
                        <br>
                        <?php
                        echo '<span class="mt-2 mb-2 text-danger">' . $error . '</span> <br>';
                        echo '<span class="mb-2 text-danger">' . $errorMonth . '</span> <br>';
                        echo '<span class="text-danger">' . $errorDate . '</span>';
                        ?>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to check date is valid or not</button>
                    </form>
                </div>

            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/differenceOfDate.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/convertMonthNoToName.php" class="text-white">
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