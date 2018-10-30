<?php
Class Product
{
	static function getProduct($productID)
	{
		$sql = "SELECT products.*, categories.strName as categoryName FROM (products LEFT JOIN categories ON categories.id=products.nCategory) WHERE products.id=$productID";
		return DB::getRecord()->runSQL("getSingleData", $sql);
	}
	static function saveNew($arrNewProduct){
		$sql = "INSERT INTO products(
			'strName',
			'nPrice',
			'nCategory',
			'strDescription',
			'strAdvantage',
			'strImage',
			'nImageID',
			'nReviews',
			'nStars',
			'nSizeID',
			'bFeatures')
		VALUES ('
			".$arrNewProduct['strName'].",
			".$arrNewProduct['nPrice'].",
			".$arrNewProduct['nCategory'].",
			".$arrNewProduct['strDescription'].",
			".$arrNewProduct['strAdvantage'].",
			".$arrNewProduct['strImage'].",
			".$arrNewProduct['nImageID'].",
			".$arrNewProduct['nReviews'].",
			".$arrNewProduct['nStars'].",
			".$arrNewProduct['nSizeID'].",
			".$arrNewProduct['bFeatures'].")";
		return DB::getRecord()->runSQL("insertNew", $sql);
	}
		static function edit($arrEditProduct){
		$sql = "UPDATE
					products
				SET 
					'strName'='".$arrEditProduct["strName"]."',
					'nPrice'='".$arrEditProduct["nPrice"]."',
					'nCategory'='".$arrEditProduct["nCategory"]."',
					'strDescription'='".$arrEditProduct["strDescription"]."',
					'strAdvantage'='".$arrEditProduct["strAdvantage"]."',
					'strImage'='".$arrEditProduct["strImage"]."',
					'nImageID'='".$arrEditProduct["nImageID"]."',
					'nReviews'='".$arrEditProduct["nReviews"]."',
					'nStars'='".$arrEditProduct["nStars"]."',
					'nSizeID'='".$arrEditProduct["nSizeID"]."',
					'bFeatures='".$arrEditProduct["bFeatures"].",
				WHERE products.id = ".$arrEditProduct['id']."";
		return DB::getRecord()->runSQL("edit", $sql);
	}
	static function delete($productID){
		$sql = "DELETE FROM products WHERE id=$productID";
		return DB::getRecord()->runSQL("delete", $sql);
	}
}
?>