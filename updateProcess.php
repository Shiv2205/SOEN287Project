<?php

$userID = $_SESSION['UserID'];
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$oldPassword = (isset($_POST['oldPass']) ? $_POST['oldPass'] : '');
$newPassword = (isset($_POST['newPass']) ? $_POST['newPass'] : '');
$confirmNewPassword = (isset($_POST['confirmNewPass']) ? $_POST['confirmNewPass'] : '');
$email = (isset($_POST['Email']) ? $_POST['Email'] : '');

$conn = new mysqli ("localhost", "root", "", "userAccounts");

if($username != '')
{
	$sql = "UPDATE Users SET Username = '$username' WHERE UserID = '$userID';";

	if(!($conn->query($sql)))
	{
		echo "Error updating username: " . $conn->error; 
	}
	else
	{
		$_SESSION['username'] = $username;
		header("Location: userProfile.php");
	}
}


if($oldPassword != '' && $newPassword != '' && $confirmNewPassword != '')
{
	if($oldPassword === $_SESSION['password'])
	{
		if($newPassword === $confirmNewPassword)
		{
			$sql = "UPDATE Users SET Password = '$newPassword' WHERE UserID = '$userID';";
			if(!($conn->query($sql)))
			{
				echo "Error updating password: " . $conn->error; 
			}
			else
			{
				header("Location: userProfile.php");
			}
		}
		else
		{
			echo  "* New password does not match Confirm";
		}
	}
	else
	{
		echo "* Previous password is incorrect";
	}
}


if($email != '')
{
	$sql = "UPDATE Users SET Email = '$email' WHERE UserID = '$userID';";

	if(!($conn->query($sql)))
	{
		echo "Error updating Email " . $conn->error;
	}
	else
	{
		$_SESSION['email'] = $email;
		header("Location: userProfile.php");
	}
}

$conn->close();
?>