
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8"/>
        <title>Table reservation</title> 

        <link rel="stylesheet" href="style1.css">
    </head>
    <style>
        body{
            background: url("img/pic5.png")  no-repeat fixed center;
            width:100%;
            height:100%;
        }
    </style>
    <link rel="stylesheet" href="css/styles6.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Merriweather";
        }
    </style>
    <body>
        <?php
        session_start();
        ?>

        <?php 
        if(isset($_POST["back1"])){
            header('Location:calendar.php');
        }
        if(isset($_POST["submit"])){
            $_SESSION["submit"] =$_POST['submit'];


            $array=file("tablereservation.txt");

            if(isset($array[0])){
                $array1=explode("\t",$array[0]);


                if($_SESSION["date"]==$array1[2])
                    if($_SESSION["time"]==$array1[3])
                        if($_SESSION["submit"]==$array1[0]){
                            $p4="Taken Table.Choose another table.";

                        }
                else
                    header('Location:process.php');
                else
                    header('Location:process.php');
                else
                    header('Location:process.php');


            }
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
            <a href="checkout.php"><img src="img/cart-icon.png" alt="cart-icon" class="icon"></a>
            <a href="login.php"><img src="img/user-icon.png" alt="user-icon" class="icon"></a>
        </nav>

        <h1 style="margin-top: 10%;">Table Reservation</h1>
        <style>body{background-color: white;}</style>
        <form method="post">
            <div class="container">

                <img src="img/p1.jpg" alt="Trulli" width="100%" height="100%" >
                <input type="submit" name="submit" class="btn" style="top: 13%; left:6%; width:25%;
                                                                      height:15%;" value="1"/>
                <input type="submit" name="submit"  class="btn" style="top: 13%; left:33%; width:15%;
                                                                       height:15%;" value="2"/>
                <input type="submit" name="submit"  class="btn" style="top: 12%; left:46%; width:15%;
                                                                       height:15%;" value="3"/>
                <input type="submit" name="submit"  class="btn" style="top: 12%; left:60%; width:15%;
                                                                       height:15%;" value="4"/>
                <input type="submit" name="submit"  class="btn" style="top: 32%; left:10%; width:15%;
                                                                       height:15%;" value="5"/>
                <input type="submit" name="submit"  class="btn" style="top: 32%; left:36%; width:15%;
                                                                       height:15%;" value="6"/>
                <input type="submit" name="submit"  class="btn" style="top: 32%; left:52%; width:15%;
                                                                       height:15%;" value="7"/>
                <input type="submit" name="submit"  class="btn" style="top: 35%; left:70%; width:15%;
                                                                       height:25%;" value="8"/>
                <input type="submit" name="submit"  class="btn" style="top: 35%; left:87%; width:15%;
                                                                       height:25%;" value="9"/>
                <input type="submit" name="submit"  class="btn" style="top: 55%; left:10%; width:15%;
                                                                       height:25%;" value="10"/>
                <input type="submit" name="submit"  class="btn" style="top: 55%; left:28%; width:15%;
                                                                       height:25%;" value="11"/>
                <input type="submit" name="submit"  class="btn" style="top: 55%; left:47%; width:15%;
                                                                       height:25%;" value="12"/>
                <input type="submit" name="submit"  class="btn" style="top: 55%; left:63%; width:10%;
                                                                       height:25%;" value="13"/>
                <input type="submit" name="submit"  class="btn" style="top: 58%; left:75%; width:15%;
                                                                       height:25%;" value="14"/>
                <input type="submit" name="back1" value="back" style="text-align: center; margin-left:25%; "/>
            </div>
        </form>
        <h3 style="color:red; text-align:center;">
            <?php
            if(isset($_POST["submit"])&&isset($array1[0])){
                echo $p4;
            }
            ?>  
        </h3>
        <footer>
            <div class="footer-content">
                <div class="student-hub">Student Hub</div>

                <div class="footer-links">
                    <a href="socials.php" class="footer-links">Community Page</a>
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
