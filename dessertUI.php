<!DOCTYPE html>
<html>
    <head>
        <title>dessertUI</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type = "text/css" href = "css/styles6.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Merriweather";
            }
        </style>
    </head>
    <body>
        <div class="welcome">

            <h1>Change your menu</h1>

        </div>
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

        <fieldset class="UI-wrapper">
            <legend>Updating Desserts Menu:</legend><br>

            <form method="POST" action="updateDessertMenu.php">
                <table class="table-UI">
                    <tr>
                        <td><label for="itemName">Product Name: </label></td>
                        <td><input type="text" name="itemName" id="itemName" required></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price($): </label></td>
                        <td><input type="text" name="price" id="price" required></td>
                    </tr> 
                    <tr>
                        <td><label for="description">Description: </label></td>
                        <td><textarea id="description" name="description" rows="2" cols="20" required></textarea></td>
                    </tr> 
                    <tr>
                        <td><label for="image">Image Link: </label></td>
                        <td><input type="text" id="image" name="image" required></td>
                    </tr>
                </table>





                <input type="reset" name="reset" id="reset" value="Clear" class="UI-buttons">
                <input type="submit" name="submit" id="submit" value="Confirm" class="UI-buttons">
            </form>

            <br><br>

            <a href="removeDessert.php">Remove dessets from the Dessert menu</a>
            <a href="AdminUI.php">Go Back to Admin UI</a>
        </fieldset>
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