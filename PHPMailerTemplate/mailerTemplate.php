<?php
/**
 * PHP Template for using PHPMailer to send emails.
 * Before sending emails using the Gmail's SMTP Server, you must make some of the security and permission level     
 * settings under your Google Account Security Settings. Please create a dummy account as you will have to put in 
 * username and password
 * Make sure that 2-Step-Verification is disabled. Follow the link https://myaccount.google.com/security
 * Turn ON the "Less Secure App" access at https://myaccount.google.com/u/0/lesssecureapps 
 */

$subject = $_POST['subject'];
$email = $_POST['email'];

$conn = new mysqli ("localhost", "root", "", "userAccounts");

$sql = "SELECT FirstName, Email FROM Users WHERE Email IS NOT NULL;";

$result = $conn->query($sql);

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
 //SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server (We will be using GMAIL)
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

$mail->SMTPSecure = 'tls';

//Username to use for SMTP authentication
$mail->Username = 'studenthubautoemail@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'StudentHub2020!';
//Set who the message is to be sent from
$mail->setFrom('studenthubautoemail@gmail.com', 'Student Hub');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to email and name
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$mail->ClearAllRecipients();
		$mail->addAddress($row['Email']);
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


		$firstName = $row['FirstName'];
		//Set the subject line
		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->Body = "Dear $firstName, <br><br>" . $email;
		//You may add plain text version using AltBody
		//$mail->AltBody = "This is the plain text version of the email content";
		//send the message, check for errors
		if (!$mail->send()) {
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message was sent Successfully!';
		}
	}
}
