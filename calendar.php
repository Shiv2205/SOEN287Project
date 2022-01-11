
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8"/>
        <title>Table reservation</title> 
        <script type = "text/javascript"  src = "tel.js" ></script>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Merriweather";
            }
        </style>
    </head>
    <style>
        body{
            background: url("img/Untitled design (11).png")  no-repeat fixed center;
            width:100%;
            height:100%;
        }
    </style>
    <body>
        <?php

        session_start();
        session_destroy();
        session_start();


        ?>
        <?php


        if(isset($_POST['submit1']) ){


            if (empty($_POST['guest'])||empty($_POST['date'])||empty($_POST['time'])){
                $error=TRUE;
                $p1=" Fill in the boxes!";
            }
            else{
                $error=FALSE;  
            }

            if($error==FALSE){
                $_SESSION["name"] = $_POST['name'];
                $_SESSION["tel"] = $_POST['tel'];
                $_SESSION["guest"] = $_POST['guest'];
                $_SESSION["date"] = $_POST['date'];
                $_SESSION["time"] = $_POST['time'];

                header('Location:table.php');

            }
        }
        else{
            $p1="";
        }

        ?>
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
        <img src="img/pic4.png" alt="Trulli" width="100%" height="100%">

        <form method="post"> 
            <fieldset style="background-color: grey;">
                <legend><h1 style="color: white;">Reservation</h1></legend>
                <table class="" id=""border=0 style="width:100%" >
                    <tr>
                        <th>Name*</th>
                        <th>Phone Number*</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="name"value=""size="10" ></td>
                        <td colspan="2"><input type="text" name="tel" id="tel"value=""size="10"></td>
                    </tr>
                    <tr>
                        <th>Number of guests*</th>
                        <th>Date*</th>
                        <th>Time*</th>
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="guest" id="guest" value="" >
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                        <td>
                            <input type="date" name="date"value=""size=50>
                        </td>
                        <td>
                            <select class="" name="time" id="time" value="" >
                                <option value=""></option>
                                <option value="11:00AM">11:00AM</option>
                                <option value="12:00AM">12:00AM</option>
                                <option value="1:00PM">1:00PM</option>
                                <option value="2:00PM">2:00PM</option>
                                <option value="3:00PM">3:00PM</option>
                                <option value="4:00PM">4:00PM</option>
                                <option value="5:00PM">5:00PM</option>
                                <option value="6:00PM">6:00PM</option>
                            </select>
                        </td>
                    </tr>

                </table>
                <p style="color:red; font-style:italic; ">
                    <?php
                    if(isset($_POST['submit1']) )
                        echo $p1;
                    ?></p>
                <br>
                <br>
                <div style="text-align:center">  
                    <input type="submit" name="submit1"  value="FIND A TABLE"  <?php if($error == FALSE){ echo "onclick='main()'";} else echo"'main()'"; ?>style="width:25%"/>
                </div>
            </fieldset>
        </form>

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
        <script>document.getElementById('nav_reservation').style.color = "#B1D8C8";</script>

    </body>
</html>
