<?php
session_start();
include("../../header.php");
$sessionData = $_SESSION['email'];
if (!isset($sessionData)) {
    header('Location: login.php');
}


if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}

$products = $_SESSION['productArray'];
$informationData = json_decode(file_get_contents("files/information.json"), true);

foreach ($informationData[$sessionData]['orderDetail'] as $key => $value) {
    $result .= '
                        <div class="card border-primary parent" id="' . $productId . '">
                            <div class="card-header border-primary">
                                <div>' . $value['name'] . '</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="' . SITE_URL . $value['image'] . '" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $value['name'] . '</h5>

                                        <p class="card-text">Total Price: <span>' . $value['price'] * $value['qty'] . ' Rs</span></p>
                                
                                        <p class="card-text">Quantity: <span> ' . $value['qty'] . ' </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <br>';
}

foreach($informationData[$sessionData]['orderDetail'] as $key => $value){
    $total += $value['price']*$value['qty'];
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
                    Checkout
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="">
                            <a href="product.php" class="h4">Home</a>
                        </div>
                        <div class="">
                            <form action="" method="post">
                                <input type="submit" value="LogOut" class="btn btn-success px-5 fw-bold logout" name="logout">
                            </form>
                        </div>
                    </div>
                    <?php
                    echo $result;
                    ?>
                    <div class="">
                        <h5 class="">Total Price: <span class=""><?php echo $total; ?></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../ajax/cart.js"></script>

<?php
include("../../footer.php");
?>