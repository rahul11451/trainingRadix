<?php
include("../../header.php");
$paths = '/php/';
$submit = $_POST['submit'];
$value1 = $_POST['str'];
if (isset($submit)) {
    if (empty($value1)) {
        $error1 = 'enter value';
    } else {
        $result = str_replace(',', '', $value1);
        $res = "<span class='h4'>Input is: {$value1} </span><br><br>";
        $result = "<span class='h4'>Result is: {$result} </span>";
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
                    Create a program that can remove comma(s) from the string.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="post">
                        <label for="">Enter value:
                            <input type="text" placeholder="Enter values" class="border border-primary rounded form-control" name="str" <?php $text = $_POST['str'];
                                                                                                                                        echo "value = '$text'"; ?>>
                            <span class="text-danger"><?php echo $error1; ?></span>
                        </label>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn-outline-primary btn" value="click me to remove commas">
                    </form>
                    <?php
                        echo "<br>" . $res;
                        echo $result;
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/sortingOnAssArray.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>arrayString/replaceCharacter.php" class="text-white">
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