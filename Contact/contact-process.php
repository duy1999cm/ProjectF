<?php

/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
AND ALSO SMTP TO SEND THE EMAILS
*/

require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com"; // specify main and backup server
    $mail->Port = 587; // set the port to use
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->SMTPSecure = 'tls';

    // $mail->Username = 'tiknum01@gmail.com'; // YOUR gmail email
    // $mail->Password = 'xzwt2N9x'; // YOUR gmail password
    $mail->Username = 'demosaleweb@gmail.com'; // YOUR gmail email
    $mail->Password = 'demosaleweb.cf'; // YOUR gmail password

    //Email subject
	    $mail->Subject = "Test email using PHPMailer";
    //Set sender email
        $mail->setFrom('tiknum01@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
        // $mail->From = 'tiknum01@gmail.com';
        // $mail->FromName = 'tiknum01';
    //Attachment
        // $mail->addAttachment('img/work-6.jpg');
    //Email body 
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'Cam on';
    //Add recipient
        $mail->addAddress(''.$_POST['email'].'');

    $mail->send();
    echo '<script>
            alert("Cảm ơn phản hồi từ bạn!")
            window.location.replace("contact.php")
        </script>';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}