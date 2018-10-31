<?php
include("../../../../functions/dbqueries.php");

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
		'".$_POST["strPassword"]."'
		)";

runInsertSQL($sql);
header("location: ../index.php?page=members");
?>