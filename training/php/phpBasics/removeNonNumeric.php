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
                    Remove non-numeric character of string
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">Enter string:
                            <input type="text" placeholder="Enter string" class="border border-primary rounded form-control" name="str" <?php $text = $_POST['str']; echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['str'])){echo 'enter string';} }?></span>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">click me to remove non numeric character</button>
                    </form>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(!empty($_POST['str'])){
                $string1 = $_POST['str'];
                $result = preg_replace('/[0-9,.]/','',$string1);
                echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline ">Your entered string is: ' . $string1 . '<br><br></span> New string is: ' . $result . '</h4>';
                }
            }
                ?>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/removeWhiteSpace.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/removeNewLine.php" class="text-white">
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