<?php
	
    // session_start();
	$validate1 = false;
	$validate2 = false;
    //var_dump($_SESSION);
	//when the Place Order button is pressed
	if (isset($_POST["submit"]))
	{
		
		//importing values
		$payment =  $_POST["methodOfPayment"];
		$email = $_POST["email"];
		$card = $_POST["card"];
		$month = $_POST["month"];
		$year = $_POST["year"];
		$fname = $_POST["firstName"];
		$lname = $_POST["lastName"];
		
		
		//if all fields are full
		if( ($_POST["methodOfPayment"] != "null") && (!empty($_POST["email"])) && (!empty($_POST["card"])) && ($_POST["month"] != "null") && ($_POST["year"] != "null") && (!empty($_POST["firstName"])) && (!empty($_POST["lastName"])) ) 
		{
			$validate2 = true;
			require 'CheckoutMail.php';
		}
		else
		{
			$validate1 = true;
		}

		//mail service
		$_SESSION["mail_fn"] = $fname;
		$_SESSION["mail_ln"] = $lname;
		$_SESSION["mail_price"] = $_SESSION['totalPrice'];
		$_SESSION["mail_email"] = $email;

		include("checkoutMain.php");
		
	}
	
	
?>









