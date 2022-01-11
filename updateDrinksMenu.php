<?php

$itemName = (isset($_POST['itemName']) ? $_POST['itemName'] : "nope");
$price = (isset($_POST['price']) ? $_POST['price'] : "nope");
$description = (isset($_POST['description']) ? $_POST['description'] : "nope");

$conn2 = new mysqli ("localhost", "root", "", "Menus");
$sql3 = "SELECT * FROM DrinksMenu WHERE ItemName = '$itemName';";
$sql4 = "INSERT INTO DrinksMenu (ItemName, Price, Description) VALUES ('$itemName', '$price', '$description');";

$result = $conn2->query($sql3);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if($row['Price'] !== $price)
		{
			$sql = "UPDATE DrinksMenu SET Price = '$price' WHERE ItemName = '$itemName';";
			$conn->query($sql);
			header("Location: removeDrinks.php");
		}
	}

}
else
{
	if($conn2->query($sql4) === TRUE)
	{
		header("Location: removeDrinks.php");
	}
	else
	{
		echo $conn2->error;
	}
}

$conn2->close();

?>