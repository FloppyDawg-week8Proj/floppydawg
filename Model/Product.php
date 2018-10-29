<?php
Class Product
{
	static function getProduct($productID)
	{
		$sql = "SELECT products.*, categories.strName as categoryName FROM (products LEFT JOIN categories ON categories.id=products.nCategory) WHERE products.id=$productID";
		return DB::getRecord()->runSQL("getSingleData", $sql);
	}
	static function saveNew($arrNewProduct){
//		$sql = "SELECT * FROM products WHERE id=$productID";    SHWETAAAAAAAAAAAAAAAA!!!!! INSERT the right sql HERE!!!!!	
		return DB::getRecord()->runSQL("insertNew", $sql);
	}
	static function delete($productID){
		$sql = "DELETE FROM products WHERE id=$productID";
		return DB::getRecord()->runSQL("delete", $sql);
	}
}
?>