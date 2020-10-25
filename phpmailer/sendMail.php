<?php

date_default_timezone_set("Asia/Kolkata");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//namespaces

// Load Classes
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // DEBUG_SERVER //DEBUG_OFF
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'email';
    $mail->Password   = 'password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    
    //E-Mail Priority
     $mail->Priority = 1;
    
    //Recipients
    $mail->setFrom('bounces.em.server.itsbhm@gmail.com', 'ITSBHM Group');
    $mail->addAddress('06taniyasharma@gmail.com', 'Taniya Sharma');  // Add a recipient (Name is optional)
    // $mail->addAddress('ellen@example.com');           // Add a recipient (Name is optional)
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    
    // Content
    $mail->isHTML(true);        // Set email format to HTML
    $mail->Subject = 'Email From Local Webserver'; // 'New Request From Contact Form';
    $mail->Body    = 'This is email Body.';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}