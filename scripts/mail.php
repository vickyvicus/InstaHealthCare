<?php
require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($email,$name,$username)
{
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'indiavhc@gmail.com';          // SMTP username
$mail->Password = 'indiavhc'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('indiavhc@gmail.com', 'Virtual Health Care');
$mail->addReplyTo('indiavhc@gmail.com', 'virtual Health Care');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('vickyvicua@gmail.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML


$bodyContent = "<p>congratulations ".$name;
$bodyContent .=  "!!!<br><br> Your account has been successfully set with username ";
$bodyContent .=  $username.".<br> Please use your email id: ".$email." and password to login at http://localhost/med2/index.php</p>";
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Virtual Heath Care</b></p>';

$mail->Subject = 'Your account has been set up';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
	//echo $email;
	
}
}

function sendMail2($email,$password,$name,$username)
{
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'indiavhc@gmail.com';          // SMTP username
$mail->Password = 'indiavhc'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('indiavhc@gmail.com', 'Virtual Health Care');
$mail->addReplyTo('indiavhc@gmail.com', 'virtual Health Care');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('vickyvicua@gmail.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML


$bodyContent = "<p>Hello ".$name;
$bodyContent .=  "!!!<br><br> Your login credentials for account with username <b>";
$bodyContent .=  $username."</b> are:<br><br> email id: <b>".$email."</b> <br>password: <b>".$password."</b> <br><br> please use above credentials to login at http://localhost/med2/index.php</p>";
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>Virtual Health Care</b></p>';

$mail->Subject = 'Your account has been set up';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
	//echo $email;
	
}
}
?>