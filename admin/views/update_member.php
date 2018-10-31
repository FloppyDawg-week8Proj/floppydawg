<?php
include("../../../../functions/dbqueries.php");
$hashpass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);
runSQL("
		UPDATE 
			members
		SET
			strFirstName = '".$_POST['strFirstName']."',
			strLastName = '".$_POST['strLastName']."',
			strStreetAddress = '".$_POST['strStreetAddress']."',
			strZipCode = '".$_POST['strZipCode']."',
			strEmail = '".$_POST['strEmail']."',
			strPassword = '".$hashpass."'
			WHERE id='".$_GET["id"]."'");

		header("location: ../index.php?page=members");
?>