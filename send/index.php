<?php
//Added database connection
//Import the sql file given in instruction
$conn=mysqli_connect("localhost","root","","custom");
require "phpmailer/PHPMailerAutoload.php";
//Setup   
$mail=new PHPMailer;
   $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'knvdurgaprasad610@gmail.com';                     // SMTP username
    $mail->Password   = '7997895017pP@';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;              
//Mail adding                      
$mail->setFrom("knvdurgaprasad610@gmail.com");//FROM
//Query to get data from database.
$sql="select * from users where send_email=1";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    $mail->addReplyTo("vray6640@gmail.com");
    while($x=mysqli_fetch_assoc($res))
    {
        $mail->addBCC($x['email']);
    }

    // Content
    $mail->isHTML(true);  // Set email format to HTML
//Added your custom subject
    // $mail->Subject = 'This is file sending mail';
//Added your custom body
    // $mail->Body    = '<h1>Hope, you have recieved email</h1>';
    // $mail->AltBody = 'This is for non-html content';
 
        $bodyContent = file_get_contents("../success-email.php");

        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $mail->Subject = 'Hi..! Your account has been successfully created. Thanking you...!';
        $mail->Body    = $bodyContent;


    if($mail->send())
    {
        echo "Success";
    }
    else
    echo "Failure";
}
else
{
    echo "No data found";
}
?>