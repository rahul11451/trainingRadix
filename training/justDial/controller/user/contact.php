<?php

include '../../model/Query.php';
include '../../PHPMailer_old/myphpmailer.php';
$mailObj = new myphpmailer();

$obj = new Query();

if (isset($_GET['providerId'])) {
    $emails = $obj->select('service_provider', 'sEmail, sAddress', array('nId' => array($_GET['providerId'], '=')));

    $emailData = '<p class="m-0"><i class="fa fa-envelope-open text-danger me-2"></i>' . $emails[0]['sEmail'] . '</p>';
    $mapResult = '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $emails[0]['sAddress'])) . '&z=14&output=embed" class="position-relative rounded w-100 h-100" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
} else {

    $emailData = '<p class="m-0"><i class="fa fa-envelope-open text-danger me-2"></i>nensi.darji@radixweb.com</p>';
    $mapResult = '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", "B/H Nirma University, Ekyarth, Near Vandemataram Fabula, Malabar County Rd, Chharodi, Ahmedabad")) . '&z=14&output=embed" class="position-relative rounded w-100 h-100" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
}


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $subject = $_POST['subject'];

    if (empty($email)) {
        $erEmail = 'Your Email is required';
    } else {
        $erEmail = '';
    }

    if (empty($text)) {
        $erText = "Message is Required";
    } else {
        $erText = '';
    }

    if ($erText == '' && $erEmail == '') {
        $to = 'nensi.darji@radixweb.com';
        $from = 'nensi.darji@radixweb.com';
        $subject = $subject;
        $content = "<h5>" . $text . "</h5>";
        $mailData = $mailObj->sendEmail_phpmailer($to, $from, $subject, $content);

        if ($mailData == 200) {
            $successresult = '<script>
            swal({
                title: "Thank You",
                text: "Email has been sent.",
                icon: "success",
                button: {
                    className : "bg-danger"
                }
              });
        </script>';
        } else {
            $successresult = '<script>
            swal({
                title: "Sorry!",
                text: "Somthing is went wrong.",
                icon: "warning",
                button: {
                    className : "bg-danger"
                }
              });
        </script>';
        }
    } else {
        $nameVal = $name;
        $emailVal = $email;
        $textVal = $text;
        $subVal = $subject;
    }
}

