<?php
session_start();
include '../controller/login.php';
include 'layout/header.php';
?>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card border border-dark border-2 shadow-lg">
                    <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="../images/loginPhoto.webp" alt="login form" class="img-fluid rounded-end border h-100" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                            <p class="text-danger text-center"><?php echo $loginResult; ?></p>
                                <form method="POST" id="loginForm">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3 loginLogo"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3 loginHeading">Sign into your account</h5>

                                    <div class="form-outline mb-4">
                                    <div class="input-group">
                                        <input type="text" id="email" class="form-control form-control-lg border  border-dark rounded-0 " placeholder="email or mobile number" name="userId" />
                                    </div>
                                        <span class="text-danger erEmail"><?php echo $erUserId; ?></span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <input type="password" id="loginPass" class="form-control form-control-lg border  border-dark border-end-0 rounded-0" placeholder="password" name="password" />
                                            <div class="input-group-append">
                                                <span class="fa fa-eye py-3 px-2 text-center input-group-text btn border border-start-0 border-dark rounded-0 togglePassword"></span>
                                            </div>
                                        </div>
                                        <span class="text-danger erPass"><?php echo $erPassword; ?></span>
                                    </div>

                                    <div class="pt-1 mb-4">
                                    <input class="form-control btn btn-dark btn-lg btn-block" type="submit" value="Login" name="login" id="loginButton">
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2 loginMessage">Don't have an account? <a href="registrationForm.php"  class="loginLink">Register here</a></p>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../js/validation.js"></script>

<?php
include 'layout/footer.php';
?>