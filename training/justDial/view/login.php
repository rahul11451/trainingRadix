<?php
session_start();
include '../controller/login.php';
include 'layout/header.php';

if (isset($_GET['forgotPassword']) && $_GET['forgotPassword'] == 1) {

?>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card border border-danger border-2 shadow-lg">
                        <div class="d-flex justify-content-center pt-5 ">
                            <h3 class="text-danger text-center fw-bolder text-decoration-underline"><?php echo $loginResult; ?></h3>
                            <form method="POST" id="forgotForm" class=" wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <span class="h3 text-center fw-bold mb-0 text-dark">Forget Password</span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="">Email: <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="email" class="form-control form-control-lg border  border-dark rounded-0 " placeholder="email" name="userId" value="<?php echo $userId; ?>" />
                                    </div>
                                    <span class="text-danger erEmail"><?php echo $erUserId; ?></span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">Your First School Name: <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" value="<?php echo $school; ?>" id="school" name="school" class="form-control form-control-lg border  border-dark rounded-0 " placeholder="school Name" />
                                    </div>
                                    <span class="text-danger erSchool"><?php echo $erSchool; ?></span>
                                </div>

                                <div class="pt-1 mb-4">
                                    <a href="<?php echo SITE_URL; ?>/view/login.php" class="btn btn-danger btn-lg btn-block" name="back" id="back"> Back </a>
                                    <input class="btn btn-danger btn-lg btn-block" type="submit" value="Next" name="forget" id="next">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
} else if (isset($_GET['resetPass']) && $_GET['resetPass'] == 1) {
?>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card border border-danger border-2 shadow-lg">
                        <div class="d-flex justify-content-center pt-5">
                            <h3 class="text-danger text-center fw-bolder text-decoration-underline"><?php echo $resetResult; ?></h3>
                            <form method="POST" id="resetForm" class =" wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <span class="h3 text-center fw-bold mb-0 text-dark">Reset Password</span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="">New Password:</label>
                                    <div class="input-group">
                                        <input type="password" id="loginPass" class="form-control form-control-lg border  border-dark border-end-0 rounded-0" placeholder="New password" name="pass" />
                                        <label for="loginPass"><span class="fa fa-eye py-3 px-2 text-center border border-start-0 border-dark rounded-0 togglePassword"></span></label>
                                    </div>
                                    <span class="text-danger erPass"><?php echo $erPassword; ?></span>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="">Confirm Password:</label>
                                    <div class="input-group">
                                        <input type="password" id="" class="form-control form-control-lg border  border-dark rounded-0" placeholder="confirm password" name="rePass" />
                                    </div>
                                    <span class="text-danger erRePass"><?php echo $erRePassword; ?></span>
                                </div>

                                <div class="pt-1 mb-4">
                                    <a href="<?php echo SITE_URL; ?>/view/login.php" class="btn btn-danger btn-lg btn-block" name="back" id="back"> Back </a>
                                    <input class="btn btn-danger btn-lg btn-block" type="submit" value="reset" name="reset" id="reset">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
} else {
?>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card border border-danger border-2 shadow-lg">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../img/general/loginPhoto.webp" alt="login form" class="img-fluid rounded-end border h-100" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <h3 class="text-danger text-center fw-bolder text-decoration-underline"><?php echo $loginResult; ?></h3>
                                    <form method="POST" id="loginForm" class=" wow fadeInLeft" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fa fa-cubes fa-2x me-3 loginLogo"></i>
                                            <span class="h1 fw-bold mb-0 text-dark">Logo</span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="">Email:</label>
                                            <div class="input-group">
                                                <input type="text" id="email" class="form-control form-control-lg border  border-dark rounded-0 " placeholder="email or mobile number" name="userId" />
                                            </div>
                                            <span class="text-danger erEmail"><?php echo $erUserId; ?></span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="">Password:</label>
                                            <div class="input-group">
                                                <input type="password" id="loginPass" class="form-control form-control-lg border  border-dark border-end-0 rounded-0" placeholder="password" name="password" />
                                                <label for="loginPass"><span class="fa fa-eye py-3 px-2 text-center border border-start-0 border-dark rounded-0 togglePassword"></span></label>
                                            </div>
                                            <span class="text-danger erPass"><?php echo $erPassword; ?></span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="">Captcha:</label>
                                            <div class="input-group">
                                                <p class="text-center text-white w-25 border border-0 bg-success bg-opacity-50 text-decoration-line-through me-2 mb-1 py-2"><?php echo $random; ?></p>
                                                <input type="text" id="" class="text-center text-white w-25 border border-0 bg-success bg-opacity-50 text-decoration-line-through me-2 mb-1" name="captchVal" value="<?php echo $random; ?>" hidden>
                                                <input type="text" id="" class="px-2 py-2 border  border-dark rounded-0" placeholder="Write Text Here" name="captcha" />
                                            </div>
                                            <span class="text-danger erPass"><?php echo $erCaptcha; ?></span>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input class="btn btn-danger btn-lg btn-block" type="submit" value="Login" name="login" id="loginButton">
                                        </div>

                                        <a class="h6 text-muted" href="<?php echo SITE_URL; ?>/view/login.php?forgotPassword=1">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2 loginMessage">Don't have an account? <a href="registrationForm.php" class="loginLink">Register here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<script src="../js/validation.js"></script>

<?php
include 'layout/footer.php';
?>