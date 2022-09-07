<?php
session_start();

include('../classpath.php');
include('../filepath.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}



if (isset($_POST['add'])) {
    unset($_SESSION['location_id']);
    header('Location: addHotel.php');
}


$hotelData = new Hotel();

// listing data
$data = $hotelData->select('hotel');
$results = $hotelData->hotelInsertion($data);

$optionState = $hotelData->select('hotel_location', 'DISTINCT state');
$optionCity = $hotelData->select('hotel_location', 'DISTINCT city');
$optionLoc = $hotelData->select('hotel_location', 'DISTINCT location');
foreach($optionState as $key => $value){
    $state .= '<option value="'.$optionState[$key]['state'].'">'.$optionState[$key]['state'].'</option>';
}

foreach($optionCity as $key => $value){
    $city .= '<option value="'.$optionCity[$key]['city'].'">'.$optionCity[$key]['city'].'</option>';
}

foreach($optionLoc as $key => $value){
    $location .= '<option value="'.$optionLoc[$key]['location'].'">'.$optionLoc[$key]['location'].'</option>';
}

// serach

if ($_POST['action'] == 'stateSelect') {
    $stateSelect = $_POST['state'];
    $opData = $hotelData->select('hotel_location', 'DISTINCT city', array('state' => array($stateSelect, '=')));
    $opDatas = $hotelData->select('hotel_location', 'DISTINCT location', array('state' => array($stateSelect, '=')));

    if(empty($opData)){
        $cities = '<option value="">-- City --</option>';
    } else { 
        $cities = '<option value="">-- City --</option>';
        foreach($opData as $key => $value){
            $cities .= '<option value="'.$opData[$key]['city'].'">'.$opData[$key]['city'].'</option>';
        }
    }

    if(empty($opData)){
        $locations = '<option value="">-- Location --</option>';
    } else { 
        $locations = '<option value="">-- Location --</option>';
        foreach($opDatas as $key => $value){
            $locations .= '<option value="'.$opDatas[$key]['location'].'">'.$opDatas[$key]['location'].'</option>';
        }
    }

    echo $cities .','. $locations;
    exit;

}

if ($_POST['action'] == 'searchData') {
    $states = $_POST['state'];
    $city = $_POST['city'];
    $location = $_POST['location'];

    if(empty($states)){
        $results = $hotelData->select('hotel');
    } else {
        $id = $hotelData->select('hotel_location','hotel_location_id', array('city' => array($city, '=', 'AND'), 'state' => array($states, '=', 'AND'), 'location' => array($location,'=')));

        $results = $hotelData -> select('hotel','*', array('hotel_location_id' => array($id[0]['hotel_location_id'], '=')));
    }
    
        if (!empty($results)) {
            $result = $hotelData->hotelInsertion($results);
        } else {
            $result = '<h1 class="text-danger text-center"> Upps, Not matched any data. </h1>';
        }

    echo $result;
    exit;

}

// delete

if ($_POST['action'] == 'delete') {
    $value = $_POST['data'];

    $hotelData->deleteData($value);


    exit;
}


// edit

if ($_POST['action'] == 'edit') {

    $id_value = $_POST['data_edit'];
    echo $id_value;
    header('Location: addLocation.php?id = ' . $id_value);
    // $_SESSION['hotel_id'] = $id_value;

    exit;
}

// update status

if ($_POST['action'] == 'statusUpdate') {
    $stateId = $_POST['statusid'];
    $statusValue = $_POST['statusResult'];

    $hotelData->update('hotel', array('status' => $statusValue), array('hotel_id' => array($stateId, '=')));
    echo 'Data updated successfully';
    exit;
}

include('mainHeader.php');
?>

<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("mainSidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-2 column10">
            <!-- Add location button -->
            <div class="d-lg-flex justify-content-between mt-3">
                <!-- heading -->
                <div class="h1 py-2 mx-lg-5">
                    <h1 class="modal-title">Hotel Management</h1>
                </div>
                <div class="py-2 mx-lg-5">
                    <form action="" method="post">
                        <input type="submit" name="add" class="btn btn-primary" value="ADD HOTEL">
                    </form>
                </div>
            </div>

            <!-- Listing part -->
            <div class="p-5 bg-white bg-opacity-75 rounded mx-lg-5 table-responsive">
                <form action="" class="nen " method="POST">
                    <div class="d-flex">
                        <select name="" id="state" class="form-select state">
                            <option value="">-- State --</option>
                            <?php echo $state; ?>
                        </select>

                        <select name="" id="city" class="form-select city">
                            <option value="">-- City --</option>
                        </select>

                        <select name="" id="loc" class="form-select loc">
                            <option value="">-- Location --</option>
                        </select>
                    </div>

                    <div class="" id="datas">
                        <?php
                           echo $results;
                        ?> 
                           
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<script src="../js/hotelManagement.js"></script>

<?php
include('../mainFooter.php');
?>