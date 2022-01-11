<?php
//session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['logIn'] = FALSE;

$conn = new mysqli ("localhost", "root", "", "userAccounts");

$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT UserID, Username, Password, FirstName, Email FROM Users WHERE Username = '$username' AND Password = '$password';";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	$row = $result->fetch_assoc();	
	if($row['Username'] === $username && $row['Password'] === $password)
	{
		$_SESSION['users'] = $conn;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['firstName'] = $conn->real_escape_string($row['FirstName']);
		$_SESSION['email'] = $conn->real_escape_string($row['Email']);
		$_SESSION['UserID'] = $row['UserID'];
		$_SESSION['logIn'] = TRUE;

		if($row['UserID'] == 1)
		{
			header("Location: AdminUI.php");
		}
		else
		{
			header("Location: test.php");
		}
		die();
	}
}
else
{
	echo "Wrong Username or Password.";
}

$conn->close();

?>