<?php
session_start();


?>
<?php
if(isset($_POST["back"])){
    header('Location:calendar.php');
}
$p= "Your  table is reserved.";
$name=$_SESSION["name"];
$tel=$_SESSION["tel"];
$table=$_SESSION["submit"];
$guest=$_SESSION["guest"];
$date=$_SESSION["date"];
$time=$_SESSION["time"];
$myfile = fopen("tablereservation.txt", "w") or die("Unable to open file!");
$txt = $table."\t".$guest."\t".$date."\t".$time."\t".$table."\t".$name."\t".$tel."\n";

fwrite($myfile, $txt);
fclose($myfile);
?>
<html>
    <link rel="stylesheet" href="css/styles6.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Merriweather";
        }
    </style>
    <style>
        body{
            background: url("img/pic6.png")  no-repeat fixed center;
            width:100%;
            height:100%;
        }
    </style>
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
        <div style="width:600px;height:300px;background-color:white;opacity:0.9;background-position:center center; ;margin-top: 10%;border-radius:5px;border-color:forestgreen;  position: absolute; left:50%;  " >
            <div style="margin-left: 10px">
                <form method="post">
                    <h1><?php echo $p ?></h1>
                    <p><?php echo "Hi ".$name."<br>Your table has been reserved for ".$guest." guests on ".$date.". See you at ".$time."."; ?></p>
                    <input type="submit" name="back" value="Change Reservation" style="width:30%"  />
                </form>
            </div>
        </div>
        <script>document.getElementById('nav_reservation').style.color = "#B1D8C8";</script>

    </body>
</html>