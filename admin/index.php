<?php
include('../../../functions/dbqueries.php');

session_start();
if (!isset($_SESSION["loggedUserId"])){
	include('views/adminLogin.php');
} else {
	include('views/cmsHeader-view.php');
	$page = (isset($_GET['page'])?$_GET['page']:'dashboard');
	include('views/'.$page.'-view.php');
	include('views/cmsFooter-view.php');
}
?>