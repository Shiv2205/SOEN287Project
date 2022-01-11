<?php

$itemName = $_POST['itemName'];
$price = $_POST['price'];
$description = $_POST['description'];

$conn3 = new mysqli ("localhost", "root", "", "Menus");

$sql5 = "SELECT * FROM DessertMenu WHERE ItemName = '$itemName';";
$sql6 = "INSERT INTO DessertMenu (ItemName, Price, Description) VALUES ('$itemName', '$price', '$description');";

$result = $conn3->query($sql5);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if($row['Price'] !== $price)
		{
			$sql = "UPDATE DessertMenu SET Price = '$price' WHERE ItemName = '$itemName';";
			$conn->query($sql);
			header("Location: removeDessert.php");
		}
	}

}
else
{
	if($conn3->query($sql6) === TRUE)
	{
		header("Location: removeDessert.php");
	}
	else
	{
		echo "Failed to add";
	}
}

$conn3->close();

?>