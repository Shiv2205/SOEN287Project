<?php
session_start();

class Product
{

    public $code;

    public $name;

    public $price;

    public $image;
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css"
              href="Scripts/jQuery-ui-1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="css/Default.css" />
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Merriweather";
            }
        </style>
    </head>
    <body style="border: 0px; margin: 0px;">
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

        <div
             style="width: 100%; height: 100vh; background-image: url('background.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
            <div
                 style="float: right; width: 50%; margin-top: 20px; overflow: auto;"
                 data-menu-bitton="true">
                <?php
                $totalPrice=0;
                if (! empty($_SESSION["cart_item"])) {
                    echo "<table class=\"CartManagerTable\">";
                    echo "  <tr>";
                    echo "      <td>Code</td>";
                    echo "      <td>Name</td>";
                    echo "      <td>Unit Price</td>";
                    echo "      <td>Quantity</td>";
                    echo "      <td>Price</td>";
                    echo "      <td>Delete</td>";
                    echo "  </tr>";

                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        echo "  <tr>";
                        echo "      <td>";
                        echo "          " . $_SESSION["cart_item"][$k]->code;
                        echo "      </td>";

                        echo "      <td>";
                        echo "          " . $_SESSION["cart_item"][$k]->name;
                        echo "      </td>";

                        echo "      <td>";
                        echo "          " . $_SESSION["cart_item"][$k]->price;
                        echo "      </td>";

                        echo "      <td>";
                        echo "          " . $_SESSION["cart_item"][$k]->quantity;
                        echo "      </td>";

                        echo "      <td>";
                        echo "          " . ($_SESSION["cart_item"][$k]->price * $_SESSION["cart_item"][$k]->quantity);
                        echo "      </td>";

                        echo "      <td>";
                        echo "          <a href=\"AddProduct.php?type=CartManager&action=remove&code=" . ($_SESSION["cart_item"][$k]->code)."\">remove</a>";
                        echo "      </td>";

                        echo "  </tr>";
                        $totalPrice +=$_SESSION["cart_item"][$k]->price * $_SESSION["cart_item"][$k]->quantity;
                    }
                    $_SESSION['totalPrice'] = $totalPrice;

                    echo "<tr><td colspan='4' align='right'>Total Price:</td><td>".$totalPrice."</td><td></td></tr>";
                    echo "</table>";
                    echo "<form action=\"AddProduct.php?action=empty\" method=\"post\">
				<button type=\"submit\">Clear All</button>
			</form>";

                }
                else{
                    echo "<div class='emptyCart' style='color:white; margin-top:10%;'>your cart is empty!</div>";
                }
                ?>


            </div>
            <div style="clear: both;"></div>
        </div>
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
        <script type="text/javascript" src="Scripts/jQuery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
        </script>
    </body>
</html>