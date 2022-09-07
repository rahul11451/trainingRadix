<?php
include("../../header.php");
$paths = '/php/';
$str = $_POST['str'];
$submit = $_POST['submit'];
if (isset($submit)) {
    if (empty($str)) {
        $error =  '<span class="text-danger">enter value </span>';
    } else {
        $result = explode(" ",$str);
        $detail = "<br><span class='h4'>Input is: {$str} </span><br><br>";
    }
}
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary m-5">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create a program to put a string in an array.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="post">
                        <label for="">Enter string:
                            <input type="text" placeholder="Enter string" class="border border-primary rounded form-control" name="str" <?php echo "value = '$str'"; ?>>
                            <?php
                                echo $error . $detail;
                                print_r($result);
                            ?>
                            </span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="click me" class="btn-outline-primary btn">
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/printNextChar.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/findpathName.php" class="text-white">
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