<?php
include("../../header.php");
$paths = '/php/';

if(isset($_POST['uploadFile'])){
    $file = $_FILES['file'];
    $name = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $errorFile = '';
    $pathInfo = pathinfo($name);
    if(empty($file['name'])){
        $errorFile = 'Enter file';
        
    } 
        // if($pathInfo['extension'] != "jpeg" || $pathInfo['extension'] != "png" || $pathInfo['extension'] != "pdf"){
        //     $errorFile = 'Enter only jpeg, png or pdf files';
        // } 
        elseif($file['size'] > 1000000){
            $errorFile = 'Maximum size will be 1 MB allowed';
        } else{
            move_uploaded_file($tmp_name, 'images/'.$name);
            header("Location:resultFileUpload.php?size=" .$file['size'] ."&name=" .$name);
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
                    Create a form for upload files on the server.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST"   enctype="multipart/form-data">
                        <label for="" class="text-primary">
                            Select Image or pdf file: <input class="form-control border-primary" type="file" name="file" id="file">
                            <span class="text-danger" id="output"><?php if(isset($file['name'])){ echo $errorFile; } ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" class="btn-outline-primary btn" name="uploadFile" value="upload" id="submit" onclick="return upload()">
                        <input type="reset" class="btn-outline-primary btn" name="reset" value="Reset">
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>formHandling/urlRedirect.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/retriveDataFromFile.php" class="text-white">
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
    function upload(){
        var file = document.getElementById("file").value;
        if (file == ''){
            document.getElementById("output").innerHTML = 'Please enter Image';
            return false;
        }
    }
</script>