<?php
include("../../header.php");
include("class.php");
$paths = '/php/';
if (isset($_POST['submit'])) {
    $errorType = $errorScreen =$errorRam = $errorProcessor = '';
    $companyName = $_POST['companyName'];
    $ram = $_POST['ram'];
    $screenSize = $_POST['screenSize'];
    $processor = $_POST['processor'];

    if (empty($companyName)) {
        $errorType = 'Please select mobile company';
    }
    if (empty($screenSize) || !is_numeric($screenSize)) {
        $errorScreen = 'Please enter valid screen size';
    }
    if (empty($ram)) {
        $errorRam = 'Please enter Ram size';
    }
    if (empty($processor)) {
        $errorProcessor = 'Please enter processor number';
    }
    if(!empty($companyName) && !empty($screenSize) && !empty($ram) && !empty($processor))
    {
        $price = new MobilePrice($companyName, (int)$screenSize, $ram, $processor);
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
                    Build a class and store the data of the mobile phones with screen size, ram, company and processor along with Constructor and function to estimate cost of phone based on conditions
                </h4>
                <div class="m-lg-5 m-2 screen">
                        <form action="" method="POST">
                            <label for="" class="text-primary">
                                Mobile company: 
                                <select name="companyName" id="" class="border-primary form-select text-primary">
                                    <option value="samsung" class="" <?php if (isset($companyName) && $companyName == 'samsung') {
                                                                            echo 'selected';
                                                                        } ?>>Samsung</option>
                                    <option value="moto" class="" <?php if (isset($companyName) && $companyName == 'moto') {
                                                                                echo 'selected';
                                                                            } ?>>Moto</option>
                                    <option value="lenovo" class="" <?php if (isset($companyName) && $companyName == 'lenovo') {
                                                                                echo 'selected';
                                                                            } ?>>Lenovo</option>
                                    <option value="nokia" class="" <?php if (isset($companyName) && $companyName == 'nokia') {
                                                                            echo 'selected';
                                                                        } ?>>Nokia</option>
                                </select>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Screen Size: <input class="form-control border-primary" type="text" name="screenSize" placeholder="Enter Screen Size" class="border border-primary rounded" <?php if(isset($screenSize)){echo "value='$screenSize'";} ?>>
                                <span class="text-danger"><?php if(isset($screenSize)){echo $errorScreen;} ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                RAM Size: <input class="form-control border-primary" type="number" name="ram" placeholder="Enter RAM" class="border border-primary rounded" <?php if(isset($ram)){echo "value='$ram'";} ?>>
                                <span class="text-danger"><?php if(isset($ram)){echo $errorRam;} ?></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                processor: <input class="form-control border-primary" type="number" name="processor" placeholder="Enter processor" class="border border-primary rounded" <?php if(isset($processor)){echo "value='$processor'";} ?>>
                                <span class="text-danger"><?php if(isset($processor)){echo $errorProcessor;} ?></span>
                            </label>
                            <br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="Price of the mobile">
                            </label>
                        </form>
                        <br>
                        <br>
                        <?php
                            if (isset($_POST['submit'])) {
                                if(!empty($companyName) && !empty($screenSize) && !empty($ram) && !empty($processor))
                                {
                                    echo '<h4 class="text-primary text-center">The price of '.
                                    $companyName.' is: <span class="text-black">'.$price->getPrice().'</span></h4>';
                                }
                            }
                        ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/emplDetail.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/bankAccountDetail.php" class="text-white">
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