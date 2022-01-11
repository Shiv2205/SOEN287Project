<?php
$email = $_POST['email'];
$username = $_SESSION['username'];
$conn = new mysqli ("localhost", "root", "", "userAccounts");

$sql = "UPDATE Users SET Email = '$email' WHERE Username = '$username';";
$result = $conn->query($sql);

if($conn->query($sql) === TRUE)
{
	$sql = "SELECT Email FROM Users WHERE Username = '$username';";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		$_SESSION['email'] = $conn->real_escape_string($row['Email']);
	}
	header("Refresh:1; url=socialUser.php");
	die();
}
else
{
	echo "error";
}

?>