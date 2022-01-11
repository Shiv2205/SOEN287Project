<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/styles6.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Merriweather";
            }
        </style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

        <div class="welcome-view social-page-background-image ">
            <h1>Join Our Community!</h1>
        </div>
        <div class="section" id="events">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subheading">Events</h2>
                        <div class="titleline"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="social">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subheading">Social</h2>
                        <div class="titleline"></div>
                    </div>
                </div>
                <div class="row mt1">
                    <div class="col-md-12">
                        <!-- SnapWidget for instagram feed-->
                        <script src="https://snapwidget.com/js/snapwidget.js"></script>
                        <iframe src="https://snapwidget.com/embed/895300" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="    margin-top: 3em;border:none; overflow:hidden;  width:100%; "></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subheading">Book Event</h2>
                        <div class="titleline"></div>
                    </div>
                </div>
                <?php
                if(isset($_POST['sub'])){
                    $to = "somebody@example.com, somebodyelse@example.com";
                    $subject = "HTML email";

                    $message = "
					<div ><h3>Booking</div>
					<div style='margin-top:3em'><h3>Booking</div>
					<div style='margin-top:1em'><b>Name: </b>".$_POST['fname']."</div>
					<div style='margin-top:1em'><b>Email: </b>".$_POST['mail']."</div>
					<div style='margin-top:1em'><b>Event Name: </b>".$_POST['ename']."</div>
					<div style='margin-top:1em'><b>Extra Details: </b>".$_POST['edetails']."</div>
					";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    // More headers
                    $headers .= 'From: <webmaster@example.com>' . "\r\n";
                    $headers .= 'Cc: myboss@example.com' . "\r\n";

                    mail($to,$subject,$message,$headers);
                }
                ?>
                <div class="row mt3">
                    <div class="col-md-12">
                        <form method="post" action="#">
                            <input type="text" class="form-control" name="fname" placeholder="Full Name" required/>
                            <input type="text" class="form-control" name="mail" placeholder="Email" required/>
                            <input type="text" class="form-control" name="ename" placeholder="Event Name" required/>
                            <textarea class="form-control" name="edetails" placeholder="Extra Details"></textarea>
                            <input type="text" name="sub" class="btn btn-success" value="Submit"/>
                        </form>
                    </div>
                </div>
            </div>
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
    </body>		
</html>
