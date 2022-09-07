<?php
include("../../header.php");
$paths = '/php/';
$serverName = '192.168.101.86';
$userName = 'root';
$password = 'deep70';
$database = 'nensi_darji';
$data = new Operation($serverName, $userName, $password, $database);

if(isset($_POST['insert']) || isset($_POST['update']) || isset($_POST['delete']) || isset($_POST['select']))
{
    $table = $_POST['table'];
    $col = $_POST['col'];
    $value = $_POST['value'];
    $condition = $_POST['condition'];
    $array = array_combine( explode(",",$col) , explode(",", $value));

    if(empty($table)){
        $errorTable = 'Enter table Name';
    }
    if(empty($col)){
        $errorCol = 'Enter Column Name';
    }
    if(empty($value)){
        $errorValue = 'Enter Value';
    }
    if(empty($condition)){
        $errorCon = 'Enter Condition';
    }

    if(!empty($table) && !empty($col) && !empty($value) && !empty($condition)){
        if(isset($_POST['insert'])){
            $result = $data->insert($table, $array);
        }
        if(isset($_POST['update'])){
            $result = $data -> update($table, $array, $condition);
        }
        if(isset($_POST['delete'])){
            $result = $data -> delete($table, $condition);
        }
        if(isset($_POST['select'])){
            $result = $data -> select($table, array($col), $condition);
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
                    Trial Data
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                            <label for="" class="text-primary">
                                Table Name: <input class="form-control border-primary" type="text" name="table" placeholder="Table Name" class="border border-primary rounded" <?php echo "value='$table'"; ?>>
                                <span class="text-danger"><?php echo $errorTable; ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Field Name: <input class="form-control border-primary" type="text" name="col" placeholder="Column Name" class="border border-primary rounded" <?php echo "value='$col'"; ?>>
                                <span class="text-danger"><?php echo $errorCol; ?></span></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                values: <input class="form-control border-primary" type="text" name="value" placeholder="Values" class="border border-primary rounded" <?php echo "value='$value'"; ?>>
                                <span class="text-danger"><?php echo $errorValue; ?></span>
                            </label><br><br>

                            <label for="" class="text-primary">
                                condition: <input class="form-control border-primary" type="text" name="condition" placeholder="Condition" class="border border-primary rounded" <?php echo "value='$condition'"; ?>>
                                <span class="text-danger"><?php echo $errorCon; ?></span></span>
                            </label>
                            <br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-primary btn" name="insert" value="Insert">
                            </label>
                            <label for="" class="">
                                <input type="submit" class="btn-success btn" name="update" value="Update">
                            </label>
                            <label for="" class="">
                                <input type="submit" class="btn-warning btn" name="delete" value="Delete">
                            </label>
                            <label for="" class="">
                                <input type="submit" class="btn-danger btn" name="select" value="Select">
                            </label>
                        </form>
                        <div class="">
                            <h5 class="">
                                <?php 
                                    echo $result;
                                ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/registrationForm.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>database/studentRegistration.php" class="text-white">
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