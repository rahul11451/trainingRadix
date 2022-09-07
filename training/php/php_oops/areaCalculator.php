<?php
include("../../header.php");

$paths = '/php/';
if (isset($_POST['submit'])) {
    $errorLength = '';
    $shape = $_POST['shape'];
    $length = $_POST['length'];

    if (empty($length)) {
        $errorLength = 'Please enter value';
    } else {
        if (!is_numeric($length)) {
            $errorLength = 'Please enter number only';
        }
    }
    if (!empty($shape) && !empty($length)) {
        switch ($shape) {
            case 'circle':
                $area = new Circle();
                break;
            case 'square':
                $area = new Square();
                break;
            default:
                $area = new Circle();
                break;
        }
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
                    Area Calculator.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                            <label for="" class="text-primary">
                                Select Shape:
                                <select name="shape" id="" class="border-primary form-select text-primary">
                                    <option value="circle" class="" <?php if (isset($shape) && $shape == 'circle') {
                                                                        echo 'selected';
                                                                    } ?>>Circle</option>
                                    <option value="square" class="" <?php if (isset($shape) && $shape == 'sqaure') {
                                                                        echo 'selected';
                                                                    } ?>>Square</option>
                                </select>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Length: <input class="form-control border-primary rounded" type="text" name="length" placeholder="Enter Radius or Length" <?php if (isset($length)) {
                                                                            echo "value='$length'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($length)) {
                                                                echo $errorLength;
                                                            } ?></span>
                            </label>
                            <br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="Click me to calculate area">
                            </label>
                        </form>
                        <div class="w-50">
                            <?php
                            if (isset($_POST['submit'])) {
                                if (!empty($shape) && !empty($length)) {
                                    echo "<h4 class='text-primary'>The area of " . $shape . " is: " . $area->calculateArea($length) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/personsDetails.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/buildingManagment.php" class="text-white">
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