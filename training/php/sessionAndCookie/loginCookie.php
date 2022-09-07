<?php
$nameError = $pasError = $result = '';
$paths = '/php/';
if(isset($_POST['submit'])){
    
    $id = $_POST['userName'];
    $pass = $_POST['password'];

    if(empty($id)){
        $nameError = 'Please Enter Username';
    } 
    if(empty($pass)){
        $pasError = 'Please Enter Password';
    }
    
}
if(!empty($id) && !empty($pass)){
    if(isset($_POST['check'])){
        setcookie('userName', $id, time() + (86400 * 30), "/");
        setcookie('password', $pass, time() + (86400 * 30), "/");
    }
    if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
        $result = 'Your Id and Password is successfully stored in cookie.';
    } else {
        $result = 'Your Id and Password are not stored in cookie.';
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
                    Create an application for implement a "Remember Me" check-box to the login form, where the user's login info is remembered and reused when the user comes back later.
                </h4>
                <div class="m-lg-5 m-2 screen">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Login</h5>
                                    <form method="POST">
                                        <label for="" class="text-primary">
                                            <input class="form-control border-primary" type="text" name="userName" id="userName" placeholder="Id" value="<?php if(isset($_COOKIE)){ echo $_COOKIE['userName'] ;} ?>">
                                            <span class="text-danger userName"> <?php echo $nameError; ?></span>
                                        </label>
                                        <br><br>
                                        <label for="" class="text-primary">
                                            <input class="form-control border-primary" type="password" name="password" id="password" placeholder="Password" value="<?php if(isset($_COOKIE)){ echo $_COOKIE['password'] ;} ?>">
                                            <span class="text-danger password"> <?php echo $pasError; ?></span>
                                        </label>
                                        <br><br>
                                        <input type="checkbox" name="check" id="nen" class="form-check-input border-primary"> 
                                        <label for="nen" class="text-primary form-check-label">Remember Me </label>
                                        <br><br>
                                        <input type="submit" class="btn-outline-primary btn" name="submit" value="Submit" id="submit">
                                        <br><br>
                                        <h4 id="success" class="text-success text-center"></h4>

                                        <h5 class="text-center text-decoration-underline"><?php echo $result; ?></h5>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex mx-md-5 justify-content-between mt-5">
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>ajaxPractice/chatApplication.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Previous
                    </button>
                </a>
                <a href="<?php echo SITE_URL; ?><?php echo $paths ?>sessionAndCookie/websiteSurvey.php" class="text-white">
                    <button class="btn-primary btn px-5 py-2 mt-2">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#submit").click(function(e){
            if($("#userName").val() == ''){
                $(".userName").text("Enter Id");
                e.preventDefault();
                
                
            }
            if($("#password").val() == ''){
                $(".password").text("Enter Password");
                e.preventDefault();
                
            }
        });
    });
</script>


<?php
include("../../footer.php");
?>
