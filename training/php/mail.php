<?php
// mail refrence : https://www.w3schools.com/php/func_mail_mail.asp
$to = "nensi.darji@radixweb.com"; // put your email
$subject = "My subject";
$message = "
<html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
        <p>This email contains HTML Tags!</p>
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
            </tr>
        </table>
    </body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: php@radixweb.com";

mail($to, $subject, $message, $headers);
