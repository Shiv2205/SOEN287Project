<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli ("localhost", "root", "", "userAccounts");

$sql = "INSERT INTO Users (FirstName, LastName, Username, Password)
VALUES ('$firstName', '$lastName', '$username', '$password');";

if($conn->query($sql) === TRUE)
{
	echo "Success";
}
else
{
	echo "Error";
}

?>