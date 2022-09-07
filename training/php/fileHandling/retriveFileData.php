<?php
include("../../header.php");
$paths = '/php/';
$filePath = 'result/nensi453702771txt';
if(file_exists($filePath)){
    $fileName = basename($filePath);
    $fileSize = filesize($filePath);
    $fileOwner = fileowner($filePath);
    $fileGroup = filegroup($filePath);
    $filrPermission = fileperms($filePath);
    $fileType = filetype($filePath);
    $fileModified = filemtime($filePath);
    $fileReadable = is_readable($filePath);
    $fileWritable = is_writable($filePath);
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
                Create a Program to read file created in 2nd exercises and display following information as OUTPUT: File name,File size,File owner,File group,File permissions,File type, File last modified on,Is file readable,Writable?
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php 
                        echo '<h5>File Name: <span class="text-primary">'.$fileName.'</span></h5><br>
                        <h5>File Size: <span class="text-primary">'.$fileSize.'</span></h5><br>
                        <h5>File Owner: <span class="text-primary">'.$fileOwner.'</span></h5><br>
                        <h5>File Group: <span class="text-primary">'.$fileGroup.'</span></h5><br>
                        <h5>File Permission: <span class="text-primary">'.$filrPermission.'</span></h5><br>
                        <h5>File Type: <span class="text-primary">'.$fileType.'</span></h5><br>
                        <h5>File Modified: <span class="text-primary">'.$fileModified.'</span></h5><br>
                        <h5>File Readable: <span class="text-primary">'.$fileReadable.'</span></h5><br>
                        <h5>File Writable: <span class="text-primary">'.$fileWritable.'</span></h5><br>';
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>fileHandling/formValidation.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/checkFile.php" class="text-white">
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

