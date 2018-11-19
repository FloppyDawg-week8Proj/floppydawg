<?php
include("../../../../functions/dbqueries.php");

//update product information in products table
$sql = "UPDATE 
			products
		SET
			strName = '".$_POST["strName"]."',
			nPrice = '".$_POST["nPrice"]."', 
			nCategory = '".$_POST["nCategory"]."',
			strDescription = '".$_POST["strDescription"]."',
			nReviews = '".$_POST["nReviews"]."',
			nStars = '".$_POST["nStars"]."', 
			nSizeID = '".$_POST["nSizeID"]."',
			bFeatures = '".$_POST["bFeatures"]."'
		WHERE 
			id=".$_POST["id"];
runSQL($sql); //Update product


//update product photos
if(!empty($_FILES['strImage']['name'][0])){
	$values = '';
	$i = 0;
	while($i < count($_FILES['strImage']["name"])){	
		$bMainPhoto = ($i == $_POST['bMainPhoto'])?true:false;
		$value = (empty($values)?"('".$_FILES['strImage']["name"][$i]."', '".$_POST["id"]."', '".$bMainPhoto."')":", ('".$_FILES['strImage']["name"][$i]."', '".$_POST['id']."', '".$bMainPhoto."')");
		$values .= $value;
		
		saveImgOnServer($_FILES['strImage']["name"][$i], $_FILES["strImage"]["tmp_name"][$i]);//save photo inside assets folder

		$i++;
	}
	
	//Delete all old photos for this product
	$sql = "DELETE FROM photos WHERE nProductID=".$_POST['id'];
	runSQL($sql);//ther is a beter way to do this updating just the photo that you want but this current way is more simple
	
	
	//Insert the new photos for this product
	$sql = "INSERT INTO photos(
		strFile,
		nProductID,
		bMainPhoto
	)
	VALUES ".$values;
	runInsertSQL($sql); //relate photo and product (midle table)
}
if(!empty($_POST['nAdvantageID'])){
	$values = '';
	foreach($_POST['nAdvantageID'] as $advantage){
		$value = (empty($values)?"('".$_POST['id']."', '".$advantage."')":", ('".$_POST['id']."', '".$advantage."')");
		$values .= $value;
	}
	//Delete all old advantages for this product
	$sql = "DELETE FROM product_advantages WHERE nProductID=".$_POST['id'];
	runSQL($sql);//ther is a beter way to do this updating just the photo that you want but this current way is more simple


	//Insert the new photos for this product
	$sql = "INSERT INTO 
				product_advantages(nProductID, nAdvantageID) 
			VALUES 
				".$values;
	runInsertSQL($sql); //relate product and advantage
}
print_r($_FILES);
die;
//header("location: ../index.php?page=products");
?>