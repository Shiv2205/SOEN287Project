<!DOCTYPE html>
<html>
    <head>
        <title>AdminUI</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type = "text/css" href = "css/styles6.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Merriweather";
            }
        </style>
    </head>
    <body>
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
        <div class="welcome">

            <h1>Welcome to your Administration Page</h1>

        </div>
        <fieldset class="modify-menu functionality">
            <legend>Which menu would you like to modify?</legend><br>

            <a href="foodUI.php"><input type="submit" name="food" id="food" class="inputField" value="Food Menu"></a><br><br>
            <a href="drinksUI.php"><input type="submit" name="drinks" id="drinks" class="inputField" value="Drinks Menu"></a><br><br>
            <a href="dessertUI.php"><input type="submit" name="dessert" id="dessert" class="inputField" value="Dessert Menu"></a><br><br>
        </fieldset><br>

        <form method="POST" action="PHPMailerTemplate/mailerTemplate.php" class="email-sender">
            <fieldset class="send-email functionality">
                <legend>Send Automated emails to all users:</legend><br>

                <!-- <label for="email" class="label">Send Automated emails to all users:</label><br> -->
                <input type="text" name="subject" id="subject" class="subject" placeholder="Subject" required><br><br>
                <textarea name="email" id="email" class="textarea" rows="5" cols="40" required></textarea><br><br>
                <div class="buttons">
                    <input type="submit" name="submit" id="submit" class="button" value="Send Email">
                    <input type="reset" name="reset" id="reset" class="button" value="Clear"><br><br>                   
                </div>

            </fieldset>
        </form>

        <!--Bottom Navigation Bar-->

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