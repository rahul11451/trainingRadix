<?php
include("../../header.php");

$paths = '/php/';
if (isset($_POST['submit'])) {
    $errorDate = $errorPrice = '';
    $date = $_POST['date'];
    $price = $_POST['price'];
    $result = array();

    if (empty($date)) {
        $errorDate = 'Please enter date';
    }
    if (!empty($price) && !empty($date)) {
        $finalPrice = new OrderPayment($date, $price);
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
                    Final price of product
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                        <label for="" class="text-primary">
                                Delivery Date: <input class="form-control border-primary rounded" type="date" name="date" placeholder="Enter Delivery Date" <?php if (isset($date)) {
                                                                            echo "value='$date'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($date)) {
                                                                echo $errorDate;
                                                            } ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Product price: <input class="form-control border-primary rounded" type="text" name="price" placeholder="Enter Product Price" <?php if (isset($price)) {
                                                                            echo "value='$price'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($price)) {
                                                                echo $errorPrice;
                                                            } ?></span>
                            </label>
                            <br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="Click me">
                            </label>
                        </form>
                        <div class="w-50">
                            <?php
                            if (isset($_POST['submit'])) {
                                if (!empty($price) && !empty($date)) {
                                    $result = $finalPrice->calculateCartCheckout();

                                    echo "<h5 class='text-primary'>Product price: <span class='text-black'>+" . $price ."
                                    </span></h5> <h5 class='text-primary'>Shipping price: <span class='text-black'>+" . $result[0] ."
                                    </span></h5><h5 class='text-primary'>Tax: <span class='text-black'>+" . $result[1] ."
                                    </span></h5><h5 class='text-primary'>Discount: <span class='text-black'>-" . $result[2] ."
                                    </span></h5><hr><h5 class='text-primary'>Total: <span class='text-black'>" . $result[3] ."
                                    </span></h5>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/buildingManagment.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>formHandling/urlRedirect.php" class="text-white">
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