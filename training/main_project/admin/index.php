<?php
session_start();
include("../classpath.php");

if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
}

if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (empty($user_name)) {
        $errorName = 'UserName is Empty';
    } elseif (!preg_match('/[a-z]/i', $user_name)) {
        $errorName = 'username contains only alphabets';
    } else {
        $errorName = '';
    }

    if (empty($password)) {
        $errorPass = 'Password is Empty';
    } else {
        $errorPass = '';
    }

    if ($errorName == '' && $errorPass == '') {
        $login = new Login();
        $results = $login->loginUser($user_name, $password);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radixweb | Training</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css_custom/style.css">
    </link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body>
    <header class="py-2 bg-dark text-white" id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="h1"><span class="fa fa-user"></span> Admin</h1>
                </div>
            </div>
        </div>
    </header>


    <!-- login -->
    <section id="login" class='mt-5 d-flex justify-content-center pt-5'>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Account Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" id="form">
                                <div class="form-group">
                                    <label for="email">User Name</label>
                                    <input type="text" class="form-control " name="user_name">
                                    <span class="text-danger"><?php echo $errorName; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <span class="text-danger"><?php echo $errorPass; ?></span>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-dark w-100" name="login" value="Login">
                            </form>
                        </div>
                        <h2 class="text-danger text-center"><?php echo $results; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/validation.js"></script>
</body>

</html>