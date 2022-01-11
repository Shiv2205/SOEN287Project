<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <a href="index.html"><img src="img/logo_no_background.png" alt="logo" class="logo-image"></a>
        <fieldset style="border: 5px solid black; padding-bottom: 50px;">
            <legend style="text-align: center;"><h2><?php //session_start(); 
                echo 'Welcome ' . $_SESSION['firstName'] . '!';?></h2></legend>
            <form action="URL to form script" method="POST">

                <div style="font-size: 30px;">
                    Username: 
                    <?php
                    echo " " . $_SESSION['username'];
                    ?>
                </div>

                <br>

                <div style="font-size: 30px;">
                    Your email: 
                    <?php
                    switch($_SESSION['email'])
                    {
                        case '':
                            {
                                echo '<input type="text" name="email" id="email"><input type="submit" name="submit" value="update" formmethod="POST" formaction="updateEmail.php"><br>';
                                break;
                            }
                        default:
                            {
                                echo $_SESSION['email'];
                                break;
                            }
                    }
                    ?>
                </div>
                <br>

            </form>
        </fieldset>
        <a href="updateInfo.php"><input type="submit" name="submit" class="submit" value="Update" formaction="updateInfo.php"></a>

        <fieldset style="border: 5px solid black; padding-bottom: 10px; margin-top: 30px;">
            <legend style="text-align: center; font-size: 40px;">Send Us An Email!</legend>
            <form method="POST" action="PHPMailerTemplate/userMail.php">
                <textarea placeholder="Tell us what you thought about our restaurant..." name="mail" style="width: 700px; height: 250px;"></textarea>
                <input type="submit" name="submit" class="submit" value="Send">
            </form>
        </fieldset>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

            body
            {
                /*background-image: url(v481-bb-ning-11_1.jpg);*/
                background-color: #53b58c;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
                margin-bottom: -400px;
            }

            .bottom-page-info{background-color: #7EA595; margin-top: 400px; padding: 10px; text-align: center;}
            .bottom-page-link{color: #B8F2DA;}

            .submit
            {
                width: 70px;
                font-weight: bolder;
                background-image: linear-gradient(#6ff2bc, #53b58c);
                padding: 10px;
                border-radius: 15px;
            }

            .fa {
                padding: 20px;
                font-size: 30px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }

            .fa-google {
                background: #dd4b39;
                color: white;
            }


            .fa-instagram {
                /*background: #125688;*/
                background-image: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045);
                color: white;
            }


            .fa-snapchat-ghost {
                background: #fffc00;
                color: white;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }

            li
            {
                font-size: 30px;
                padding-bottom: 10px;
            }



        </style>
    </head>
    <body>

        <br><br>
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
