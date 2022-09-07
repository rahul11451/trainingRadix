<?php

include '../controller/register.php';
include 'layout/header.php';


?>
<section class="my-5">
  <h3 class="text-center text-success mt-5 pt-5"><?php echo $insertMessage; ?></h3>
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card border border-dark border-2">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="login form" class="img-fluid h-100 rounded" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="post" id="registerForm">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3 loginLogo"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example16">Name <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" value="<?php echo $name; ?>" id="name" name="name" class="form-control form-control-lg border  border-dark rounded-0" />
                    </div>
                    <span class="text-danger erName"><?php echo $erName; ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="">Email address <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="email" value="<?php echo $email; ?>" id="email" name="email" class="form-control form-control-lg border  border-dark rounded-0 " />
                    </div>
                    <span class="text-danger erEmail"><?php echo $erEmail ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="">Mobile Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="tel" value="<?php echo $mobile; ?>" id="mobile" name="mobile" class="form-control form-control-lg border  border-dark rounded-0 " />
                    </div>
                    <span class="text-danger erMobile"><?php echo $erMobile; ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="password" value="<?php echo $password; ?>" id="regiPass" name="password" class="form-control form-control-lg border  border-dark border-end-0 rounded-0" />
                      <div class="input-group-append">
                        <span class="fa fa-eye py-3 px-2 text-center input-group-text btn border border-start-0 border-dark rounded-0 togglePassword"></span>
                      </div>
                    </div>
                    <span class="text-danger erRegiPass"><?php echo $erPassword; ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Re-enter Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="password" value="<?php echo $repassword; ?>" id="regiRePass" name="repassword" class="form-control form-control-lg border  border-dark border-end-0 rounded-0" />
                      <div class="input-group-append">
                        <span class="fa fa-eye py-3 px-2 text-center input-group-text btn border border-start-0 border-dark rounded-0 togglePassword"></span>
                      </div>
                    </div>
                    <span class="text-danger erRegiRePass"><?php echo $erRePassword; ?></span>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="form-control btn btn-dark btn-lg btn-block mb-3" type="submit" name="register" value="Register" id="regiButton">
                    <a href="<?php echo SITE_URL; ?>/index.php" class="form-control btn btn-dark btn-lg btn-block">Cancle</a>
                  </div>

                  <p class="loginMessage">Already have an account? <a href="<?php echo SITE_URL; ?>/view/login.php" class="loginLink">Login here</a></p>
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