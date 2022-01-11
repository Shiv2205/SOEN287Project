<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="Scripts/jQuery-ui-1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="CSS/default.css" />
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body{
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

        <div style="width:100%;height:100vh;background-image:url('background.jpg');background-repeat:no-repeat;background-size:100% 100%; padding-top:10%;">
            <div data-menu-foods="true" style="float:right;width:100%;margin-top:20px;overflow:auto;" data-menu-bitton="true">
                <a href="food.php" style="margin-left:45%;display:block;">
                    <div data-value="true" data-item-value="food" style="width:500px;height:300px;background-color:white;opacity:0.9;margin:10px;border-radius:5px;border-color:forestgreen;">
                        <img src="img/Menu/food.jpg" style="width:480px;height:230px;margin:10px;" />
                        <div style="text-align:center;font-size:2rem; text-decoration-style:none;">Food</div>
                    </div>
                </a>
                <a href="Dessert.php" style="margin-left:45%;display:block;">
                    <div data-value="true" style="width:500px;min-height:300px;background-color:white;opacity:0.9;margin:10px;border-radius:5px;border-color:forestgreen;">
                        <img src="img/Menu/dessert.jpg" style="width:480px;height:230px;margin:10px;" />
                        <div style="text-align:center;font-size:2rem;">Desserts</div>
                    </div>
                </a>
                <a href="Drink.php" style="margin-left:45%;display:block;">
                    <div data-value="true" style="width:500px;height:300px;background-color:white;opacity:0.9;margin:10px;border-radius:5px;border-color:forestgreen;">
                        <img src="img/Menu/drinks.jpg" style="width:480px;height:230px;margin:10px;" />
                        <div style="text-align:center;font-size:2rem;">Drinks</div>
                    </div>
                </a>
            </div>
            <div style="clear:both;"></div>
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
            $(document).ready(function () {
                $('button[data-menu-button="true"]').on('click', function () {
                    $('div[data-about-us="true"]').toggle(function () {
                        $('div[data-menu-button-container="true"]').toggle();
                        $('div[data-menu-foods="true"]').toggle(true);
                    });
                });
                $('div[data-value="true"]').on('click', function () {
                    var that = this;
                    $(this).fadeOut(function () {
                        $(that).next().fadeIn();
                    });
                });
                $('div[data-menu-foods="true"]').height($(window).height() - 40);
            });
        </script>
        <script>document.getElementById('nav_order').style.color = "#B1D8C8";</script>

    </body>
</html>