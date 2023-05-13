<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

    // include 'php-mailer/PHPMailer.php';
    // include 'php-mailer/SMTP.php';
    // include 'php-mailer/Exception.php';
include('php-mailer/PHPMailer.php');
include('php-mailer/SMTP.php');
include('php-mailer/Exception.php');
include('php-mailer/OAuth.php');
include('php-mailer/POP3.php');
// include('php-mailer/OAuthTokenProvider.php');









// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pradnyaahire4@gmail.com';                     //SMTP username
    $mail->Password   = 'Pradnya@1308';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pradnyaahire4@gmail.com', 'Mailer');
    $mail->addAddress('pradnyaahire4@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('pradnyaahire4@gmail.com');               //Name is optional
    $mail->addReplyTo('pradnyaahire4@gmail.com', 'Information');

    //Attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}