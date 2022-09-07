<?php
session_start();
include '../model/Login.php';
include '../PHPMailer_old/myphpmailer.php';
$mailObj = new myphpmailer();
$login = new Login();
function generateRandomString($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$random = generateRandomString();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == 1) {
        header('Location: admin/index.php');
    } else {
        header('Location: ../index.php');
    }
}

if (isset($_POST['login'])) {
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    $captchaVal = $_POST['captchVal'];
    $captcha = $_POST['captcha'];

    // name validation
    if (empty($userId)) {
        $erUserId = 'userId is Required';
    } else {
        $erUserId = '';
    }

    // password validation
    if (empty($password)) {
        $erPassword = 'Password is Required';
    } else {
        $erPassword = '';
    }

    if ($erUserId == '' && $erPassword == '') {
        if ($captchaVal === $captcha) {
            $loginResult = $login->loginUser($userId, $password);
        } else {
            $loginResult = 'Incorrect Data Entered';
        }
    }
}

if (isset($_POST['forget'])) {
    $userId = $_POST['userId'];
    $school = $_POST['school'];

    // name validation
    if (empty($userId)) {
        $erUserId = 'userId is Required';
    } else {
        $erUserId = '';
    }

    // school Validation
    if (empty($school)) {
        $erSchool = 'This Feild is Required';
    } else {
        $erSchool = '';
    }

    if($erUserId == '' && $erSchool == '') {
        $pass = $login -> select('admin', 'sAuthorization', array('sEmail' => array($userId, '=')));
        $schoolVal = $pass[0]["sAuthorization"];
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($pass);echo '</pre>'; die();
        if(empty($pass)) {

            $loginResult = '<script>
            swal({
                title: "Oops!",
                text: "You are not registered user.",
                icon: "error",
                button: false,
                timer: 1000
              }).then(
                function (dismiss) {
                  if (dismiss !== "timer") {
                    window.location.href = "http://nensi.localhost/justDial/view/registrationForm.php";
                  }
                }
            );
        </script>';

        } else if(!preg_match('/'.$schoolVal.'/i', $school)) {
            $loginResult = '<script>
            swal({
                title: "Oops!",
                text: "School Name is wrong.",
                icon: "error",
                button: {
                    className: "bg-danger"
                }
              });
            </script>';
        } else {
            $_SESSION['resetEmail'] = $userId;
            header('Location: login.php?resetPass=1');
        //     $to = 'nensi.darji@radixweb.com';
        //     $from = 'nensi.darji@radixweb.com';
        //     $subject = "Forgot Password";
        //     $content = "<h6 class='' stye = 'color: red;'>Hi ".$pass[0]['sName'].",</h6>
        //                 <br> Forgot Your Password? <br> Here Is Your Password: ". $pass[0]['sPassword'];
        //     $mailData = $mailObj -> sendEmail_phpmailer($to, $from, $subject, $content);
        //     $loginResult = '<script>
        //     swal({
        //         title: "Email has been sent",
        //         text: "Please check your email.",
        //         button: false
        //         timer: 2000
        //       }).then(
        //         function (dismiss) {
        //           if (dismiss !== "timer") {
        //             window.location.href = "http://nensi.localhost/justDial/view/login.php?resetPass=1";
        //           }
        //         }
        //     );
        // </script>';
        }
    }
}

// reset

if (isset($_POST['reset'])) {
    $pass = $_POST['pass'];
    $rePass = $_POST['rePass'];

    // password validation
    if (empty($pass)) {
        $erPassword = 'userId is Required';
    } else {
        $erPassword = '';
    }

    // repassword Validation
    if (empty($rePass)) {
        $erRePassword = 'This Feild is Required';
    } else if($pass != $rePass) {
        $erRePassword = 'Password is not matched';
    } else {
        $erRePassword = '';
    }

    if($erPassword == '' && $erRePassword == '') {
        $uEmail = $_SESSION['resetEmail'];
        
        $result = $login -> update('admin', array('sPassword' => $pass), array('sEmail' => array($uEmail, '=')));
        
        // echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result);echo '</pre>'; die();
        
        if(empty($result)) {
            
            $resetResult = '<script>
            swal({
                title: "Oops! There is Some Problem",
                text: "Please Enter Data again",
                icon: "error",
            });
            </script>';
            
        } else {
            $resetResult = '<script>
            swal({
                title: "Good!",
                text: "Your data updated successfully.",
                icon: "success",
                button: false,
                timer: 2000
              }).then(
                function (dismiss) {
                  if (dismiss !== "timer") {
                    window.location.href = "http://nensi.localhost/justDial/view/login.php";
                  }
                }
            );
        </script>';
        }
    }
}
