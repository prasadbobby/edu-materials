<?php

ini_set( "display_errors", 0); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>




<?php
session_start();
$con=mysqli_connect('localhost','root','','edu-materials');


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
$mail->Username = 'edu.materials.user@gmail.com';          // SMTP username
$mail->Password = 'EDU#materials@123'; 			// SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('edu.materials.user@gmail.com', 'EDU Materials');
$mail->addReplyTo('info@edumaterials.tech', 'info@edu');
// $mail->addAddress($email);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');



$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$user_id=mysqli_real_escape_string($con,$_POST['user_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);

$_SESSION['USER_ID']=$user_id;
        

$res=mysqli_query($con,"select * from user where user_id='$user_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        // $_SESSION['NAME']=$row['name'];  ******required*******
        
if($check>0){


}else{
       $sql = mysqli_query($con,"insert into user(name,email,image,user_id) values('$name','$email','$image','$user_id')");
       $sql = mysqli_query($link,"insert into std_registration(name,email,image,user_id) values('$name','$email','$image','$user_id')");
        $_SESSION['NAME']=$name;
        $mail->addAddress($email);   // Add a recipient
        $mail->isHTML(true);  // Set email format to HTML

		$bodyContent = file_get_contents("success-email.php");

		// Set content-type header for sending HTML email 
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$mail->Subject = 'Hi '.$name.'..! Your account has been successfully created. Thanking you...!';
		$mail->Body    = $bodyContent;

		if(!$mail->send()) {
		    // echo 'Message could not be sent.';
		    // echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    // echo 'Message has been sent';
		}


}

$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['image']=$image;
$_SESSION['user_id']=$user_id;

?>

