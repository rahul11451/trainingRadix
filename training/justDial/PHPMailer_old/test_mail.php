<?php

require_once 'myphpmailer.php';
$sendObjPhpmailer = new myphpmailer();
$to_email='gajendra.patel@radixweb.com';
$femail='gajendra.patel@radixweb.com';
$subject='test mail';
$content='test mail';
$attached = array("/home/driveiq/public_html/wp-content/themes/automotive-child/uploads/Applications/gajendra.patel@radixweb.com/ddd_dd_CreditProposal.pdf");
echo $resofphp=$sendObjPhpmailer->sendEmail_phpmailer($to_email, $femail, $subject, $content, $attached);
die();