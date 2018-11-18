<?php
include("../../../../functions/dbqueries.php");

$sql = "INSERT INTO products(
    strName,
    nPrice,
    nCategory,
    strDescription,
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
'".$_POST["nReviews"]."',
'".$_POST["nStars"]."', 
'".$_POST["nSizeID"]."',
'".$_POST["bFeatures"]."'
)";

$productId = runInsertSQL($sql); //insert into products

$values = '';
$i = 0;
while($i < count($_FILES['strImage']["name"])){	
	$bMainPhoto = ($i == $_POST['bMainPhoto'])?true:false;
	$value = (empty($values)?"('".$_FILES['strImage']["name"][$i]."', '".$productId."', '".$bMainPhoto."')":", ('".$_FILES['strImage']["name"][$i]."', '".$productId."', '".$bMainPhoto."')");
	$values .= $value;
	saveImgOnServer($_FILES['strImage']["name"][$i], $_FILES["strImage"]["tmp_name"][$i]);//save photo inside assets folder
	
	$i++;
}

$sql = "INSERT INTO photos(
    strFile,
    nProductID,
	bMainPhoto
)
VALUES ".$values;

runInsertSQL($sql); //relate photo and product (midle table)


$values = '';
foreach($_POST['nAdvantageID'] as $advantage){
	$value = (empty($values)?"('".$productId."', '".$advantage."')":", ('".$productId."', '".$advantage."')");
	$values .= $value;
}

$sql = "INSERT INTO 
			product_advantages(nProductID, nAdvantageID) 
		VALUES 
			".$values;
runInsertSQL($sql); //relate product and advantage

header("location: ../index.php?page=products");
?>