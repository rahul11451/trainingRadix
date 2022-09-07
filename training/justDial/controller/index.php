<?php

include 'PHPMailer_old/myphpmailer.php';
$mailObj = new myphpmailer();

include 'model/Query.php';
$sliderObj = new Query();

$sliderData = $sliderObj->select('service_details', 'nId, sServiceName');

foreach ($sliderData as $key => $value) {
    $imgPath = glob("img/services/" . $sliderData[$key]['sServiceName'] . ".*");
    if(empty($imgPath)) {
        $imgPath[0] = 'img/services/default.jpeg';
    }
    $slider .= '<div class="swiper-slide" height="200">
                    <div class=" bg-danger text-white rounded-3" height= "200">
                        <a href="'.SITE_URL.'/view/user/serviceList.php?serviceId='.$sliderData[$key]['nId'].'" class="text-decoration-none text-white">
                            <span class="h2">' . $sliderData[$key]['sServiceName'] . '</span>
                            <img src="' . $imgPath[0] . '" class="" alt="img" heigth ="200">
                        </a>
                    </div>
                </div>';
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    if (empty($name)) {
        $erName = 'Your Email is required';
    } else {
        $erName = '';
    }

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

    if ($erText == '' && $erEmail == '' && $erName== '') {
        $to = 'nensi.darji@radixweb.com';
        $from = 'nensi.darji@radixweb.com';
        $subject = 'Request For a Service';
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
    }
}

?>
