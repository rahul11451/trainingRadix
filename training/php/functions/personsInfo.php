<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        for (var i = 1; i <= 5; i++) {
            $('#'.concat(i)).click(function() {
                $(this).hide();
            });
        }
    });
</script>
<?php
include("../../header.php");
include("function.php");
$paths = '/php/';

if (isset($_POST['submit'])) {
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];
    $name5 = $_POST['name5'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $date3 = $_POST['date3'];
    $date4 = $_POST['date4'];
    $date5 = $_POST['date5'];
    $count = 1;
    if (empty($name1)) {
        $errorName1 = 'Please enter name';
    }
    if (empty($name2)) {
        $errorName2 = 'Please enter name';
    }
    if (empty($name3)) {
        $errorName3 = 'Please enter name';
    }
    if (empty($name4)) {
        $errorName4 = 'Please enter name';
    }
    if (empty($name5)) {
        $errorName5 = 'Please enter name';
    }
    if (empty($date1)) {
        $errorDate1 = 'Please enter date';
    }
    if (empty($date2)) {
        $errorDate2 = 'Please enter date';
    }
    if (empty($date3)) {
        $errorDate3 = 'Please enter date';
    }
    if (empty($date4)) {
        $errorDate4 = 'Please enter date';
    }
    if (empty($date5)) {
        $errorDate5 = 'Please enter date';
    }
    if (!empty($name1) && !empty($name2) && !empty($name3) && !empty($name4) && !empty($name5) && !empty($date1) && !empty($date2) && !empty($date3) && !empty($date4) && !empty($date5)) {
        $nameArray = array();
        $dateArray = array();
        array_push($nameArray, $name1, $name2, $name3, $name4, $name5);
        array_push($dateArray, $date1, $date2, $date3, $date4, $date5);
        $age = findAge($dateArray);
        $table = '<table class="table">
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Delete</th>
        </tr>';
    }
}
?>

<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-3 column10">
            <div class="p-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">
                    Create one form which contains 5 person’s Name and birthdate of person.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form action="" method="POST">
                        <p>Person 1: </p>
                        <div class="d-flex justify-content-around w-50">
                            <label for="" class="text-primary">
                                Name: <input class="form-control border-primary" type="text" name="name1" placeholder="Name" class="border border-primary rounded" <?php if(isset($name1)){ echo "value='$name1'";} ?>>
                                <span class="text-danger"><?php if(isset($name1)){ echo $errorName1; } ?></span>
                            </label>
                            <label for="" class="text-primary">
                                BirthDate: <input class="form-control border-primary" type="date" name="date1" placeholder="Birth Date" class="border border-primary rounded" <?php if(isset($date1)){ echo "value='$date1'"; } ?>>
                                <span class="text-danger"><?php if(isset($date1)){ echo $errorDate1; } ?></span></span>
                            </label>
                        </div>
                        <br>
                        <p>Person 2: </p>
                        <div class="d-flex justify-content-around w-50">
                            <label for="" class="text-primary">
                                Name: <input class="form-control border-primary" type="text" name="name2" placeholder="Name" class="border border-primary rounded" <?php if(isset($name2)){ echo "value='$name2'"; } ?>>
                                <span class="text-danger"><?php if(isset($name2)){ echo $errorName2; } ?></span>
                            </label>
                            <label for="" class="text-primary">
                                BirthDate: <input class="form-control border-primary" type="date" name="date2" placeholder="Birth Date" class="border border-primary rounded" <?php if(isset($date2)){ echo "value='$date2'"; } ?>>
                                <span class="text-danger"><?php if(isset($date2)){ echo $errorDate2; } ?></span></span>
                            </label>
                        </div>
                        <br>
                        <p>Person 3: </p>
                        <div class="d-flex justify-content-around w-50">
                            <label for="" class="text-primary">
                                Name: <input class="form-control border-primary" type="text" name="name3" placeholder="Name" class="border border-primary rounded" <?php if(isset($name3)){ echo "value='$name3'"; } ?>>
                                <span class="text-danger"><?php if(isset($name3)){ echo $errorName3; } ?></span>
                            </label>
                            <label for="" class="text-primary">
                                BirthDate: <input class="form-control border-primary" type="date" name="date3" placeholder="Birth Date" class="border border-primary rounded" <?php if(isset($date3)){ echo "value='$date3'"; } ?>>
                                <span class="text-danger"><?php if(isset($date3)){ echo $errorDate3; } ?></span></span>
                            </label>
                        </div>
                        <br>
                        <p>Person 4: </p>
                        <div class="d-flex justify-content-around w-50">
                            <label for="" class="text-primary">
                                Name: <input class="form-control border-primary" type="text" name="name4" placeholder="Name" class="border border-primary rounded" <?php if(isset($name4)){ echo "value='$name4'"; } ?>>
                                <span class="text-danger"><?php if(isset($name4)){ echo $errorName4; } ?></span>
                            </label>
                            <label for="" class="text-primary">
                                BirthDate: <input class="form-control border-primary" type="date" name="date4" placeholder="Birth Date" class="border border-primary rounded" <?php if(isset($date4)){ echo "value='$date4'"; } ?>>
                                <span class="text-danger"><?php if(isset($date4)){ echo $errorDate4; } ?></span></span>
                            </label>
                        </div>
                        <br>
                        <p>Person 5: </p>
                        <div class="d-flex justify-content-around w-50">
                            <label for="" class="text-primary">
                                Name: <input class="form-control border-primary" type="text" name="name5" placeholder="Name" class="border border-primary rounded" <?php if(isset($name5)){ echo "value='$name5'"; } ?>>
                                <span class="text-danger"><?php if(isset($name5)){ echo $errorName5; } ?></span>
                            </label>
                            <label for="" class="text-primary">
                                BirthDate: <input class="form-control border-primary" type="date" name="date5" placeholder="Birth Date" class="border border-primary rounded" <?php if(isset($date5)){ echo "value='$date5'"; } ?>>
                                <span class="text-danger"><?php if(isset($date5)){ echo $errorDate5; } ?></span></span>
                            </label>
                        </div>
                        <br>
                        <input type="submit" class="btn-outline-primary btn form-control" name="submit" value="click me to show result">
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        if (!empty($name1) && !empty($name2) && !empty($name3) && !empty($name4) && !empty($name5) && !empty($date1) && !empty($date2) && !empty($date3) && !empty($date4) && !empty($date5)) {
                            echo '<br>' . $table;
                            echo nameArray($nameArray, $age);
                            echo '</table>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/multiArrayToSingleArray.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/storeAndSortArray.php" class="text-white">
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