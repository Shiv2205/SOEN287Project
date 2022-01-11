<?php
session_start();
class Product
{

    public $code;

    public $name;

    public $price;

    public $image;
    
    public $quantity=0;
}
$action="";
$redirectTo ="CartManager";
if (! empty($_GET["type"])){
    $redirectTo = $_GET["type"];
}
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {

                $object = new Product();
                $object->name = $_POST["name"];
                $object->code = $_POST["code"];
                $object->price = $_POST["price"];
                $object->quantity=$_POST["quantity"];
                $productByCode = array(
                    $object
                );

                
                $itemArray = array($object);
                if (! empty($_SESSION["cart_item"])) {
                    $found=false;
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        if ($productByCode[0]->code == $_SESSION["cart_item"][$k]->code) {
                            if (empty($_SESSION["cart_item"][$k]->quantity)) {
                                $_SESSION["cart_item"][$k]->quantity = 0;
                            }
                            $_SESSION["cart_item"][$k]->quantity += $_POST["quantity"];
                            $found=true;
                        }
                    }
                    if ($found==false){
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
               
            }
            $action="added";
            break;
        case "remove":
            if (! empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $_SESSION["cart_item"][$k]->code)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            $action="removed";
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            $action="cleared";
            break;
    }
    header("Location: ".$redirectTo.".php?".$action."=true");
    exit;
}
?>