<?php

use LDAP\Result;
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
                    Remove new line of string
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">Enter string:
                            <textarea placeholder="Enter string" class="border border-primary rounded form-control" name="str" ><?php $str = $_POST['str']; echo $str; ?></textarea>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['str'])){echo 'enter string';} }?></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to remove new line of string</button>
                    </form>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                $string1 = $_POST['str'];
                $result = trim($string1,"\n");
                echo '<h4 class="mb-5 text-center text-primary">' . $result . '</h4>';
                }
                ?>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/removeNonNumeric.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/formValidation.php" class="text-white">
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