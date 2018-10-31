<?php
Class Purchase
{
	static function saveOrder()
	{
		$sql = "INSERT INTO purchase(
			'nMemberID',
			'nTotalPrice',
			'nOrdersStatusID',
			'date',
		VALUES ('
			".$_SESSION['nMemberID'].",
			".$_SESSION['nSubTotal'].",
			".$_SESSION['nOrdersStatusID'].",
			".$_SESSION['date'].")";
		$nOrderID = DB::getRecord()->runSQL("insertNew", $sql);
		self::saveOrderDetails($nOrderID);
		return $nOrderID;
	}
	static function saveOrderDetails($nOrderID){
		foreach($_SESSION['cartProducts'] as $cartItem){
			$sql = "INSERT INTO orderItems(
			'strName',
			'nPrice',
			'nCategory',
			'nPhotoID',
			'nSizeID',
			'nQuantity',
			'nColorID',
			'nPurchaseID')
		VALUES ('
			".$cartItem['strName'].",
			".$cartItem['nUnityPrice'].",
			".$cartItem['nCategory'].",
			".$cartItem['nPhotoID'].",
			".$cartItem['nSizeID'].",
			".$cartItem['nQUantity'].",
			".$cartItem['nColorID'].",
			".$nOrderID.")";
		DB::getRecord()->runSQL("insertNew", $sql);			
		};
	}
	static function getItems($arrItems){
		return $_SESSION['cartProducts'];
	}
	static function getTotalPrice(){
		$arrPrices = [];
		if(!empty($_SESSION['cartProducts'])){
			foreach($_SESSION['cartProducts'] as $product){
				array_push($arrPrices, $product['nSubTotal']);
			}
			$totalPrice = array_sum($arrPrices);
		}else{
			$totalPrice = 0;
		}	
		return $totalPrice;
	}
}
?>