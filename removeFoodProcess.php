<?php

$item = $_POST['item'];
$menu = $_POST['menu'];
$location = "";

$conn = new mysqli ("localhost", "root", "", "Menus");

switch ($menu) {
	case "food":
	{
		$sql = "DELETE FROM FoodMenu WHERE ItemName = '$item';";
		$location = "removeFood.php";
		break;
	}
	
	case "drinks":
	{
		$sql = "DELETE FROM DrinksMenu WHERE ItemName = '$item';";
		$location = "removeDrinks.php";
		break;
	}

	case "dessert":
	{
		$sql = "DELETE FROM DessertMenu WHERE ItemName = '$item';";
		$location = "removeDessert.php";
		break;
	}
}
$result = $conn->query($sql);

$conn->close();

header("Location: " . $location);
?>

