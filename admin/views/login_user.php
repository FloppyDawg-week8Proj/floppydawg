<?php
include("../../../../functions/dbqueries.php");

$arrMyUser = runSelectSQL(
	"SELECT * FROM users 
	WHERE strUserName='".$_POST["strUserName"]."'")[0];


if (password_verify($_POST["strPassword"] , $arrMyUser['strPassword']))
{
	session_start();
	$_SESSION["loggedUserId"]=$arrMyUser["id"];
	
	header("location: ../index.php?page=dashboard");
} else if(!password_verify($_POST["strPassword"] , $arrMyUser['strPassword'])) {
	header("location: adminLogin.php?error=true");
}

?>