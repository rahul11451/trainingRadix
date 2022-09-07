<?php
include("../../header.php");

$paths = '/php/';
if (isset($_POST['submit'])) {
    $errorName = $errorAssembly = $errorNumber = '';
    $name = $_POST['name'];
    $fireNumber = $_POST['fireNumber'];
    $assembly = $_POST['assembly'];

    if (empty($name)) {
        $errorName = 'Please enter Building Name';
    } else {
        if (!is_string($fireNumber)) {
            $errorName = 'Please enter string only';
        }
    }
    if (empty($fireNumber)) {
        $errorNumber = 'Please enter Fire Extinguisher';
    } else {
        if(!is_numeric($fireNumber)){
            $errorNumber = 'Number only';
        }
    }
    if(empty($assembly)){
        $errorAssembly = 'Please enter value';
    } else {
        if(!is_numeric($assembly)){
            $errorAssembly = 'Number only';
        }
    }
    if (!empty($name) && !empty($fireNumber) && !empty($assembly)) {
        $building = new Building($name);
        $building->setFireExtinguisher($fireNumber);
        $building->setAssemblyPoint($assembly);
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
                    Building Management.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                        <label for="" class="text-primary">
                                Building Name: <input class="form-control border-primary rounded" type="text" name="name" placeholder="Enter Your Building Name" <?php if (isset($name)) {
                                                                            echo "value='$name'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($name)) {
                                                                echo $errorName;
                                                            } ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Fire Extinguisher: <input class="form-control border-primary rounded" type="text" name="fireNumber" placeholder="Enter Number of Fire Extinguisher" <?php if (isset($fireNumber)) {
                                                                            echo "value='$fireNumber'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($name)) {
                                                                echo $errorNumber;
                                                            } ?></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                Assembly Point: <input class="form-control border-primary rounded" type="text" name="assembly" placeholder="Enter Number of Assembly point" <?php if (isset($assembly)) {
                                                                            echo "value='$assembly'";
                                                                        } ?>>
                                <span class="text-danger"><?php if (isset($assembly)) {
                                                                echo $errorAssembly;
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
                                if (!empty($name) && !empty($fireNumber) && !empty($assembly)) {
                                    $result = $building->displayStatastics();
                                    echo "<h5 class='text-primary'>";
                                    foreach($result as $key=>$value){
                                        switch($key){
                                            case 0:
                                                echo "Building Name: <span class='text-black p'>".$value."</span><br>";
                                                break;
                                            case 1:
                                                echo "No. of Fire extinguisher: <span class='text-black p'>". $value ."</span><br>";
                                                break;
                                            case 2:
                                                echo "No. of Assembly points: <span class='text-black p'>". $value."</span><br>";
                                        }                                     }
                                    echo "</h5>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/areaCalculator.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/finalPrice.php" class="text-white">
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