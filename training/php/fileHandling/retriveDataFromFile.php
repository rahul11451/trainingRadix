<?php

$paths = '/php/';

if(isset($_POST['uploadFile'])){
    $file = $_FILES['file'];
    $name = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $errorFile = '';
    $text = $_POST['text'];
    if(empty($name)){
        $errorFile = 'Enter file';
        
    }else{
        move_uploaded_file($tmp_name, 'text/'.$name);
        $fileHandle = fopen('text/'.$name, 'r');
        $mainOp = fread($fileHandle, 1024);
        fclose($fileHandle);
        $file = fopen('text/'.$name,'a');
        fwrite($file,$text);
        fclose($file);
        $finalFile = fopen('text/'.$name, 'a+');
        $fileOp = fread($copyFile, 1024);
        
    }
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
                    Create a form for upload files on the server.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="" class="text-primary">
                            Select file: <input class="form-control border-primary" type="file" name="file" id="file">
                            <span class="text-danger" id="output"><?php if(isset($file['name'])){ echo $errorFile; } ?></span>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary text1">
                            Enter Text: <input class="form-control border-primary" type="text" name="text" id="text" placeholder="Enter Text">
                            <span class="text-danger" id="op"></span>
                        </label>
                        <br>
                        <br>
                        
                        <input type="submit" class="btn-outline-primary btn" name="uploadFile" value="upload" id="submit">
                        <input type="reset" class="btn-outline-primary btn" name="reset" value="Reset">
                    </form>
                    <br>
                    <form action="downloadFile.php" method="POST">
                        <input type="text" hidden name="fileName" <?php if(isset($_POST['uploadFile'])){ echo "value = $name"; } ?>>    
                        <input type="submit" class="btn-outline-primary btn" name="downloadFile" value="Click me to download file" id="download">
                    </form>
                </div>
                <div class="mt-5 d-flex justify-content-around w-50">
                    <?php
                        if(isset($_POST['uploadFile'])){
                            echo '<div class=""><h5>Entered text file:</h5>';
                            echo $mainOp .'</div><br><div><h5>Updated text file:</h5>';
                            echo $fileOp . '</div>';
                            fclose($finalFile);
                        }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>formHandling/fileUpload.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/formValidation.php" class="text-white">
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
    $(document).ready(function(){
        $("#submit").click(function(){
            var file = $("#file").val();
            if (file == ''){
                $("#output").text('Please enter file');
                return false;
            }
            if($("#text").val() == ''){
                $("#op").text('Please enter text first');
                return false;
            }
        });
    });
</script>