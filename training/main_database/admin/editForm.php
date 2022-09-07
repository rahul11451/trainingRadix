<?php
session_start();
include("headerAdmin.php");
include("../lib/ClassFile.php");

if (!isset($_SESSION['user_name'])) {
    header('Location: index.php');
}

$formDetails = new ClassFile();

$id = $_SESSION['id'];


$idResult = $formDetails->select('employees', '*', array('emp_id' => array($id, '=')));

$name = $idResult[0]['name'];
$email = $idResult[0]['email'];
$password = $idResult[0]['password'];
$pict = $idResult[0]['profile_pic'];
$number = $idResult[0]['phone_number'];
$dob = $idResult[0]['birth_date'];
$gender = $idResult[0]['gender'];
$add = $idResult[0]['street_address'];
$city = $idResult[0]['city'];
$pin = $idResult[0]['postcode'];
$stateId = $idResult[0]['state'];
$countryId = $idResult[0]['country'];
$status = $idResult[0]['status'];
//$pic = SITE_URL .'main_database/images/'.$id .'/'.$pic;
$pic = '../images/' . $id . '/' . $pict;

// join query
$cityNames = $formDetails->join();
foreach ($cityNames as $key => $value) {
    if ($cityNames[$key]['city_id'] == $idResult[0]['city']) {
        $city = $cityNames[$key]['city_name'];
        $state = $cityNames[$key]['state_name'];
        $country = $cityNames[$key]['country_name'];
    }
}

// dropdown for city
$cityDrop = $formDetails->select('city');
foreach ($cityDrop as $key => $value) {
    $ci .= '<option value="' . $cityDrop[$key]['city_name'] . '" ' ?>
    <?php
    if ($cityDrop[$key]['city_name'] == $city) {
        $ci .= 'selected';
    }
    ?>
<?php $ci .= '>' . $cityDrop[$key]['city_name'] . '</option>';
}

$state = $formDetails->select('state');
// dropdown for state
foreach ($state as $key => $value) {
    $st .= '<option value="' . $state[$key]['state_id'] . '" ' ?>
    <?php
    if ($state[$key]['state_id'] == $stateId) {
        $st .= 'selected';
    }
    ?>
<?php $st .= '>' . $state[$key]['state_name'] . '</option>';
}

// dropdown for country
$country = $formDetails->select('country');
foreach ($country as $key => $value) {
    $cou .= '<option value="' . $country[$key]['country_id'] . '" ' ?>
    <?php
    if ($country[$key]['country_id'] == $countryId) {
        $cou .= 'selected';
    }
    ?>
<?php $cou .= '>' . $country[$key]['country_name'] . '</option>';
}

if ($_POST['action'] == 'citySelect') {
    $citySelect = $_POST['city'];
    $state_id = $formDetails->select('city', 'state_id', array('city_name' => array($citySelect, '=')));


    $state = $formDetails->select('state', 'state_name', array('state_id' => array($state_id[0][0], '=')));
    // dropdown for state
    foreach ($state as $key => $value) {
        $stateSelect = $state[$key]['state_name'];
        $st = '<option value="' . $state_id[0][0] . '">' . $state[$key]['state_name'] . '</option>';
    }


    $country_id = $formDetails->select('state', 'country_id', array('state_name' => array($stateSelect, '=')));

    $country = $formDetails->select('country', 'country_name', array('country_id' => array($country_id[0][0], '=')));

    // dropdown for state
    foreach ($country as $key => $value) {
        $cou = '<option value="' . $country_id[0][0] . '">' . $country[$key]['country_name'] . '</option>';
    }
    echo $st . ',' . $cou;
    exit;
}

if (isset($_POST['Update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $photo = $_FILES['photo']['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['genderIn'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pincode'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $switch = $_POST['switch'];
    $number = $_POST['phone'];
    $regi_date = date('Y-m-d H:i:s');
    if ($switch == 'on') {
        $switch = '1';
    } else {
        $switch = '0';
    }


    if (empty($name)) {
        $errorName = 'Name is Required';
    } else if(!preg_match('/[a-z]/i',$name)){
        $errorName = 'Only String is allow';
    } else {
        $errorName = '';
    }
    if (empty($email)) {
        $errorEmail = 'Email is Required';
    } else if(!preg_match('/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/',$email)){
        $errorEmail = 'Please Enter valid Email';
    } else {
        $errorEmail = '';
    }
    if (empty($password)) {
        $errorPassword = 'Password is Required';
    } else {
        $errorPassword = '';
    }
    if (empty($dob)) {
        $errorDate = 'Date is Required';
    } else{
        $errorDate = '';
    }
    if (empty($_POST['genderIn'])) {
        $errorGender = 'Gender is Required';
    } else {
        $errorGender = '';
    }
    if (empty($add)) {
        $errorAdd = 'Address is Required';
    } else {
        $errorAdd = '';
    }
    if (empty($city)) {
        $errorCity = 'City is Required';
    } else {
        $errorCity = '';
    }
    if (empty($pin)) {
        $errorPin = 'Pin is Required';
    } else if(!preg_match('/^[0-9]{6}$/',$pin)){
        $errorPin = "pin Must be 6 digit number";
    } else {
        $errorPin = '';
    }
    if (empty($number)) {
        $errorNumber = 'Number is Required';
    } else if(!preg_match('/^[7-9][0-9]{9}$/',$number)){
        $errorNumber = 'Number Must be 10 digit number';
    } else {
        $errorNumber = '';
    }
    if ($errorName == '' && $errorEmail == '' && $errorPassword == '' && $errorDate == '' && $errorGender == '' && $errorAdd == '' && $errorCity == '' && $errorPin == '' && $errorNumber == '') {

        $city_id = $formDetails->select('city', 'city_id', array('city_name' => array($city, '=')));
        $city_id = $city_id[0][0];


        $ids = $formDetails->select('employees', 'emp_id', array('name' => array($name, '=')));
        $ids = $ids[0][0];
        if(empty($_FILES['photo']['tmp_name'])){
            $photo = $pict;
        } else {
            $source = $_FILES['photo']['tmp_name'];
            $destination = '../images/' . $ids . '/' . $photo;
            unlink($pic);
            copy($source, $destination);
        }

        $details = array(
            'name' => $name,
            'gender' => $gender,
            'email' => $email,
            'street_address' => $add,
            'postcode' => $pin,
            'phone_number' => $number,
            'birth_date' => $dob,
            'profile_pic' => $photo,
            'register_date' => $regi_date,
            'status' => $switch,
            'password' => $password,
            'city' => $city_id,
            'state' => $state,
            'country' => $country
        );

        $formDetails->update('employees', $details, array('emp_id' => array($id, '=')));

        header('Location: editForm.php');

        $success = '<h3 class="text-success text-center">Successfully Updated Data</h3>';
    } else {
        $success = '<h3 class="text-danger text-center">Opps Have Some problem </h3>';
    }
}
?>


<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebarData.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-2 column10">
            <div class="p-md-5 bg-white border border-primary">
            <?php echo $success; ?>
                <h3 class="text-primary">Edit Employee</h3>
                <div class=" screen">
                    <form class="" method="POST" enctype="multipart/form-data">
                        <div class=" mb-4">
                            <span class="me-3 text-primary">Name: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $name; ?>">
                                <span class="text-danger" id="erName"><?php echo $errorName; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Email: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                                <span class="text-danger" id="erEmail"><?php echo $errorEmail; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Password: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
                                <span class="text-danger" id="erPassword"><?php echo $errorPassword; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Photo: </span>
                            <div class="form-outline flex-fill mb-0">
                                <img src="<?php echo $pic; ?>" alt="" class="" width='200'>
                                <input type="file" id="photo" name="photo" class="mt-3 form-control" value="">
                                <span class="text-danger" id="erPhoto"><?php echo $errorPhoto; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Phone Number: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo $number; ?>">
                                <span class="text-danger" id="erPhone"><?php echo $errorNumber; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Date of Birth: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $dob; ?>">
                                <span class="text-danger" id="erDate"><?php echo $errorDate; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Gender: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="radio" id="male" name="genderIn" class="form-check-input ms-3" value="M" class="gender" <?php if ($gender == 'M') { echo 'checked'; } ?>>
                                <label for="male"> Male </label>
                                <input type="radio" id="female" name="genderIn" class="form-check-input ms-3" value="F" class="gender" <?php if ($gender == 'F') { echo 'checked'; } ?>>
                                <label for="female"> Female </label>
                                <br><span id="erGender" class="errorGender text-danger"><?php echo $errorGender; ?> </span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Address: </span>
                            <div class="form-outline flex-fill mb-0">
                                <textarea class="form-control" name="address" id="address"><?php echo $add; ?></textarea>
                                <span class="text-danger" id="erAdd"><?php echo $errorAdd; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">City: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="city" class="form-select city" name="city">
                                    <?php
                                    echo $ci;
                                    ?>
                                </select>
                                <span class="text-danger" id="erCity"><?php echo $errorCity; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Pincode: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="number" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="<?php echo $pin; ?>">
                                <span class="text-danger" id="erPin"><?php echo $errorPin; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">State: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="state" class="form-select" name="state">
                                    <?php
                                    echo $st;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Country: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="country" class="form-select country" name="country">
                                    <?php
                                    echo $cou;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class=" mb-4 form-control">
                            <span class="me-3 text-primary">Status: </span>
                            <div class="flex-fill mb-0 form-check form-switch ">
                                <input class="form-check-input h4 m-1" name="switch" type="checkbox" id="flexSwitchCheckChecked" <?php if ($status == '1') { echo 'checked'; } ?>>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" name="Update" value="Update" class="btn btn-success btn-lg me-4" id="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="editForm.js"></script>
<?php
include("../footerData.php");
?>