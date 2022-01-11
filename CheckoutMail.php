<?php
//importing variables

session_start();
$firstName = $_SESSION["mail_fn"];
$lastName = $_SESSION["mail_ln"];
$finalPrice = $_SESSION['finalPrice'];
$emaill = $_SESSION["mail_email"];
$possDel = $_COOKIE['possible_delivery'];








/**
 * PHP Template for using PHPMailer to send emails.
 * Before sending emails using the Gmail's SMTP Server, you must make some of the security and permission level     
 * settings under your Google Account Security Settings. Please create a dummy account as you will have to put in 
 * username and password
 * Make sure that 2-Step-Verification is disabled. Follow the link https://myaccount.google.com/security
 * Turn ON the "Less Secure App" access at https://myaccount.google.com/u/0/lesssecureapps 
 */

//Import the PHPMailer class into the global namespace
//You don't have to modify these lines. 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server (We will be using GMAIL)
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication
$mail->Username = 'soen287.test2@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'SOEN287test';
//Set who the message is to be sent from
$mail->setFrom('soen287.test2@gmail.com', 'test test');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to email and name
$mail->addAddress(($emaill), ($firstName. " ". $lastName));
//Name is optional
//$mail->addAddress('recepientid@domain.com');

//You may add CC and BCC
//$mail->addCC("recepient2id@domain.com");
//$mail->addBCC("recepient3id@domain.com");

$mail->isHTML(true);

//You can add attachments. Provide file path and name of the attachments
//$mail->addAttachment("file.txt", "File.txt");        
//Filename is optional
//$mail->addAttachment("images/profile.png"); 



//Set the subject line
$mail->Subject = 'Student Hub Order';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
if (($possDel == 0))
	{
		$mail->Body = "Dear ". $firstName. " ". $lastName. ",\r\nYour food is being prepared. Your order total is: ". $finalPrice. "$.\nYour food is going to be ready for pick-up in less than 30 minutes,\nHurry, deliciousness is awating!. \n The student Hub team."  ;
	}
else if (($possDel == 1))
	{
		$mail->Body = "Dear ". $firstName. " ". $lastName. ",\r\nYour food is on the way, Thank you for choosing Student Hub. Your order total is: ". $finalPrice. "$.\nYour food is expected to arrive in less than 30 minutes,\nHave a nice day. \n The student Hub team."  ;
	}

//$mail->Body = "Dear, test\nggg" ;
//You may add plain text version using AltBody
//$mail->AltBody = "This is the plain text version of the email content";
//send the message, check for errors
if (!$mail->send()) {
	echo $emaill;
	echo "tes";

    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
}