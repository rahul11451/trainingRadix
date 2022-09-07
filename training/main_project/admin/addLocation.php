<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

include('../classpath.php');

// object created
$dataAdd = new HotelLocation();

// edit form
$location_id = $_REQUEST['id'];

$dataSelected = $dataAdd->select('hotel_location', '*', array('hotel_location_id' => array($location_id, '=')));
$locationAdd = $dataSelected[0]['location'];
$city = $dataSelected[0]['city'];
$state = $dataSelected[0]['state'];
$status = $dataSelected[0]['status'];
$number = $dataSelected[0]['sort_order'];
$created_date = $dataSelected[0]['created_date'];
$modified_date = $dataSelected[0]['modified_date'];

if (isset($location_id)) {
    $heading = 'Edit Location';
} else {
    $heading = 'Add Location';
}

// insert Logic
if (isset($_POST['saveLocation'])) {
    $locationAdd = $_POST['location'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $status = $_POST['switch'];
    $number = $_POST['sort'];
    $created_date = date('Y-m-d');
    $modified_date = date('Y-m-d');

    if ($status == 'on') {
        $status = '1';
    } else {
        $status = '0';
    }

    if (empty($locationAdd)) {
        $erLoc = 'Location is Required';
    } else {
        $erLoc = '';
    }
    if (empty($city)) {
        $erCity = 'City is Required';
    } else {
        $erCity = '';
    }
    if (empty($state)) {
        $erState = 'State is Required';
    } else {
        $erState = '';
    }
    if (empty($number)) {
        $erNumber = 'Number is Required';
    } else if (is_int($number)) {
        $erNumber = 'Sort Number must be an integer';
    } else {
        $erNumber = '';
    }

    if ($erLoc == '' && $erCity == '' && $erState == '' && $erNumber == '') {

        if (isset($location_id)) {

            $result = $dataAdd->update('hotel_location', array('location' => $locationAdd, 'city' => $city, 'state' => $state, 'status' => $status, 'modified_date' => $modified_date, 'sort_order' => $number), array('hotel_location_id' => array($location_id, '=')));
            header('Location:locationManage.php');
        } else {

            // insert data
            $result = $dataAdd->insert('hotel_location', array('location' => $locationAdd, 'city' => $city, 'state' => $state, 'status' => $status, 'created_date' => $created_date, 'modified_date' => $modified_date, 'sort_order' => $number));
        }
    }
}




include('mainHeader.php');
?>

<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("mainSidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-2 column10">

            <!-- Success Message -->
            <h1 class=" text-decoration-underline text-center mess"><?php echo $result; ?></h1>

            <div class="d-flex justify-content-between  mt-3">
                <!-- heading -->
                <div class="h1 py-2 mx-5">
                    <h1 class="modal-title"><?php echo $heading; ?></h1>
                </div>
                <div class=" py-2 mx-5">
                    <a href="locationManage.php" class="btn btn-primary px-5">BACK</a>
                </div>
            </div>

            <!-- Data Add Part - Form -->
            <div class="p-5 bg-white bg-opacity-75 rounded mx-5 fw-bolder">
                <form method="POST" id="addLocationForm">

                    <div class="form-group mb-3">
                        <label for="title" class='h4'>Hotel Location <span class="text-danger">*</span></label>
                        <input type="text" name="location" id="" placeholder="Location" class="form-control border border-dark border-1" value="<?php if (isset($location_id)) { echo $locationAdd; } ?>">
                        <span class="text-danger"><?php echo $erLoc; ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="city" class='h4'>City <span class="text-danger">*</span></label>
                        <input type="text" name="city" id="" placeholder="City" class="form-control border border-dark border-1" value="<?php if (isset($location_id)) { echo $city; } ?>">
                        <span class="text-danger"><?php echo $erCity; ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="state" class='h4'>State <span class="text-danger">*</span></label>
                        <input type="text" name="state" id="" placeholder="State" class="form-control border border-dark border-1" value="<?php if (isset($location_id)) { echo $state; } ?>">
                        <span class="text-danger"><?php echo $erState; ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="state" class='h4'>Sort Order <span class="text-danger">*</span></label>
                        <input type="number" name="sort" id="" placeholder="Sort Number" class="form-control border border-dark border-1" value="<?php if (isset($location_id)) { echo $number; } ?>">
                        <span class="text-danger"><?php echo $erNumber; ?></span>
                    </div>
                    <div class="form-group mb-3 h4 d-flex">
                        <label class="" class='h4'>Status</label>
                        <div class="flex-fill mb-0 form-check form-switch ">
                            <input class="form-check-input h2 ms-1" name="switch" type="checkbox" <?php if (isset($location_id)) {
                                                                                                        if ($status == '1') {
                                                                                                            echo 'checked';
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo 'checked';
                                                                                                    } ?>>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                        <input type="submit" value="Save Changes" class="btn btn-primary saveLoc" name="saveLocation">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../js/locationManage.js"></script>
<script src="../js/validation.js"></script>

<?php
include('../mainFooter.php');
?>