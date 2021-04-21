<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailerAutoload.php';
require 'feedback/PHPMailer/PHPMailer.php';
require 'feedback/PHPMailer/Exception.php';
require 'feedback/PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'knvdurgaprasad610@gmail.com';          // SMTP username
$mail->Password = '7997895017pP@'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('knvdurgaprasad610@gmail.com', 'EDU Materials');
$mail->addReplyTo('info@edumaterials.tech', 'EDU Materials');
$mail->addAddress('knvdurgaprasad610@gmail.com');   // Add a recipient
$mail->addAddress('prasadbobby057@gmail.com');   // Add a recipient
$mail->addAddress('rajesh.dampanaboina@gmail.com');   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

// $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
$bodyContent = file_get_contents("email.html");

// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$mail->Subject = 'EDU Materials';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>