<?php
include("../../ecomm-connect/dbqueries.php");
include("libs/DB.php");
include("Controller/MainController.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"main";
$action = (isset($_GET["action"]))	?$_GET["action"]:"home";

$controllerName = ucfirst($controller)."Controller"; // creates MainController
$oController = new $controllerName(); // new MainController();

$oController->$action();

?>