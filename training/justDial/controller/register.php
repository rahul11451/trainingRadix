<?php
session_start();

include '../model/Register.php';
include '../PHPMailer_old/myphpmailer.php';

$mailObj = new myphpmailer();
$regi = new Register();

$veriData = $_GET['verified'];
$veriInData = $_SESSION['verifiedData'];

function generateRandomString($length = 5)
{
  $otp = '';
  for ($i = 0; $i < $length; $i++) {
    $otp .= mt_rand(0, 9);
  }
  return $otp;
}
$otp = generateRandomString();


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$school = $_POST['school'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if ($_POST['action'] == 'otpSend') {
  $randOtp = $_POST['otpVal'];

  $emailContent = '<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">
<tr>
  <td>
    <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <table width="95%" align="center" cellpadding="0" cellspacing="0" style="max-width:670px;background:#fff; border-radius:3px; text-align:left;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
            <tr>
              <td style="height:40px;">&nbsp;</td>
            </tr>
            <tr>
              <td style="padding:0 35px;">
                <h1 style="color:#063e5d; font-weight:500; margin-left:auto;font-size:32px;font-family:"Poppins",sans-serif; text-align:center;">Verify your email
                </h1>

                <p style="color:#455056; font-size:17px;line-height:24px; margin:0;font-weight:500;">Hi ' . $name . ',</p>
                <br />
                <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">

                  We at justDials are really excited to have you with us! Before we get started, we need to confirm that it is really you. Please click on the link below to verify your email address:
                </p>



              </td>
            </tr>
            <tr>
              <td style="text-align:center;">
                <p style="background:#ffa350;text-decoration:none !important; font-weight:500; margin-top:35px;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;text-align:center;"> ' . $randOtp . '</p>
              </td>
            </tr>
            <tr>
              <td style="height:40px;">&nbsp;</td>
            </tr>
            <tr>
              <td style="padding:35px; padding-top:10px;">
                <p style="margin-bottom:0px;">
                  Regards,
                </p>
                <p>Team justDials</p>
              </td>
            </tr>
          </table>
        </td>
      <tr>
        <td style="height:20px;">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
</table>';

  $to = 'nensi.darji@radixweb.com';
  $from = 'nensi.darji@radixweb.com';
  $subject = "Email Verification";
  $content = $emailContent;
  $mailData = $mailObj->sendEmail_phpmailer($to, $from, $subject, $content);

  echo $mailData;
  exit;
}


if (isset($_POST['register'])) {
  if (isset($_SESSION['verifiedData'])) {
    unset($_SESSION['verifiedData']);
  }
  $_SESSION['verifiedData'] = array($name, $email, $mobile, $school, $password);

  // name validation
  if (empty($name)) {
    $erName = 'Name is Required';
  } else {
    $erName = '';
  }

  // email validation
  if (empty($email)) {
    $erEmail = 'Email is Required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erEmail = "Invalid email format";
  } else {
    $erEmail = '';
  }

  // mobile validation
  if (empty($mobile)) {
    $erMobile = 'Mobile Number is Reqiured';
  } else if (!filter_var($mobile, FILTER_SANITIZE_NUMBER_INT)) {
    $erMobile = 'Invalid Mobile Number';
  } else {
    $erMobile = '';
  }

  // school validation
  if (empty($school)) {
    $erSchool = 'This Field is Reqiured';
  } else {
    $erSchool = '';
  }

  // password validation
  if (empty($password)) {
    $erPassword = 'Password is Required';
  } else {
    $erPassword = '';
  }

  // re-enter password validation
  if (empty($repassword)) {
    $erRePassword = 'Please re-enter your password';
  } else if ($password != $repassword) {
    $erRePassword = 'Your password is not matched';
  } else {
    $erRePassword = '';
  }

  if ($erName == '' && $erEmail == '' && $erMobile == '' && $erPassword == '' && $erRePassword == '' && $erSchool == '') {
    $insertMessage = $regi->registerValid($email, $mobile, $school, $name, $password);
  }
}
