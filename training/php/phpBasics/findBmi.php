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
                    Result of bmi
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <?php
                    $weight = $_POST['weight'];
                    $intWeight = (int)$weight;
                    $height = $_POST['height'];
                    $floatHeight = (float)$height;
                    if (preg_match('/[.]/',$height) && !preg_match(('/[.]/'),$weight)) {
                        if(strlen($weight) <= 3 && strlen($height)<=5){
                            calculation($intWeight, $floatHeight);
                        }
                        else{
                            echo '<h3 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black"> Please enter max 3 length of weight and max 4 length of height.</h3>';
                        }
                    } else {
                        echo '<h3 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black"> Please enter float value of height and integer value of weight.</h3>';
                    }
                    function calculation($intWeight, $floatHeight)
                    {
                        $result =  $intWeight / ($floatHeight ** 2);
                        echo '<h3 class="mb-5 text-center text-primary"><span class="text-decoration-underline text-black"> BMI of weight ' . $intWeight . ' and height ' . $floatHeight . ' is: </span>' . $result .  '</h3>';
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/currency.html" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/pictureVerification.php" class="text-white">
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