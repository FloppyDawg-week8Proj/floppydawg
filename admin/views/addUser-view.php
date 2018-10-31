<?php
include("../../../../functions/dbqueries.php");

$error = ($_POST["strFullName"] && $_POST["strUserName"] && $_POST["strPassword"])?false:true;
$hashpass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (
		strFullName, 
		strUserName,
		strPassword
		) 

	VALUES (
		'".$_POST["strFullName"]."', 
		'".$_POST["strUserName"]."',
		'".$hashpass."'
		
	)";
	runInsertSQL($sql);
	
include("userList-view.php");
?>