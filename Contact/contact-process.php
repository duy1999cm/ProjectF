<?php
/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
AND ALSO SMTP TO SEND THE EMAILS
*/

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

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

    $mail->Username = 'tiknum01@gmail.com'; // YOUR gmail email
    $mail->Password = 'xzwt2N9x'; // YOUR gmail password

    //Email subject
	    $mail->Subject = "Test email using PHPMailer";
    //Set sender email
        $mail->setFrom('tiknum01@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        // $mail->addAttachment('img/work-6.jpg');
    //Email body 
        $mail->Body = '<h1>'.$_POST["title"].'</h1></br>'.$_POST["content"].'</p>';
    //Add recipient
        $mail->addAddress(''.$_POST['email'].'');

    $mail->send();
    echo "<script>
            alert('Cảm ơn phản hồi từ bạn!')
            window.location.replace('contact.php')
        </script>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}