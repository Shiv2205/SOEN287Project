<?php

$itemName = $_POST['itemName'];
$price = $_POST['price'];
$description = $_POST['description'];

$conn = new mysqli ("localhost", "root", "", "Menus");

$sql1 = "SELECT * FROM FoodMenu WHERE ItemName = '$itemName';";
$sql2 = "INSERT INTO FoodMenu (ItemName, Price, Description) VALUES ('$itemName', '$price', '$description');";

$result = $conn->query($sql1);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if($row['Price'] !== $price)
		{
			$sql = "UPDATE FoodMenu SET Price = '$price' WHERE ItemName = '$itemName';";
			$conn->query($sql);
			header("Location: removeFood.php");
		}
	}
}
else
{
	if($conn->query($sql2) === TRUE)
	{
		header("Location: removeFood.php");
	}
	else
	{
		echo "Failed to add";
	}
}

$conn->close();

?>