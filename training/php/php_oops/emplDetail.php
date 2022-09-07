<?php
include("../../header.php");
include("class.php");
$paths = '/php/';
$errorFname = $errorLname = $errorEmail = $errorPhno = $errorBdate = $errorGender ='';
$fName = $lName = $email = $phNo = $bDate = $gender = $result = '';
if (isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phNo = $_POST['number'];
    $bDate = $_POST['birthDate'];
    $gender = $_POST['gender'];

    if (empty($fName) || !is_string($fName)) {
        $errorFname = 'Please enter first name';
    }
    if (empty($lName) || !is_string($lName)) {
        $errorLname = 'Please enter last name';
    }
    if (empty($email) || !preg_match('/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9-_]+\.+[a-zA-Z]{2,5}$/',$email)) {
        $errorEmail = 'Please enter valid email';
    }
    if (empty($phNo) || !preg_match('/[0-9]{10}/',$phNo)) {
        $errorPhno = 'Please enter valid mobile number';
    }
    if (empty($bDate)) {
        $errorBdate = 'Please enter birthdate';
    }
    if (empty($gender)) {
        $errorGender = 'Please select gender';
    }
    if (!empty($fName) && !empty($lName) && !empty($email) && !empty($phNo) && !empty($bDate) && !empty($gender)){
        $detail = new Employee();
        $detail->setValueFirstName($fName);
        $detail->setValueLastName($lName);
        $detail->setValueEmail($email);
        $detail->setValuePhoneNumber($phNo);
        $detail->setValueBirthDate($bDate);
        $detail->setValueGender($gender);
        $result = $detail->getEmployeeDetails();
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
                    Create a form which get above properties input from user and when user submit it, display employee information. 
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="d-flex justify-content-between">
                        <form action="" method="POST">
                            <label for="" class="text-primary">
                                First name: <input class="form-control border-primary" type="text" name="fName" placeholder="First Name" class="border border-primary rounded" <?php echo "value='$fName'"; ?>>
                                <span class="text-danger"><?php echo $errorFname; ?></span>
                            </label>
                            <br>
                            <br>
                            <label for="" class="text-primary">
                                Last name: <input class="form-control border-primary" type="text" name="lName" placeholder="Last Name" class="border border-primary rounded" <?php echo "value='$lName'"; ?>>
                                <span class="text-danger"><?php echo $errorLname; ?></span></span>
                            </label>
                            <br><br>
                            <label for="" class="text-primary">
                                Email: <input class="form-control border-primary" type="email" name="email" placeholder="Email Id" class="border border-primary rounded" <?php echo "value='$email'"; ?>>
                                <span class="text-danger"><?php echo $errorEmail; ?></span>
                            </label><br><br>
                            <label for="" class="text-primary">
                                Telephone Number: <input class="form-control border-primary" type="tel" name="number" placeholder="Phone number" class="border border-primary rounded" <?php echo "value='$phNo'"; ?>>
                                <span class="text-danger"><?php echo $errorPhno; ?></span></span>
                            </label><br><br>
                            <label for="" class="text-primary">
                                Birthdate: <input class="form-control border-primary" type="date" name="birthDate" <?php echo "value='$bDate'"; ?>>
                                <span class="text-danger"><?php echo $errorBdate; ?></span>
                            </label><br><br>
                            <label for="" class="text-primary">
                                Gender: 
                                <span class="text-danger"><?php echo $errorGender; ?></span>
                            </label><br>
                            <label for="" class="">
                                Male: <input type="radio" name="gender" value="male" class="me-3 border border-primary form-check-input" <?php if($gender=='male') {echo 'checked';} ?> required>
                            </label>
                            <label for="" class="">
                                Female: <input type="radio" name="gender" value="female" class="me-3 border border-primary form-check-input" <?php if($gender=='female') {echo 'checked';} ?> >
                            </label>
                            <label for="" class="">
                                Other: <input type="radio" name="gender" value="other" class="me-3 border border-primary form-check-input" <?php if($gender=='other') {echo 'checked';} ?> >
                            </label>
                            <br><br>
                            <label for="" class="">
                                <input type="submit" class="btn-outline-primary btn" name="submit" value="click me to show all values">
                            </label>
                        </form>
                        <div class="">
                            <?php
                                if (isset($_POST['submit'])) {
                                    if (!empty($fName) && !empty($lName) && !empty($email) && !empty($phNo) && !empty($bDate) && !empty($gender)){
                                        echo '<h4 class="text-primary">The Result is: </h4><table class="table">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email Id</th>
                                            <th>Phone Number</th>
                                            <th>Birth Date</th>
                                            <th>Gender</th>
                                        </tr>
                                        <tr>'?>
                                            <?php foreach ($result as $value){
                                                echo '<td>'.$value.'</td>';
                                            }?>
                                        <?php 
                                            echo '</tr> </table>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>functions/storeAndSortArray.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>php_oops/mobileDetails.php" class="text-white">
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