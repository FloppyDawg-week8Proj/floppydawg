<?php

Class Products
{
	static function getAllProducts(){
		$sql="SELECT * FROM products";
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
	static function getFeatured()//get fetured products from products table
	{
		$sql="SELECT * FROM products WHERE bFeatures=1";
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
	static function getProductsCategory($categoryID)
	{
		$sql= "SELECT products.*, categories.strName as categoryName FROM (products LEFT JOIN categories ON categories.id=products.nCategory) WHERE products.nCategory=$categoryID";
		return DB::getRecord()->runSQL("getAllData", $sql);
	}
}
?>