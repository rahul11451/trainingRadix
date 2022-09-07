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
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Script using switch case
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <label for="" class="text-primary">Choose Number:
                            <select name="num" id="" class="border border-primary rounded px-3 form-select">
                                <option <?php if($_POST['num'] == 'choose') { echo "selected"; } ?>  value="choose">choose value</option>
                                <option <?php if($_POST['num'] == 0) { echo "selected"; } ?> value="0">0</option>
                                <option <?php if($_POST['num'] == 1) { echo "selected"; } ?> value="1">1</option>
                                <option <?php if($_POST['num'] == 2) { echo "selected"; } ?> value="2">2</option>
                                <option <?php if($_POST['num'] == 3) { echo "selected"; } ?>  value="3">3</option>
                                <option <?php if($_POST['num'] == 4) { echo "selected"; } ?>  value="4">4</option>
                            </select>
                        </label>
                        <br>
                        <br>
                        <label for="" class="text-primary">
                            Name: <input type="text" class="form-control border-primary" name="name" placeholder="Name" class="border border-primary rounded" <?php $name=$_POST['name']; echo "value='$name'"; ?> required>
                            <span class="text-danger"><?php if($_SERVER['REQUEST_METHOD'] == "POST"){ if(empty($_POST['name'])){echo 'enter number';} }?></span>
                        </label>
                        <br>
                        <br>
                        <button type="submit" class="btn-outline-primary btn"> click me</button>
                    </form>
                    <?php

                    $num1 = $name;
                    $num1 = $_POST["num"];
                    $name = $_POST["name"];
                    operation($num1, $name);
                    function operation($num1, $name)
                    {
                        switch ($num1) {
                            case '0':
                                $result = ' " welcome" ' . $name;
                                break;
                            case '1':
                                $result = 'How are you ' . $name . '?';
                                break;
                            case '2':
                                $result = 'I am doing well, Thank you';
                                break;
                            case '3':
                                $result = 'Have a nice day';
                                break;
                            case '4':
                                $result = 'Good Bye';
                                break;
                            default:
                                $result = "choose number and enter name";
                                break;
                        }
                        echo '<h3 class="mb-5 text-center "><span class="text-decoration-underline text-primary">The answer is: </span>' . $result .  '</h3>';
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/calculater.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>phpBasics/currency.html" class="text-white">
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