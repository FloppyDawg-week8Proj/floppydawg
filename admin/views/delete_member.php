<?php
include("../../../../functions/dbqueries.php");

	$sql = "DELETE FROM members WHERE id='".$_GET["id"]."'";
	runDeleteSQL($sql);

	header("location: members-view.php");
?>
