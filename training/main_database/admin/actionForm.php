<?php
session_start();
include("headerAdmin.php");
include("../lib/ClassFile.php");

if (!isset($_SESSION['user_name'])) {
    header('Location: index.php');
}

$formDetails = new ClassFile();

// dropdown for city
$city = $formDetails->select('city');
foreach ($city as $key => $value) {
    $ci .= '<option value="' . $city[$key]['city_name'] . '" >' . $city[$key]['city_name'] . '</option>';
}

$state = $formDetails->select('state');
// dropdown for state
foreach ($state as $key => $value) {
    $st .= '<option value="' . $state[$key]['state_name'] . '">' . $state[$key]['state_name'] . '</option>';
}

// dropdown for country
$country = $formDetails->select('country');
foreach ($country as $key => $value) {
    $cou .= '<option value="' . $country[$key]['country_name'] . '">' . $country[$key]['country_name'] . '</option>';
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


if (isset($_POST['register'])) {

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
    if (empty($photo)) {
        $errorPhoto = 'Photo is Required';
    } else {
        $errorPhoto = '';
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
    if ($errorName == '' && $errorEmail == '' && $errorPassword == '' && $errorPhoto == '' && $errorDate == '' && $errorGender == '' && $errorAdd == '' && $errorCity == '' && $errorPin == '' && $errorNumber == '') {

        $city_id = $formDetails->select('city', 'city_id', array('city_name' => array($city, '=')));
        $city_id = $city_id[0][0];

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

        $formDetails->insert('employees', $details);

        $id = $formDetails->select('employees', 'emp_id', array('name' => array($name, '=')));
        $id = $id[0][0];
        $source = $_FILES['photo']['tmp_name'];
        $destination = '../images/' . $id . '/' . $photo;
        chmod('../images', 0777);
        mkdir('../images/' . $id, 0777, true);
        chmod('../images/' . $id . '/', 0777);
        move_uploaded_file($source, $destination);
        
        $success = '<h3 class="text-success text-center">Successfully Added Data</h3>';
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
                <h3 class="text-primary">Add Employee</h3>
                <div class=" screen">
                    <form class="" method="POST" enctype="multipart/form-data">
                        <div class=" mb-4">
                            <span class="me-3 text-primary">Name: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="">
                                <span class="text-danger" id="erName"><?php echo $errorName; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Email: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="">
                                <span class="text-danger" id="erEmail"><?php echo $errorEmail; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Password: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="">
                                <span class="text-danger" id="erPassword"><?php echo $errorPassword; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Photo: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="file" id="photo" name="photo" class="form-control" value="" accept="image/png, image/jpeg">
                                <span class="text-danger" id="erPhoto"><?php echo $errorPhoto; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Phone Number: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="tel" id="phone" name="phone" class="form-control" value="">
                                <span class="text-danger" id="erPhone"><?php echo $errorNumber; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Date of Birth: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="date" id="dob" name="dob" class="form-control" value="">
                                <span class="text-danger" id="erDate"><?php echo $errorDate; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Gender: </span><span id="erGender" class="errorGender text-danger"><?php echo $errorGender; ?> </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="radio" id="male" name="genderIn" class="form-check-input ms-3" value="m" class="gender" <?php if ($gender1 == 'M') { echo 'checked'; } ?>>
                                <label for="male"> Male </label>
                                <input type="radio" id="female" name="genderIn" class="form-check-input ms-3" value="f" class="gender" <?php if ($gender1 == 'F') { echo 'checked'; } ?>>
                                <label for="female"> Female </label>
                                <br>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Address: </span>
                            <div class="form-outline flex-fill mb-0">
                                <textarea class="form-control" name="address" id="address"></textarea>
                                <span class="text-danger" id="erAdd"><?php echo $errorAdd; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">City: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="city" class="form-select city" name="city" id="city">
                                    <option value="">--Cities--</option>
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
                                <input type="number" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="">
                                <span class="text-danger" id="erPin"><?php echo $errorPin; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">State: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="state" class="form-select" name="state">
                                    <option value="states">--States--</option>
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
                                    <option value="Country">--Country--</option>
                                    <?php
                                    echo $cou;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class=" mb-4 form-control">
                            <span class="me-3 text-primary">Status: </span>
                            <div class="flex-fill mb-0 form-check form-switch ">
                                <input class="form-check-input h4 m-1" name="switch" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <span class="text-danger" id="ageErr"><?php echo $ageError; ?></span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" name="register" value="Register" class="btn btn-primary btn-lg me-4" id="register">

                            <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="actionForm.js"></script>

<?php
include("../footerData.php");
?>