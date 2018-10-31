<?php
include("../../../../functions/dbqueries.php");
$hashpass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);
$sql = "INSERT INTO members (
		strFirstName,
		strLastName,
		strStreetAddress,
		strZipCode,
		strEmail,
		strPassword
		)

		VALUES (
		'".$_POST["strFirstName"]."',
		'".$_POST["strLastName"]."',
		'".$_POST["strStreetAddress"]."',
		'".$_POST["strZipCode"]."',
		'".$_POST["strEmail"]."',
		'".$hashpass."'
		)";

runInsertSQL($sql);
header("location: ../index.php?page=members");
?>