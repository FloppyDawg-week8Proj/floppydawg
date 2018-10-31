<?php
include("../../../../functions/dbqueries.php");

$arrMyUser = runSelectSQL(
	"SELECT * FROM users 
	WHERE strUserName='".$_POST["strUserName"]."' AND strPassword='".$_POST["strPassword"]."'")[0];

if (isset($arrMyUser))
{
	session_start();
	$_SESSION["loggedUserId"]=$arrMyUser["id"];
	
	header("location: dashboard-view.php");
} else if(!isset($arrMyUser)) {
	header("location: adminLogin-view.php?error=true");
}

?>