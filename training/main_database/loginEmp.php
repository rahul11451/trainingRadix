<?php
session_start();
include ("lib/ClassFile.php");
if(isset($_SESSION['user_id'])){
    header('Location: details.php');
}

if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(empty($user_name)){
        $errorName = 'UserName is Empty';
    }

    if(empty($password)){
        $errorPass = 'Password is Empty';
    }

    if(!empty($user_name) && !empty($password)){

        $login = new ClassFile();
        $result = $login->select('employees','email, password, emp_id, status');
        foreach($result as $key=>$array){
            if($result[$key]['email'] == $user_name){

                if($result[$key]['password'] == $password){

                    if($result[$key]['status'] == 1){

                        $success =  'Successfully Entered Data';
                        $_SESSION['user_id'] = $result[$key]['emp_id'];
                        header('Location: details.php');
                    } else {
                        $errorStatus = 'Sorry You are not employee here now';
                        break;
                    }

                } else{
                    $errorPass = 'Your password is not matched';
                    break;
                }
            }
        }
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
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css-custom/custom1.css">
    </link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="m-lg-5 m-2  text-center pt-3">
        <div class="d-flex justify-content-end">
            <a href="index.php" class="btn btn-primary px-5 py-3">Back</a>
        </div>
        <h3 class="text-primary text-decoration-underline">
            Employee Login
        </h3>
    </div>
    <div class="m-lg-5 m-2 screen d-flex justify-content-center ">
        <form method="POST" class="border p-5 shadow-lg w-25 border-primary rounded">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label for="" class="text-primary fw-bold h5">UserName: </label>
                <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Email Id" value="">
                <span class="text-danger"><?php echo $errorName; ?></span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label for="" class="text-primary fw-bold h5">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="password" value="">
                <span class="text-danger"><?php echo $errorPass; ?></span>
            </div>

            <span class="text-success"><?php echo $success; ?></span>
            <span class="text-danger h5"><?php echo $errorStatus; ?></span>
            <!-- Submit button -->
            <input type="submit" name="login" value="Login" class="btn btn-outline-primary btn-lg form-control" id="login">
        </form>
    </div>
</body>
</html>