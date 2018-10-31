<?php
include("../../../../functions/dbqueries.php");

runSQL("
	UPDATE
		products
	SET
		strName = '".$_POST["strName"]."',
		nPrice = '".$_POST["nPrice"]."',
		nReviews = '".$_POST["nReviews"]."',
		nStars = '".$_POST["nStars"]."',
		strDescription = '".$_POST["strDescription"]."',
		strAdvantage = '".$_POST["strAdvantage"]."',
		nSizeID = '".$_POST["nSizeID"]."'
		WHERE id=".$_POST["id"]);
 header("location: ../index.php?page=products");
?>