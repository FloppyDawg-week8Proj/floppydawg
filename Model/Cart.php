<?php
Class Cart
{
	static function insert($arrProduct)
	{
		array_push($_SESSION['cartProducts'], $arrProduct);
	}
	static function delete($itemID){
		array_splice($_SESSION['cartProducts'], $itemID, 1);
	}
	static function getItems(){
		if(!empty($_SESSION['cartProducts'])){
			return $_SESSION['cartProducts'];
		} else{
			return false;
		}
	}
}
?>