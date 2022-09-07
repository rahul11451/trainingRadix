<?php
session_start();
include("../../header.php");
$sessionData = $_SESSION['email'];
if(!isset($sessionData)){
    header('Location: login.php');
} 



if(isset($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
}

$products = array(
    'product1' => array(
        'id' => 1,
        'image' => '/Images/products/titanRaga.jpeg',
        'name' => 'Titan Raga',
        'price' => 5035
    ),
    'product2' => array(
        'id' => 2,
        'image' => '/Images/products/titanAnimalia.jpeg',
        'name' => 'Titan Animalia',
        'price' => 9115
    ),
    'product3' => array(
        'id' => 3,
        'image' => '/Images/products/titanMomento.jpeg',
        'name' => 'Titan Momento',
        'price' => 3595
    ),
    'product4' => array(
        'id' => 4,
        'image' => '/Images/products/jokerAndWitch.jpeg',
        'name' => 'Joker and Witch',
        'price' => 1999
    ),
    'product5' => array(
        'id' => 5,
        'image' => '/Images/products/crystalLakeWatch.jpeg',
        'name' => 'Crystal Lake Watch',
        'price' => 19530
    ),
    'product6' => array(
        'id' => 6,
        'image' => '/Images/products/anthracite.jpeg',
        'name' => 'Titan Raga Anthracite',
        'price' => 8395
    ),
    'product7' => array(
        'id' => 7,
        'image' => '/Images/products/cocktails.jpeg',
        'name' => 'Cocktails from Raga Titan',
        'price' => 13995
    ),
    'product8' => array(
        'id' => 8,
        'image' => '/Images/products/crystalRose.jpeg',
        'name' => 'Crystal Rose Watch',
        'price' => 31000
    ),
    'product9' => array(
        'id' => 9,
        'image' => '/Images/products/rado.jpeg',
        'name' => 'Rado Centrix',
        'price' => 122800,
    )
);

$_SESSION['productArray'] = $products;
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($_SESSION['productArray']);echo '</pre>'; die();

if($_POST['action'] == 'checkButton'){
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    $informationData = json_decode(file_get_contents("files/information.json"),true);
    $informationData[$sessionData]['cartDetail'][$productId] = $quantity;
    $information = json_encode($informationData);
    file_put_contents("files/information.json",$information);
    exit;
}

if($_POST['action'] == 'checkAll'){
    $productId = $_POST['productIdAll'];
    $informationData = json_decode(file_get_contents("files/information.json"),true);
    foreach($productId as $key => $value){
        $informationData[$sessionData]['cartDetail'][$key] = $value;
    }
    $information = json_encode($informationData);
    file_put_contents("files/information.json",$information);
    exit;
}

foreach ($products as $productId => $array) {
    $result .= '<div class="col productBox" >
    <div class="card" style="width: 22rem;">
        <img src="' . SITE_URL.$products[$productId]['image'] . ' " class="card-img-top img-fluid" alt="watch">
        <div class="card-body">
            <h4 class="card-title text-primary">' . $products[$productId]['name'] . '</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item h6"> Price: <span class ="h5 text-primary">' . $products[$productId]['price'] . ' Rs</span></li>
                <li class="list-group-item h6" id="cartParent">Add to cart: 
                    <div class="d-flex justify-content-between" >
                        <div class="form-check mt-2 cart">
                            <input class="cart1  form-check-input" type="checkbox" name="cart" value="'.$products[$productId]['id'].'"  id="'.$productId.'">
                            <label class="form-label text-primary text-center pt-1" for="'.$productId.'">Add Me</label>
                        </div>
                        
                        <div class="">
                            <input type="button" class="btn btn-outline-primary px-3 rounded-right addToCart" id="pid_'.$productId.'" value="Add To Cart" >
                        </div>
                    </div>
                </li>
                <li class="list-group-item" id="nensi">Quantity: 
                    <div class="input-group mb-3 w-50 nen1">
                        <div class="input-group-prepend sub">
                            <input type="button" class="btn btn-outline-primary px-3 rounded-left " type="button" value ="-">
                        </div>
                        <input type="text" class="form-control bg-primary border-primary text-center text-white fw-bold qValue" value="1" id="value'.$productId.'" >
                        <div class="input-group-append addition">
                            <input type="button" class="btn btn-outline-primary px-3 rounded-right" value="+" >
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>';
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
                    Product Details
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between me-5">
                        <div class="form-check mt-2 h3 mb-4">
                            <input class="form-check-input" type="checkbox" name="cartAll" id="cartAll" value="cartAll">
                            <label class="form-label text-primary text-center pt-1" for="cartAll">Add All</label>
                        </div>
                        
                        <div class="me-5 d-flex">
                        <div class="me-3">
                            <input type="button" class="btn btn-outline-primary px-3 rounded-right addToAll" value="Add To Cart" >
                        </div>
                        

                            <a href="cart.php" class="text-decoration-none"><button class="h5 btn btn-outline-primary px-4"> <span class="fa fa-cart-shopping"></span>Cart
                            </button></a>
                            <form method="POST" class="ms-3">
                                    <input type="submit" value="LogOut" class="btn btn-success px-5 fw-bold logout" name="logout">
                                </form>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <?php
                        echo $result;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../ajax/product.js"></script>

<?php
include("../../footer.php");
?>