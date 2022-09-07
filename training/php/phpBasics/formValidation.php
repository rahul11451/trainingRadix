<?php

use LDAP\Result;
include("../../header.php");
$paths = '/php/';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $hostname = $_POST['hostname'];
    $number = $_POST['number'];
    $ip = $_POST['ip'];
    // email
    if (!empty($email)) {
        if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-z.]{2,5}$/", $email)) {
            $errorEmail = 'correct email';
        } else {
            $errorEmail = 'Incorrect email';
        }
    } else {
         $errorEmail = 'Please enter email';
    }

    // hostname validation
    if (!empty($hostname)) {
        if (preg_match('/[_" "]/', $hostname)) {
             $errorHost = 'Incorrect hostname';
        } else {
             $errorHost = 'correct hostname';
        }
    } else {
         $errorHost = 'Please enter hostname';
    }

    // number
    if (!empty($number)) {
        if (preg_match('/^(\+91{1,3}[" "]?)?\d{10}$/', $number)) {
             $errorNumber = 'correct number';
        } else {
             $errorNumber = 'Incorrect number';
        }
    } else {
         $errorNumber = 'Please enter number field';
    }

    // ip address
    if (!empty($ip)) {
        if (preg_match('/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}.([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip)) {
             $errorIp = 'correct ip address';
        } else {
             $errorIp = 'incorrect ip address';
        }
    } else {
         $errorIp = 'please enter ip address';
    }
}

?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Form Validation
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="">Enter email:
                            <input type="text" placeholder="Enter email" class="border border-primary rounded form-control" name="email">
                            <span class="text-danger"><?php echo $errorEmail; ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="">Enter hostname:
                            <input type="text" placeholder="Enter hostName" class="border border-primary rounded form-control" name="hostname">
                            <span class="text-danger"><?php echo $errorHost; ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="">Enter phone Number:
                            <input type="text" placeholder="+91 8765880022" class="border border-primary rounded form-control" name="number">
                            <span class="text-danger"><?php echo $errorNumber; ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="">Enter Ip-address:
                            <input type="text" placeholder="Enter ip address" class="border border-primary rounded form-control" name="ip">
                            <span class="text-danger"><?php echo $errorIp; ?></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to check correct values</button>
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/removeNewLine.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/arrayFunction.php" class="text-white">
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