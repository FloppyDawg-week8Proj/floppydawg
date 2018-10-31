<?php
include("../../ecomm-connect/dbqueries.php");
include("libs/DB.php");
include("Model/Product.php");
include("Model/Products.php");
include("Model/Cart.php");
include("Model/Purchase.php");
include("Model/Member.php");
include("Controller/MainController.php");
include("Controller/CartController.php");
include("Controller/CheckoutController.php");
session_start();
//session_destroy();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"main";
$action = (isset($_GET["action"]))	?$_GET["action"]:"home";

$controllerName = ucfirst($controller)."Controller"; // creates MainController
$oController = new $controllerName(); // new MainController();

$oController->$action();

?>