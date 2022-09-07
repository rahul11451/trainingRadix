<?php
session_start();
if(isset($_SESSION['email'])){
    header('Location: product.php');
}
$paths = '/php/';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data =  json_decode(file_get_contents("files/information.json"), true);
    
    if (!empty($data[$email])) {


        if ($data[$email]['personDetail']['Password'] == $password) {
            $result = 'You are successfully loged in';
            if(isset($_POST['check'])){
                setcookie('userName', $email, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/");
            }
            $_SESSION['email'] = $email;
            header('Location: product.php');
            exit;
        }else{
            $result = 'Your Password is incorrect';

        }
    
    } else {
        $result = "sorry your email id is not matched";
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
                    Login Form
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <form method="POST">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control" placeholder="email" value="<?php if(isset($_COOKIE)) {
                                echo $_COOKIE['userName'];
                            } ?>">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" placeholder="password" value="<?php if(isset($_COOKIE)) {
                                echo $_COOKIE['password'];
                            } ?>">
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="check" id="remember" value="remember" placeholder="Remember me">
                                    <label class="form-label text-primary">Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg" id="login">
                        <br><br>

                        <h5 class="">
                            <?php
                                echo $result; 
                            ?>
                        </h5>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="registrationForm.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("../../footer.php");
?>