<?php
Class Cart
{
	static function insert($arrProduct)
	{
		array_push($_SESSION['cartProducts'], $arrProduct);
	}
	static function ($arrNewProduct){
//		$sql = "SELECT * FROM products WHERE id=$productID";    SHWETAAAAAAAAAAAAAAAA!!!!! INSERT the right sql HERE!!!!!	
		return DB::getRecord()->runSQL("insertNew", $sql);
	}
	static function delete($productID){
		$sql = "DELETE FROM products WHERE id=$productID";
		return DB::getRecord()->runSQL("delete", $sql);
	}
}
?>