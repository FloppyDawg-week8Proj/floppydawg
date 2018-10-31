<?php
Class Products
{	
	const products = "SELECT products.*, categories.strName as categoryName, photos.strFile FROM (products LEFT JOIN categories ON categories.id=products.nCategory LEFT JOIN photos ON photos.nProductID = products.id)";
	static function getAllProducts(){
		$sql= self::products;
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
	static function getFeatured()//get fetured products from products table
	{
		$sql= self::products." WHERE bFeatures=1";
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
	static function getProductsCategory($categoryID)
	{
		$sql= self::products." WHERE products.nCategory=$categoryID";
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
}
?>