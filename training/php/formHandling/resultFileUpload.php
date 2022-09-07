<?php
include("../../header.php");
$paths = '/php/';
$name = $_GET["name"];
$size = $_GET['size'];
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Result
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <h4 class="text-primary">File name is :</h4>
                    <?php echo $name;?>
                    <br>
                    <br>
                    <h4 class="text-primary">File size is :</h4>
                    <?php echo $size. " Bytes"; ?>
                    <br><br>
                    <img src="<?php echo SITE_URL; ?>php/formHandling/images/<?php echo $name; ?>" alt="img" width="200">
                    <br>
                    <br>
                    <form action="downloadImg.php" method="get">
                    <a href="fileUpload.php" class="text-decoration-none">
                        <input type="button" class="btn-outline-primary btn" name="uploadNewFile" value="upload new file">
                    </a>
                        <input type="text" hidden name="imgName" <?php echo "value = $name"; ?>>
                        <input type="submit" class="btn-outline-primary btn" name="downloadFile" value="download File">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../../footer.php");
?>
