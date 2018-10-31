<?php
include("../../../../functions/dbqueries.php");

$arrMyUser = runSelectSQL(
	"SELECT * FROM users 
	WHERE strUserName='".$_POST["strUserName"]."'")[0];

if (password_verify($_POST["strPassword"], $arrMyUser['strPassword'] ))
{
	session_start();
	$_SESSION["loggedUserId"]=$arrMyUser["id"];
	
	header("location: ../index.php?page=dashboard");
} else if(!isset($arrMyUser)) {
	header("location: adminLogin-view.php?error=true");
}

?>