<?php
include("../../../../functions/dbqueries.php");

$sql = "INSERT INTO products(
    strName,
    nPrice,
    nCategory,
    strDescription,
    strAdvantage,
    nReviews,
    nStars,
    nSizeID,
    bFeatures
)
VALUES (
'".$_POST["strName"]."',
'".$_POST["nPrice"]."', 
'".$_POST["nCategory"]."',
'".$_POST["strDescription"]."',
'".$_POST["strAdvantage"]."',
'".$_POST["nReviews"]."',
'".$_POST["nStars"]."', 
'".$_POST["nSizeID"]."',
'".$_POST["bFeatures"]."'
)";

$productId = runInsertSQL($sql); //insert into products

$sql = "INSERT INTO photos(
    strFile,
    nProductID
)
VALUES (
	'".$_FILES['strImage']["name"]."',
	".$productId."
)";
runInsertSQL($sql);

saveImgOnServer($_FILES['strImage']["name"],$_FILES["strImage"]["tmp_name"]);

// header("location: gallery.php");
?>