<?php
include('../../../functions/dbqueries.php');

session_start();
if (!isset($_SESSION["loggedUserId"])){
	include('views/adminLogin.php');
} else {
	include('views/cmsHeader-view.php');
?>
	<section id="dashboardContent">
<?php
	$page = (isset($_GET['page'])?$_GET['page']:'dashboard');
	include('views/'.$page.'-view.php');
	
?>
	</section>
<?php
	include('views/cmsFooter-view.php');
}
?>