<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

include('../classpath.php');

$selectData = new HotelLocation();
$data = $selectData->select('hotel_location', '*', array(), 'ORDER BY sort_order ASC');

$result = $selectData->listingData($data);

// delete row

if ($_POST['action'] == 'delete') {
    $value = $_POST['data'];

    $error = $selectData->deleteData($value);
    echo $error;
    exit;
}

// update status

if ($_POST['action'] == 'statusUpdate') {
    $id = $_POST['statusid'];
    $statusValue = $_POST['statusResult'];

    $selectData->update('hotel_location', array('status' => $statusValue), array('hotel_location_id' => array($id, '=')));
    echo 'Data updated successfully';
    exit;
}

if (isset($_POST['add'])) {
    header('Location: addLocation.php');
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
                    <h1 class="modal-title">Location Management</h1>
                </div>
                <div class="py-2 mx-lg-5">
                    <form action="" method="post">
                        <input type="submit" name="add" class="btn btn-primary" value="ADD LOCATION">
                    </form>
                </div>
            </div>

            <!-- Listing part -->
            <div class="p-5 bg-white bg-opacity-75 rounded mx-lg-5 table-responsive">
                <form action="" class="nen" method="POST">

                    <?php
                    echo $result;
                    ?>

                </form>
            </div>
        </div>
    </div>
</div>


<script src="../js/locationManage.js"></script>

<?php
include('../mainFooter.php');
?>