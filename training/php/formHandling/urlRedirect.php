<?php
include("../../header.php");
$paths = '/php/';

if (isset($_REQUEST['redirectUrl'])) {
    $url = $_REQUEST['url'];
    if(empty($url)){
        $errorUrl = 'Enter URL';
    } elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
        $errorUrl = "Enter valid Url";
    } else {
        header("Location: $url");
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
                    Create a PHP script for redirect to another page.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="GET">
                        <label for="" class="text-primary">
                            Enter Url: <input class="form-control border-primary" type="text" name="url" placeholder="Enter Url" id="url">
                            <span class="text-danger" id="output"><?php if(isset($url)){ echo $errorUrl; } ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" class="btn-outline-primary btn" name="redirectUrl" value="Redirect on site" id="submit" onclick="return nen()">
                        <input type="reset" class="btn-outline-primary btn" name="reset" value="Reset">
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/finalPrice.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>formHandling/fileUpload.php" class="text-white">
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

<script>
    function nen(){
        var url = document.getElementById("url").value;
        var pattern = /\b(?:(?:https?|ftp):\/\/www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i;
        if (url == ''){
            document.getElementById("output").innerHTML = 'Please enter your url';
            return false;
        } else if(!(pattern.test(url))){
            document.getElementById("output").innerHTML = 'Please enter valid url';
            return false;
        } else {
            return true;
        }
    }
</script>