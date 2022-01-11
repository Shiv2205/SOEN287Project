
<!--This page is incomplete, this is where the map and the order now page will be linked-->
<?php 

	

	if (isset($_POST["submit2"]))
	{
	
		//accessing important values from JavaScript

		//note that two address variables are there, they should be the sane value, just two different ways of accessing them 
		$user_address = $_POST["user_address"];
		$user_address2 = $_COOKIE['addr'];
		//User's distance from restaurant (in Km)
		$user_distance = $_COOKIE['distanceFromRestaurant'];
		//Is User inside delivery radius? (boolean value)
		$possible_delivery = $_COOKIE['possible_delivery'];
		//Are we charging 8$ delivery fee? (boolean value)
		$delivery_fee = $_COOKIE['delivery_fee'];
		

		//sending user to checkout page
		header("Location: checkoutMain.php");
		exit();
	}
 ?>