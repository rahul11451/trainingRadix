<?php
session_start();
include '../../model/ServiceProvider.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: '.SITE_URL.'/view/login.php');
}

$id = $_GET['id'];

$providerObj = new ServiceProvider();

$services = $providerObj->select('service_details');
// editing form
if (isset($id)) {
    $editAr = $providerObj->select('service_provider', '*', array('nId' => array($id, '=')));
    
    $checkData = $providerObj->join('SELECT service_details.*, business_details.nProviderId FROM business_details', 'service_details', array('business_details.nServiceDetailId' => array('service_details.nId', '=')), array('business_details.nProviderId' => array($id, '=')));
    
    $smallPicUrl = '../../images/' . $id . '/smallPhoto/' . $editAr[0]['sSmPic'];
    $largePicUrl = '../../images/' . $id . '/largePhoto/' . $editAr[0]['sLgPic'];

    $smallPhotoImg = '<img src="' . NENSI . '/' . $id . '/smallPhoto/' . $editAr[0]['sSmPic'] . '" alt="" width="200" height="120" class="mb-1">';
    $largePhotoImg = '<img src="' . NENSI . '/' . $id . '/largePhoto/' . $editAr[0]['sLgPic'] . '" alt="" width="200" height="120" class="mb-1">';
}

foreach ($services as $key => $value) {
    $check .= '<div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="' . $services[$key]['nId'] . '" value="' . $services[$key]['nId'] . '" name="service[]"' ?>
    <?php
    if (isset($id)) {
        foreach ($checkData as $keys => $value) {
            if ($checkData[$keys]['nId'] == $services[$key]['nId']) {
                $check .= 'checked';
            }
        }
    }
    ?>
    <?php
    $check .= '>
        <label class="form-check-label" for="' . $services[$key]['nId'] . '">' . $services[$key]['sServiceName'] . '</label>
    </div>';
}


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phoneNumber'];
$status = $_POST['switch'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$smPic = $_FILES['smPic']['name'];
$lgPic = $_FILES['lgPic']['name'];
$checked = $_POST['service'];
$createdDate = date('Y-m-d');
$modifiedDate = date('Y-m-d');

if ($status == 'on') {
    $status = '1';
} else {
    $status = '0';
}

// validate
function validate($name, $number, $address, $city, $pincode, $smPic, $lgPic, $checked)
{

    if (empty($name)) {
        $erName = 'Business Name is required';
    } else {
        $erName = '';
    }

    if (empty($number)) {
        $erNo = 'Mobile Number is Required';
    } else {
        $erNo = '';
    }

    if (empty($address)) {
        $erAdd = 'Address is Required';
    } else {
        $erAdd = '';
    }

    if (empty($city)) {
        $erCity = 'City is Required';
    } else {
        $erCity = '';
    }

    if (empty($pincode)) {
        $erPin = 'Pincode is Required';
    } else {
        $erPin = '';
    }

    if (empty($smPic)) {
        $erSmPic = 'Thumbnai is Required';
    } else if ($_FILES['smPic']['size'] > 40960) {
        $erSmPic = 'Photo size is must be less than 40KB';
    } else {
        $erSmPic = '';
    }

    if (empty($lgPic)) {
        $erLgPic = 'Banner is Required';
    } else {
        $erLgPic = '';
    }

    if (empty($checked)) {
        $erService = 'Service is Required';
    } else {
        $erService = '';
    }

    return array($erName, $erNo, $erAdd, $erCity, $erPin, $erSmPic, $erLgPic, $erService);
}

// photo upload

function smallPhotoUpload($photoId, $smPic)
{
    chmod('../../images', 0777);
    mkdir('../../images/' . $photoId, 0777, true);
    chmod('../../images/' . $photoId . '/', 0777);
    chmod('../../images/' . $photoId . '/', 0777);
    mkdir('../../images/' . $photoId . '/smallPhoto/', 0777, true);

    // small picture source
    $smPicSource = $_FILES['smPic']['tmp_name'];

    // small picture destination
    $smPicDesti = '../../images/' . $photoId . '/smallPhoto/' . $smPic;

    copy($smPicSource, $smPicDesti);
}

function largePhotoUpload($photoId, $lgPic)
{
    chmod('../../images', 0777);
    mkdir('../../images/' . $photoId, 0777, true);
    chmod('../../images/' . $photoId . '/', 0777);
    chmod('../../images/' . $photoId . '/', 0777);
    mkdir('../../images/' . $photoId . '/largePhoto/', 0777, true);

    // large picture source
    $lgPicSource = $_FILES['lgPic']['tmp_name'];

    // large picture destination
    $lgPicDesti = '../../images/' . $photoId . '/largePhoto/' . $lgPic;

    copy($lgPicSource, $lgPicDesti);
}


// adding data after click on save button
if (isset($_POST['saveProvider'])) {

    $error = validate($name, $number, $address, $city, $pincode, $smPic, $lgPic, $checked);

    $erName = $error[0];
    $erNo = $error[1];
    $erAdd = $error[2];
    $erCity = $error[3];
    $erPin = $error[4];
    $erService = $error[7];

    if ($erName == '' && $erNo == '' && $erAdd == '' && $erCity == '' && $erPin == '' && $erService == '') {
        $erSmPic = $error[5];
        $erLgPic = $error[6];
        if ($erSmPic == '' && $erLgPic == '') {

            $results = $providerObj->providerInsert($name,  $email, $number, $status, $address, $city, $pincode, $smPic, $lgPic, $checked, $createdDate, $modifiedDate);

            $result = $results[0];
            $photoId = $results[1];

            smallPhotoUpload($photoId, $smPic);
            largePhotoUpload($photoId, $lgPic);

            $result = ' <script>
                        swal({
                            title: "Good job!",
                            text: "'.$result.'",
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: "bg-dark"
                                }
                            }
                        });
                    </script>';
        }
    }
}

// adding data after click on save and back button
if (isset($_POST['save&back'])) {
    $error = validate($name, $number, $address, $city, $pincode, $smPic, $lgPic, $checked);

    $erName = $error[0];
    $erNo = $error[1];
    $erAdd = $error[2];
    $erCity = $error[3];
    $erPin = $error[4];
    $erService = $error[7];

    if ($erName == '' && $erNo == '' && $erAdd == '' && $erCity == '' && $erPin == '' && $erSmPic == '' && $erLgPic == '' && $erService == '') {
        if (isset($id)) {
            if (empty($smPic)) {
                $smPic = $editAr[0]['sSmPic'];
            } else {
                unlink($smallPicUrl);
                smallPhotoUpload($id, $smPic);
            }

            if (empty($lgPic)) {
                $lgPic = $editAr[0]['sLgPic'];
            } else {
                unlink($largePicUrl);
                largePhotoUpload($id, $lgPic);
            }
            $result = $providerObj->providerEdit($name,  $email, $number, $status, $address, $city, $pincode, $smPic, $lgPic, $checked, $modifiedDate, $id);

            header('Location: providerList.php');
        } else {

            $erSmPic = $error[5];
            $erLgPic = $error[6];
            if ($erSmPic == '' && $erLgPic == '') {
                $results = $providerObj->providerInsert($name,  $email, $number, $status, $address, $city, $pincode, $smPic, $lgPic, $checked, $createdDate, $modifiedDate);

                $result = $results[0];
                $photoId = $results[1];

                smallPhotoUpload($photoId, $smPic);
                largePhotoUpload($photoId, $lgPic);

                header('Location: index.php');
            }
        }
    }
}
