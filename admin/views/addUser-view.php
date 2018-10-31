<?php
include("../../../../functions/dbqueries.php");

$error = ($_POST["strFullName"] && $_POST["strUserName"] && $_POST["strPassword"])?false:true;


$sql = "INSERT INTO users (
		strFullName, 
		strUserName,
		strPassword
		) 

	VALUES (
		'".$_POST["strFullName"]."', 
		'".$_POST["strUserName"]."',
		'".$_POST["strPassword"]."'
		
	)";
	runInsertSQL($sql);
	
include("userList-view.php");
?>