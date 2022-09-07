<?php
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
                    Find age using date year
                </h4>
                <div class="m-lg-5 m-2 screen text-primary">
                    <form action="" method="post">
                        <label for="">Select your birth year:
                            <select name="select" id="" class="form-select border-primary">
                                <?php
                                for ($i = 1900; $i <= 2022; $i++) {
                                ?>
                                    <option <?php if ($_POST['select'] == $i) {
                                                echo 'selected';
                                            } ?> value=<?php echo $i ?> name="nen"><?php echo $i ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </label>
                        <br>
                        <br>
                        <button class="btn-outline-primary btn">submit</button>
                    </form>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $option = $_POST['select'];
                    $result = 0;
                    for ($j = $option; $j < date('Y'); $j++) {
                        $result++;
                    }
                    echo '<h4 class="mb-5 text-center text-primary"><span class="text-decoration-underline ">Your birthyear is: ' . $option . '<br><br> Your age is: </span>' . $result .  '</h4>';
                }
                ?>
            </div>
            <div class="d-sm-flex justify-content-between mt-5 mx-md-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/getDate.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/differenceOfDate.php" class="text-white">
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