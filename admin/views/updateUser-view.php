<?php
include("../../../../functions/dbqueries.php");

runSQL("
	UPDATE
		users
	SET
		strFullName = '".$_POST["strFullName"]."',
		strUserName = '".$_POST["strUserName"]."',
		strPassword = '".$_POST["strPassword"]."'
		WHERE id=".$_POST["id"]);

// die;
header("location: ../index.php?page=users");
?>