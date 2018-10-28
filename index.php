<?php
//include("Libs/DBFact.php");
//include("Libs/DB.php");
//include("Libs/Cart.php");
//include("Models/Categories.php");
//include("Models/Products.php");
//include("Models/Product.php");
//include("Models/Category.php");
include("Controller/MainController.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"main";
$action = (isset($_GET["action"]))	?$_GET["action"]:"home";

$controllerName = ucfirst($controller)."Controller"; // creates MainController
$oController = new $controllerName(); // new MainController();

$oController->$action();

?>
<!--

include("Views/header-view.php");

include("Views/".$pageOnWork.".php");

include("Views/footer-view.php");-->
