<?php
include("../../../../functions/dbqueries.php");

runSQL("
		UPDATE 
			members
		SET
			strFirstName = '".$_POST['strFirstName']."',
			strLastName = '".$_POST['strLastName']."',
			strStreetAddress = '".$_POST['strStreetAddress']."',
			strZipCode = '".$_POST['strZipCode']."',
			strEmail = '".$_POST['strEmail']."',
			strPassword = '".$_POST['strPassword']."'
			WHERE id='".$_GET["id"]."'");

		header("location: members-view.php");
?>