<?php

$paths = '/php/';
if(isset($_POST['action'])){
    if($_POST['action'] == 'checkButton'){
        if(file_exists($_POST['name'])){
            echo 'File is exists';
        } else {
            echo 'upps file is not here.';
        }
    } 
    exit;  
}
include("../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create an application for check file is exists or not.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST">
                        <label for="" class="text-primary">
                            Enter File Name: <input class="form-control border-primary" type="text" name="fileName" id="fileName">
                            <span class="text-danger" id="output"><?php if(isset($fileName)){ echo $errorFile; } ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="button" class="btn-outline-primary btn" name="checkFile" value="checkFile" id="submit">
                        <input type="reset" class="btn-outline-primary btn" name="reset" value="Reset">
                    </form>
                    <h4 class="text-primary text-center" id="op"></h4>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/retriveFileData.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/chatApplication.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="../ajax/checkFile.js"></script>
<?php
include("../../footer.php");
?>
