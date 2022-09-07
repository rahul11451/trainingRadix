<?php
include("../../header.php");
$paths = '/php/';

$serverName = '192.168.101.86';
$userName = 'root';
$password = 'deep70';
$database = 'nensi_darji';

$data = new Operation($serverName, $userName, $password, $database);

$selectResult = $data->select('student_department' , array('department_id','department_name'));

$de_id = '';



if(isset($_POST['register'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['genderIn'];
    $department = $_POST['department'];

    if(empty($firstName)){
        $fnameError = 'Please enter first name';
    } 
    if(empty($lastName)){
        $lnameError = 'Please enter last name';
    }
    if(empty($age)){
        $ageError = 'please enter your age';
    }
    if(empty($address)){
        $addError = 'Your address please';
    }
    if(empty($pincode)){
        $pinError = 'Your city\'s pin?';
    } else if(is_integer($pincode)){
        $pinError = 'Pin should be digit only';
    }else if(!preg_match('/[0-9]{6}/', $pincode)){
        $pinError = 'Pin should be 6 digit';
    } else {
        $pinError = '';
    }
    if(!empty($firstName) && !empty($lastName) && !empty($age) && !empty($address) && $pinError = ' '){
        
        $data->insert('student_address', array('address' => $address, 'pincode' => $pincode));

        $ids = $data -> select('student_address');
        if ($ids->num_rows > 0) {
            // output data of each row
            while($row = $ids->fetch_assoc()) {
                $id =$row['address_id'];
                $add = $row['address'];
                $pin = $row['pincode'];
            }
          }


        $personsDetail = array(
            'firstname' => $firstName,
            'lastname' => $lastName,
            'age' => $age,
            'gender' => $gender,
            'address_id' => $id,
            'department_id' => $department);
        $nen = $data-> insert('student_details', $personsDetail); 

        $detail = $data -> select('student_details');
        if ($detail->num_rows > 0) {
            // output data of each row
            while($row = $detail->fetch_assoc()) {
                $fName =$row['firstname'];
                $lName = $row['lastname'];
                $gender1 = $row['gender'];
                $age1 = $row['age'];
                $de_id = $row['department_id'];
            }
          }

    }
}

if ($selectResult->num_rows > 0) {
    // output data of each row
    while($row = $selectResult->fetch_assoc()) {
        $options .= '<option value="'.$row['department_id'].'" name="department"' ?> 
        <?php if($de_id == $row['department_id']) {
            $options .= 'selected '; }?>
         <?php $options .= '>'.$row['department_name'].'</option>';
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
                    Registration Form
                </h4>
                <h5 class="text-success text-center">
                    <?php
                        echo $nen;
                    ?>
                </h5>
                <div class="m-lg-5 m-2 screen">
                    <form class="mx-1 mx-md-4 px-md-4 form-control py-4" method="POST">

                        <div class=" mb-4">
                            <span class="me-3 text-primary">First Name: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" value="<?php echo $fName; ?>">
                                <span class="text-danger" id="fnameErr"><?php echo $fnameError; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Last Name: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" value="<?php echo $lName; ?>">
                                <span class="text-danger" id="lnameErr"><?php echo $lnameError; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Department: </span>
                            <div class="form-outline flex-fill mb-0">
                                <select id="department" class="form-select" name="department">
                                    <?php
                                        echo $options;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Gender: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="radio" id="male" name="genderIn" class="form-check-input ms-3" value="m" class="gender" <?php if($gender1 == 'm') { echo 'checked' ;} ?> > 
                                <label for="male"> Male </label>
                                <input type="radio" id="female" name="genderIn" class="form-check-input ms-3" value="f"  class="gender" <?php if($gender1 == 'f') { echo 'checked' ;} ?> >
                                <label for="female"> Female </label>
                                <input type="radio" id="other" name="genderIn" class="form-check-input ms-3" value="o" class="gender" <?php if($gender1 == 'o') { echo 'checked' ;} ?> > 
                                <label for="other"> Other </label>
                                <br><span class="errorGender text-danger"><?php echo $errorGender; ?> </span>
                            </div>
                        </div>
                        

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Age: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="number" id="age" name="age" class="form-control" placeholder="Age" value="<?php echo $age1; ?>" >
                                <span class="text-danger" id="ageErr"><?php echo $ageError; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Address: </span>
                            <div class="form-outline flex-fill mb-0">
                                <textarea class="form-control" name="address" id="address"><?php echo $add; ?></textarea>
                                <span class="text-danger" id="addErr"><?php echo $addError; ?></span>
                            </div>
                        </div>

                        <div class=" mb-4">
                            <span class="me-3 text-primary">Pincode: </span>
                            <div class="form-outline flex-fill mb-0">
                                <input type="number" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="<?php echo $pin; ?>" >
                                <span class="text-danger" id="pinErr"><?php echo $pinError; ?></span>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" name="register" value="Register" class="btn btn-primary btn-lg me-4" id="register">

                            <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>database/trialData.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>database/trialData.php" class="text-white">
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