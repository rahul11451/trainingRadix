<?php
include("../../header.php");
$paths = '/php/';
$submit = $_POST['submit'];
$value1 = $_POST['str'];
$value2 = $_POST['str1'];
if (isset($submit)) {
    if (empty($value1)) {
        $error1 = 'enter value';
    }
    if (empty($value2)) {
        $error2 = 'enter value';
    }
    if (!empty($value1) && !empty($value2)) {
        $nen = strspn($value1 ^ $value2, "\0");
        $nen = $nen + 1;
        $result = '<h4 class="h4">First difference between two strings at position <span class="h2 text-primary">' . $nen .'</span> :'. $value1.' vs '. $value2 .' </h4>';
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
                    Create a program to find the first character that is different between two strings.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="post">
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str" <?php $text = $_POST['str']; echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error1; ?></span>
                        </label>
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str1" <?php $text = $_POST['str1']; echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error2; ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn-outline-primary btn" value="click me to show difference">
                    </form>
                    <?php
                        echo $result;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/findpathName.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/replaceFirstWord.php" class="text-white">
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