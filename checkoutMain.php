<!DOCTYPE html>
<html>
    <head>
        <title>Google Form</title>
        <!-- style -->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <style>
            body{
                font-family: "Merriweather";
            }
        </style>
    </head>
    <body>

        <!--Css implementation-->
        <style type="text/css">
            #form {
                padding: 25px 50px 25px 50px;
                background-color: rgb(230, 247, 237);
            }
            img{
                align-items: center;
            }
            #errror{
                color: rgb(166, 10, 23);
            }
            #success{
                color: rgb(28, 120, 66);
            }
            #maintitle{
                color: black;
                font-size: 40px;
                text-align: center;
                margin-top: 150px;
            }
            #subtitle
            {
                color: black;
            }
            table{
                margin-left: 250px;
                margin-right: 150px;
            }


        </style>



        <!--Top Navigation Bar-->
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

        <!--Main title-->
        <h2 id="maintitle">Checkout</h2>

        <!--Table to keep everything organized-->
        <table>
            <tr>
                <td>
                    <!--Main image-->
                    <img src="img/photo-1556742031-c6961e8560b0.jpeg">
                </td>

                <!--Form-->
                <td id="form">

                    <form action="checkoutProcess.php" method="POST">


                        <!--Order Info-->
                        <h3 id="subtitle">Your order total:</h3>

                        <?php
                        // session_start();
                        $possDel = $_COOKIE['possible_delivery'];
                        $delFee = $_COOKIE['delivery_fee'];
                        $finalPrice = 4;

                            // var_dump($_SESSION['totalPrice']);

                        if(!empty($_SESSION['totalPrice'])){


                            echo "Order subtotal: " . $_SESSION['totalPrice'];
                            echo "<br>";
                            if (($possDel == 1) && ($delFee == 1))
                            {
                                echo "+Delivery fee: 8$ ";
                                echo "<br>";
                                echo "---------------";
                                echo "<br>";
                                echo "Total = " . ($_SESSION['totalPrice'] + 8) . "$";
                                echo "<br>";
                                $finalPrice = ($_SESSION['totalPrice'] + 8);
                            }
                            if (($possDel == 1) && ($delFee == 0))
                            {
                                echo "+Delivery fee: 0$ ";
                                echo "<br>";
                                echo "---------------";
                                echo "<br>";
                                echo "Total = " . $_SESSION['totalPrice'];
                                echo "<br>";
                                $finalPrice = ($_SESSION['totalPrice']);
                            }

                            if (($possDel == 0))
                            {
                                echo "+Delivery fee: 0$ (We can't deliver to your address) ";
                                echo "<br>";
                                echo "---------------";
                                echo "<br>";
                                echo "Total = " . $_SESSION['totalPrice'];
                                echo "<br>";
                                $finalPrice = ($_SESSION['totalPrice']);
                            }

                            //sending final price to mail service
                            $_SESSION['finalPrice'] = $finalPrice;
                        }
                        ?>

                        <!-- Method of payment-->
                        <br>
                        <label>Please select method of payment: </label>
                        <br>
                        <select name="methodOfPayment">
                            <option value="null">Method of payment</option>
                            <option value="visa(debit)">Visa (debit)</option>
                            <option value="visa(credit)">Visa (credit)</option>
                            <option value="mastercard">MasterCard </option>
                            <option value="americanExpress">American Express</option>
                            <option value="paypal">Paypal</option>
                        </select>
                        <br><br>

                        <!--Email-->
                        <label>Please enter your email address</label>
                        <br>
                        <input type="text" placeholder="Username@mail.com" size="32" name="email" value="<?php if(!empty($email)) echo $email;?>">
                        <br><br>

                        <!--Card details-->
                        <label>Please enter your card number</label>
                        <br>
                        <input type="text" placeholder="#### #### #### ####" size="32" name="card" value="<?php if(!empty($card)) echo $card;?>">
                        <br>
                        <br>
                        <label>Please enter expiry date</label>
                        <br>
                        <select name="month">
                            <option value="null">Month</option>
                            <option value="januray">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="Novemeber">Novemeber</option>
                            <option value="December">December</option>
                        </select>

                        <select name="year">
                            <option value="null">Year</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                        <br>
                        <br>
                        <label>Please enter Name on Card</label>
                        <br>
                        <input type="text" placeholder="First Name" size="15" name="firstName" value="<?php if(!empty($fname)) echo $fname;?>">
                        <input type="text" placeholder="Lat Name" size="15" name="lastName" value="<?php  if(!empty($lname)) echo $lname;?>">
                        <br><br>

                        <!--Submit-->
                        <button type="button" onclick="location.href='cartmanager.php';">Review Order </button>
                        <input type="submit" name="submit" value="Place Order!">

                        <!--if missing fileds-->
                        <br>
                        
                        
                        <label id="errror"> <?php if(isset($validate1)){if ($validate1 == true){ echo "One or more fields are missing! Please try again";}} ?> </label>
                        <br>

                        <!--if all good-->
                        <label id="success"> <?php if(isset($validate1)){if ($validate2 == true){ echo "Your order has been placed, A confirmation email has been sent. Estimated delivery time: 30 minutes";}}?></label> 

                        <?php
                        $validate2 = false;
                        $validate1 = false;
                        ?>
                        <br>
                        <br>


                    </form>
                </td>
            </tr>
        </table>





        <!--Bottom Navigation Bar-->
        <footer>
            <div class="footer-content">
                <div class="student-hub">Student Hub</div>

                <div class="footer-links">
                    <a href="socials.html" class="footer-links">Community Page</a>
                    <a href="aboutUs.html" class="footer-links">About Us</a>
                    <a href="contactUs.html" class="footer-links">Contact Us</a>
                </div>


                <div class="social-links">
                    <a href=""><img src="https://www.flaticon.com/svg/static/icons/svg/87/87390.svg" alt="instagram"></a>
                    <a href=""><img src="https://www.flaticon.com/svg/static/icons/svg/2111/2111392.svg" alt="facebook"></a>


                </div>

            </div>
        </footer>
        <script>document.getElementById('nav_delivery').style.color = "#B1D8C8";</script>


    </body>
</html> 