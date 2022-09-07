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

if ($_POST['action'] == 'saveButton') {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    $informationData[$sessionData]['cartDetail'][$productId] = $quantity;
    $information = json_encode($informationData);
    file_put_contents("files/information.json", $information);
    exit;
}

if ($_POST['action'] == 'deleteButton') {
    $productId = $_POST['productId'];
    unset($informationData[$sessionData]['cartDetail'][$productId]);
    $information = json_encode($informationData);
    file_put_contents("files/information.json", $information);
    exit;
}

if (isset($_POST['deleteAll'])) {
    $informationData[$sessionData]['cartDetail'] = [];
    $information = json_encode($informationData);
    file_put_contents("files/information.json", $information);
    header('Location: cart.php');
    exit;
}

if (isset($_POST['checkout'])) {
    foreach ($informationData[$sessionData]['cartDetail'] as $key => $value) {
        foreach ($products as $productId => $array) {
            if ($key == $productId) {
                $informationData[$sessionData]['orderDetail'][$key] = $array;
                $informationData[$sessionData]['orderDetail'][$key]['qty'] = $value;
            }
        }
    }
    $informationData[$sessionData]['cartDetail'] = [];
    $information = json_encode($informationData);
    file_put_contents("files/information.json", $information);
    header('Location: checkout.php');
}

foreach ($informationData[$sessionData]['cartDetail'] as $key => $value) {
    foreach ($products as $productId => $array) {
        if ($key == $productId) {
            $result .= '
                        <div class="card border-primary parent" id="' . $productId . '">
                            <div class="card-header border-primary d-flex justify-content-between">
                                <div>' . $array['name'] . '</div>
                                <div>
                                    <input type="button" value="save" class="btn btn-outline-primary px-5 fw-bold save">
                                    <input type="button" value="delete" class="btn btn-outline-primary px-5 fw-bold delete">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="' . SITE_URL . $array['image'] . '" class="img-fluid mt-2 ms-2" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $array['name'] . '</h5>

                                        <p class="card-text">Price: <span>' . $array['price'] . ' Rs</span></p>

                                        <p class="card-text">Total Price: <span>' . $array['price'] * $value . ' Rs</span></p>
                                
                                        <p class="card-text">Quantity: <span> ' . $value . ' </span></p>
                                
                                        <div class="input-group mb-3 w-25 nen1">
                                    
                                            <div class="input-group-prepend sub">
                                                <input type="button" class="btn btn-outline-primary px-3 rounded-left " type="button" value ="-">
                                            </div>
                                    
                                            <input type="text" class="form-control bg-primary border-primary text-center text-white fw-bold qValue" value="' . $value . '" id="value' . $productId . '" >
                                    
                                            <div class="input-group-append addition">
                                        
                                                <input type="button" class="btn btn-outline-primary px-3 rounded-right" value="+" >
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <br>';
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
                    Cart Details
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="">
                            <a href="product.php" class="h4">Back</a>
                        </div>
                        <div class="">
                            <form method="POST" class="">
                                <input type="submit" value="Place Order" class="btn btn-primary px-5 fw-bold checkout d-none" name="checkout">
                                <input type="submit" value="Delete Cart" class="btn btn-primary px-5 fw-bold d-none delete" name='deleteAll'>
                                <input type="submit" value="LogOut" class="btn btn-success px-5 fw-bold logout" name="logout">
                            </form>
                        </div>
                    </div>

                    <p class="message text-center h5 text-primary"></p>
                    <?php
                    echo $result;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../ajax/cart.js"></script>

<?php
include("../../footer.php");
?>