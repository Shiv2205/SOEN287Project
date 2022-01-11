<?php

$conn = new mysqli ("localhost", "root", "", "Menu");

$sql = "SELECT ItemName, Price, Description, Image FROM DessertMenu";

$dessertItem = array();
$dessertPrice = array();
$dessertDescription = array();
$dessertImage = array();
$count = 0;
$index = 21;

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
        array_push($dessertItem, $row['ItemName']);
        array_push($dessertPrice, $row['Price']);
        array_push($dessertDescription, $row['Description']);
        array_push($dessertImage, $row['Image']);
    }	

}

$conn->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Desserts Menu</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Scripts/jQuery-ui-1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="CSS/default.css" />
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Merriweather";
            }
        </style>
    </head>

    <body style="border:0px;margin:0px;">
        <nav>
            <a href="index.html"><img src="img/logo_no_background.png" alt="logo" class="logo-image"></a>
            <div class="link-section">
                <ul>
                    <li><a href="delivery.html" id="nav_delivery">Delivery</a></li>
                    <li><a href="menu.php" id="nav_order">Order Online / Menus</a></li>
                    <li><a href="calendar.php" id="nav_reservation">Table Reservation</a></li>
                    <li><a href="covid.html" id="nav_covid19">COVID-19</a></li>
                </ul>
            </div>
            <a href="cartmanager.php"><img src="img/cart-icon.png" alt="cart-icon" class="icon"></a>
            <a href="login.php"><img src="img/user-icon.png" alt="user-icon" class="icon"></a>
        </nav>
        <div style="width:100%;height:100vh;background-image:url('background.jpg');background-repeat:no-repeat;background-size:100% 100%;">
            <div style="position:absolute;right:10px;top:5px;"><a href="CartManager.php"><img src="Images/Cart.png" style="width:32px;background-color:white;border:none;" /></a></div>
            <div data-menu-foods="true" style="float:right;width:50%;margin-top:20px;overflow:auto;" data-menu-bitton="true">
                <div style="width:500px;min-height:300px;background-color:white;opacity:0.9;margin:10px;border-radius:5px;border-color:forestgreen;padding:5px;">

                    <div>Desserts</div>
                    <?php	
                    foreach ($dessertItem as $element) 
                    {
                        echo "
					<div class=\"MenuItem\">
					<form action=\"AddProduct.php?type=Dessert&action=add\" method=\"post\">

					<input name=\"code\" type=\"hidden\" value=\"$index\" />
					<input name=\"name\" type=\"hidden\" value=\"$dessertItem[$count]\"/>
					<input name=\"price\" type=\"hidden\" value=\"$dessertPrice[$count]\" />

					<img style=\"float:left;width:30px\"; src=\"$dessertImage[$count]\" />
					<div style=\"float:left;width:50%;\">$element</div>
					<div style=\"float:left;\">$$dessertPrice[$count]</div>
					<div style=\"float:left;margin-left:10px;\">
					<select name=\"quantity\">
					<option value=\"1\">1</option>
					<option value=\"2\">2</option>
					<option value=\"3\">3</option>
					<option value=\"4\">4</option>
					<option value=\"5\">5</option>
					<option value=\"6\">6</option>
					</select>
					</div>
					<div style=\"float:left;margin-left:5px;\"><button type=\"submit\">Add to cart</button></div>
					</form>
					<div style=\"clear:both;\"></div>
					</div>";
                        $count++;
                        $index++;
                    }
                    ?>

                    <?php 
                    if (! empty($_GET["added"])) {
                        echo "<div class=\"MenuItem\" style='color:green;text-align:center;'>Added to cart!</div>";
                    }
                    ?>
                    <div style="text-align:center;">
                        <a href="Index.html">Return</a>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <script type="text/javascript" src="Scripts/jQuery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
        </script>
        <footer>
            <div class="footer-content">
                <div class="student-hub">Student Hub</div>

                <div class="footer-links">
                    <a href="socials.php" class="footer-links">Community</a>
                    <a href="aboutUs.html" class="footer-links">About Us</a>
                </div>


                <div class="social-links">
                    <a href="https://www.instagram.com/"><img src="https://www.flaticon.com/svg/static/icons/svg/87/87390.svg" alt="instagram"></a>
                    <a href="https://www.facebook.com/"><img src="https://www.flaticon.com/svg/static/icons/svg/2111/2111392.svg" alt="facebook"></a>
                </div>
            </div>
        </footer>
    </body>
</html>