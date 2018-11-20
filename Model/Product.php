<?php
Class Product
{
	static function getProductToCart($productID)
	{
		$sql = "SELECT products.id, products.strName, products.nPrice, photos.strFile FROM products LEFT JOIN photos ON photos.nProductID=products.id WHERE products.id=$productID AND photos.bMainPhoto=1";
		$productDetails = DB::getRecord()->runSQL("getSingleData", $sql);
		
		return $productDetails;
	}
	static function getProduct($productID)
	{
		
		$sql = "SELECT products.*, photos.strFile FROM products LEFT JOIN photos ON photos.nProductID=products.id WHERE products.id=$productID AND photos.bMainPhoto=1";
		$productDetails = DB::getRecord()->runSQL("getSingleData", $sql);
		
		$sql = "SELECT 
					photos.strFile,
					photos.bMainPhoto
				FROM 
					photos
				WHERE photos.nProductID=".$productID;
		$results = DB::getRecord()->runSQL("getAllData", $sql);

		$productDetails['photos'] = [];
		foreach($results as $result){
			array_push($productDetails['photos'], $result['strFile']);
		}
		
		return $productDetails;
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
	static function getAdvantages($productID){
		$advantages = Advantages::getAllAdvantages();
		
		$sql = "SELECT product_advantages.nAdvantageID FROM product_advantages WHERE product_advantages.nProductID=".$productID;
		$arrResults = DB::getRecord()->runSQL("getAllData", $sql);
		$arrAdvantages = [];
		foreach($arrResults as $result){
			array_push($arrAdvantages, $result['nAdvantageID']);
		}
		return $arrAdvantages;
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