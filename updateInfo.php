<!DOCTYPE html>
<html>
    <head>
        <title>Update Info</title>
        <style type="text/css">
            body
            {
                background-color: #53b58c;
            }

            .submit
            {
                width: 70px;
                font-weight: bolder;
                background-image: linear-gradient(#6ff2bc, #53b58c);
                padding: 10px;
                border-radius: 15px;
            }

            fieldset
            {
                border: 5px solid black;
            }

            legend
            {
                text-align: center;
                font-size: 30px;
            }
        </style>
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
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

        <fieldset>
            <legend>Update Info</legend>
            <form method="POST" action="updateProcess.php">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required>
                <div id="user"></div>
                <input type="submit" name="update" class="submit" id="update" value="update">
            </form><br>

            <form method="POST" action="updateProcess.php">
                <label for="oldPass">Old Password: </label>
                <input type="text" name="oldPass" id="oldPass" required><br>
                <label for="newPass">New Password: </label>
                <input type="text" name="newPass" id="newPass" required><br>
                <label for="confirmNewPass">Confirm New Password: </label>
                <input type="text" name="confirmNewPass" id="confirmNewPass" required><br>
                <div id="pass"></div>
                <input type="submit" name="update" class="submit" id="update" value="update">
            </form><br>

            <form method="POST" action="updateProcess.php">
                <label for="Email">Email: </label>
                <input type="text" name="Email" id="Email" required>
                <div id="email"></div>
                <input type="submit" name="update" class="submit" id="update" value="update">
            </form><br>
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