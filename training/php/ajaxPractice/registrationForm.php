<?php
session_start();
$paths = '/php/';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    if(empty($name)){
        $nameError = 'Name is Required';
    }
    if(empty($email)){
        $emailError = 'Email is Required';
    }
    if(empty($number)){
        $numberError = 'Number is Required';
    }
    if(empty($password)){
        $passError = 'Password is Required';
    }
    if(empty($rePassword)){
        $repassError = 'Password is empty';
    }
    if($password != $rePassword){
        $repassError = 'Password is not matched';
    }
    if(!empty($name) && !empty($email) && !empty($number) && !empty($password) && !empty($rePassword)){
        $data = array('personDetail'=> array('Name'=>$name, 
        'Email'=>$email,
        'Number'=>$number,
        'Password'=>$password),
        'cartDetail' => array(),
        'orderDetail' => array());
        $informationArray = array($email => $data);
        $information = json_encode($informationArray);
        $informationData = json_decode(file_get_contents("files/information.json"),true);
        $informationData[$email] = $data;
        $information = json_encode($informationData);
        file_put_contents("files/information.json",$information);
        header('Location: login.php');
        exit;
    }
}

include("../../header.php");
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
                <div class="m-lg-5 m-2 screen">
                    <form class="mx-1 mx-md-4" method="POST">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                <span class="text-danger" id="nameErr"><?php echo $nameError; ?></span>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                <span class="text-danger" id="emailErr"><?php echo $emailError; ?></span>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="tel" id="number" name="number" class="form-control" placeholder="Contact Number">
                                <span class="text-danger" id="numberErr"><?php echo $numberError; ?></span>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                <span class="text-danger" id="passErr"><?php echo $passError; ?></span>
                            </div>
                        </div>
                        

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="rePassword" name="rePassword" class="form-control" placeholder="Reenter Password">
                                <span class="text-danger" id="rePassErr"><?php echo $repassError; ?></span>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" name="register" value="Register" class="btn btn-primary btn-lg me-4" id="register">

                            <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
                        </div>

                        <div class="text-center">
                            <p>Already a member? <a href="login.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>sessionAndCookie/websiteSurvey.php" class="text-white">
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