<?php
session_start();
include('../classpath.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

$hotelData = new Hotel();
$hotel_edit_id = $_REQUEST['id'];


if (isset($hotel_edit_id)) {
    $heading = 'Edit Hotel';
} else {
    $heading = 'Add Hotel';
}

// dropdown

$drop = $hotelData->select('hotel_location', '*', array(), 'ORDER BY sort_order ASC');

foreach ($drop as $key => $value) {
    $dropResult .= '<option value="' . $drop[$key]['hotel_location_id'] . '" ' ?>
    <?php if ($location == $drop[$key]['hotel_location_id']) {
        $dropResult .= 'selected';
    } ?> <?php $dropResult .= ' >' . $drop[$key]['location'] . '</option>';
        }


        // edit data

        // select hotel data
        $editData = $hotelData->select('hotel', '*', array('hotel_id' => array($hotel_edit_id, '=')));

        // select location data
        $locDatas = $hotelData->select('hotel_location', '*', array('hotel_location_id' => array($editData[0]['hotel_location_id'], '=')));

        // selected values
        $title = $editData[0]['hotel_title'];
        $location = $locDatas[0]['location'];
        $city = $locDatas[0]['city'];
        $state = $locDatas[0]['state'];
        $smDesc = $editData[0]['short_desc'];
        $lgDesc = $editData[0]['long_desc'];
        $noRoom = $editData[0]['no_of_room'];
        $roomType = $editData[0]['room_type'];
        $smPic = $editData[0]['small_pic'];
        $lgPic = $editData[0]['large_pic'];
        $starVal = $editData[0]['hotel_star'];
        $status = $editData[0]['status'];
        $regiDate = $editData[0]['hotel_regi_date'];
        $modifiedDate = date('Y-m-d');
        $smPicUrl = '../main_images/' . $hotel_edit_id . '/' . $smPic;
        $lgPicUrl = '../main_images/' . $hotel_edit_id . '/' . $lgPic;

        // show photo in edit form

        if (isset($hotel_edit_id)) {
            $smallImg = '<img src="' . $smPicUrl . '" alt="smallPic" width="150" height="120" class="mb-2">';
            $largeImg = '<img src="' . $lgPicUrl . '" alt="largePic" width="150" height="120" class="mb-2">';
        }


        // insertion

        if (isset($_POST['saveHotel'])) {
            $title = $_POST['title'];
            $location = $_POST['location'];
            $smDesc = $_POST['smDesc'];
            $lgDesc = $_POST['lgDesc'];
            $noRoom = $_POST['noRoom'];
            $roomType = $_POST['roomType'];
            $starVal = $_POST['starVal'];
            $status = $_POST['switch'];
            $regiDate = $_POST['regiDate'];
            $createdDate = date('Y-m-d');
            $modifiedDate = date('Y-m-d');


            // status value set
            if ($status == 'on') {
                $status = '1';
            } else {
                $status = '0';
            }

            // small pic variable
            if (empty($_FILES['smPic']['tmp_name'])) {
                $smPic = $smPic;
            } else {
                $smPic = $_FILES['smPic']['name'];
                $smPicTmp = $_FILES['smPic']['tmp_name']; 
            }

            // large pic variable

            if (empty($_FILES['lgPic']['tmp_name'])) {
                $lgPic = $lgPic;
            } else {
                $lgPic = $_FILES['lgPic']['name'];
                $lgPicTmp = $_FILES['lgPic']['tmp_name'];
            }


            // validation

            if (empty($title)) {
                $erTitle = 'Hotel Name is required';
            } else {
                $erTitle = '';
            }
            if (empty($location)) {
                $erLoc = 'Hotel Location is required';
            } else {
                $erLoc = '';
            }
            if (empty($starVal)) {
                $erStar = 'Hotel Rating is required';
            } else {
                $erStar = '';
            }
            if (empty($smDesc)) {
                $erSortDesc = "Description is must";
            } else {
                $erSortDesc = '';
            }
            if (empty($smPic)) {
                $erSmPic = 'Small Picture is rerquired';
            } else if($_FILES['smPic']['size'] > 71680){
                $erSmPic = 'Photo must be less than or equal to 70 KB';
            } else {
                $erSmPic = '';
            }
            if (empty($lgPic)) {
                $erLgPic = 'Large Picture is required';
            } else if($_FILES['lgPic']['size'] > 	2097152){
                $erLgPic = 'Photo must be less than or equal to 2 MB';
            }  else {
                $erLgPic = '';
            }


            if ($erTitle == '' && $erLoc == '' && $erStar == '' && $erSortDesc == '') {

                // location data select
                // $locData = $hotelData -> select('hotel_location','hotel_location_id, status',array('location'=> array($location,'=','AND'), 'city'=> array($city,'=','AND'), 'state'=> array($state,'=')));


                $insertionData = array(
                    'hotel_location_id' => $location,
                    'hotel_title' => $title,
                    'short_desc' => $smDesc,
                    'long_desc' => $lgDesc,
                    'small_pic' => $smPic,
                    'large_pic' => $lgPic,
                    'no_of_room' => $noRoom,
                    'room_type' => $roomType,
                    'hotel_star' => $starVal,
                    'hotel_regi_date' => $regiDate,
                    'created_date' => $createdDate,
                    'modified_date' => $modifiedDate,
                    'status' => $status
                );


                if (isset($hotel_edit_id)) {

                    // small picture source
                    $smPicSource = $smPicTmp;

                    // small picture destination
                    $smPicDesti = '../main_images/' . $hotel_edit_id . '/' . $smPic;

                    // large picture source
                    $lgPicSource = $lgPicTmp;

                    // large picture destination
                    $lgPicDesti = '../main_images/' . $hotel_edit_id . '/' . $lgPic;

                    // unlink photo and added

                    if (!empty($smPicTmp)) {
                        unlink($smPicUrl);
                        copy($smPicSource, $smPicDesti);
                    }

                    if (!empty($lgPicTmp)) {
                        unlink($lgPicUrl);
                        copy($lgPicSource, $lgPicDesti);
                    }

                    // update function

                    $result = $hotelData->update('hotel', array(
                        'hotel_location_id' => $location,
                        'hotel_title' => $title,
                        'short_desc' => $smDesc,
                        'long_desc' => $lgDesc,
                        'small_pic' => $smPic,
                        'large_pic' => $lgPic,
                        'no_of_room' => $noRoom,
                        'room_type' => $roomType,
                        'hotel_star' => $starVal,
                        'hotel_regi_date' => $regiDate,
                        'modified_date' => $modifiedDate,
                        'status' => $status
                    ), array('hotel_id' => array($hotel_edit_id, '=')));

                    header('Location:hotelManage.php');
                } else {
                    if ($erSmPic == '' && $erLgPic == '') {

                        $result = $hotelData->insert('hotel', $insertionData);

                        $id = $hotelData->select('hotel', 'hotel_id', array('hotel_title' => array($title, '=')));
                        $id = $id[0][0];


                        chmod('../main_images', 0777);
                        mkdir('../main_images/' . $id, 0777, true);
                        chmod('../main_images/' . $id . '/', 0777);

                        // small picture source
                        $smPicSource = $smPicTmp;

                        // small picture destination
                        $smPicDesti = '../main_images/' . $id . '/' . $smPic;

                        // large picture source
                        $lgPicSource = $lgPicTmp;

                        // large picture destination
                        $lgPicDesti = '../main_images/' . $id . '/' . $lgPic;


                        copy($smPicSource, $smPicDesti);

                        copy($lgPicSource, $lgPicDesti);

                        // header('Location: hotelManage.php');
                    }
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
                    <a href="hotelManage.php" class="btn btn-primary px-5">BACK</a>
                </div>
            </div>


            <!-- Data Add Part - Form -->
            <div class="p-5 bg-white bg-opacity-75 rounded fw-bolder">
                <form method="POST" enctype="multipart/form-data" id="addHotelForm">
                    <div class="row mb-4">
                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Hotel Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="" placeholder="Hotel Title" class="form-control border border-dark border-1" value="<?php if (isset($hotel_edit_id)) { echo $title; } ?>">
                            <span class="text-danger"><?php echo $erTitle; ?></span>
                        </div>

                        <div class="col-6 form-group">
                            <label for="" class='h4'>Hotel Registration Date </label>
                            <input type="date" name="regiDate" id="" class="form-control border border-dark border-1" value="<?php if (isset($hotel_edit_id)) { echo $regiDate; } ?>">
                        </div>
                    </div>
                    <div class="row mb-4">

                        <div class="col form-group">
                            <label for="titl" class='h4'>Location <span class="text-danger">*</span></label>
                            <select name="location" id="" class="form-select">
                                <?php echo $dropResult; ?>
                            </select>
                            <span class="text-danger"><?php echo $erLoc; ?></span>
                        </div>

                    </div>

                    <div class="row mb-4">

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Short Description <span class="text-danger">*</span></label>
                            <input type="text" name="smDesc" id="" placeholder="Short Description" class="form-control border border-dark border-1" value="<?php if (isset($hotel_edit_id)) { echo $smDesc; } ?>">
                            <span class="text-danger"><?php echo $erSortDesc; ?></span>
                        </div>

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Long Description</label>
                            <textarea name="lgDesc" id="" class="form-control form-control border border-dark border-1" rows="1" placeholder="Long Description"><?php if (isset($hotel_edit_id)) { echo $lgDesc; } ?></textarea>
                            <span class="text-danger"><?php echo $erLongDesc; ?></span>
                        </div>

                    </div>

                    <div class="row mb-4">

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Number Of Rooms</label>
                            <input type="text" name="noRoom" id="" placeholder="Number of Rooms" class="form-control border border-dark border-1" value="<?php if (isset($hotel_edit_id)) { echo $noRoom; } ?>">
                            <span class="text-danger"><?php echo $erNoRoom; ?></span>
                        </div>

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Room Type</label>
                            <select name="roomType" id="" class="form-control form-select border border-dark border-1">
                                <option value="single" <?php if (isset($hotel_edit_id)) { if ($roomType == 'single') {
                                                            echo 'selected';
                                                        } } ?>>Single</option>
                                <option value="double" <?php if (isset($hotel_edit_id)) { if ($roomType == 'double') {
                                                            echo 'selected';
                                                        } } ?>>Double</option>
                                <option value="triple" <?php if (isset($hotel_edit_id)) { if ($roomType == 'triple') {
                                                            echo 'selected';
                                                        } } ?>>Triple</option>
                                <option value="quad" <?php if (isset($hotel_edit_id)) { if ($roomType == 'quad') {
                                                            echo 'selected';
                                                         }} ?>>Quad</option>
                                <option value="queen" <?php if (isset($hotel_edit_id)) { if ($roomType == 'queen') {
                                                            echo 'selected';
                                                        } } ?>>Queen</option>
                                <option value="king" <?php if (isset($hotel_edit_id)) { if ($roomType == 'king') {
                                                            echo 'selected';
                                                         }} ?>>King</option>
                                <option value="twin" <?php if (isset($hotel_edit_id)) { if ($roomType == 'twin') {
                                                            echo 'selected';
                                                         }} ?>>Twin</option>
                            </select>
                            <span class="text-danger"><?php echo $erRoomType; ?></span>
                        </div>

                    </div>

                    <div class="row mb-4">

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Thumbnail Photo <span class="text-danger">*</span></label><br>
                            <?php echo $smallImg; ?>
                            <input type="file" name="smPic" id="" placeholder="Hotel Title" class="form-control border border-dark border-1">
                            <span class="text-danger"><?php echo $erSmPic; ?></span>
                        </div>

                        <div class="col-6 form-group">
                            <label for="titl" class='h4'>Large Photo <span class="text-danger">*</span></label><br>
                            <?php echo $largeImg; ?>
                            <input type="file" name="lgPic" id="" placeholder="Hotel Title" class="form-control border border-dark border-1">
                            <span class="text-danger"><?php echo $erLgPic; ?></span>
                        </div>

                    </div>

                    <div class="row mb-4 ">

                        <div class="col-6 form-group">
                            <label for="star" class='h4'>Hotel Star <span class="text-danger">*</span></label><br>
                            <input type="hidden" name="starVal" class="starVal" value="<?php if (isset($hotel_edit_id)) { echo $starVal; } ?>">
                            <span class="fa fa-star h2 star" id='1'></span>
                            <span class="fa fa-star h2 star" id='2'></span>
                            <span class="fa fa-star h2 star" id='3'></span>
                            <span class="fa fa-star h2 star" id='4'></span>
                            <span class="fa fa-star h2 star" id='5'></span><br>
                            <span class="text-danger stars"><?php echo $erStar; ?></span>
                        </div>

                        <div class="col-6 form-group">
                            <span class="me-3">Status: </span>
                            <div class="flex-fill mb-0 form-check form-switch ">
                                <input class="form-check-input h2 ms-1" name="switch" type="checkbox" id="flexSwitchCheckChecked" <?php if (isset($hotel_edit_id)) {
                                                                                                                                        if ($status == '1') {
                                                                                                                                            echo 'checked';
                                                                                                                                        }
                                                                                                                                    } else {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?>>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                        <input type="submit" value="Save Changes" class="btn btn-primary addHotelForm" name="saveHotel">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../js/addHotel.js"></script>
<script src="../js/validation.js"></script>
<?php
include('../mainFooter.php');
?>