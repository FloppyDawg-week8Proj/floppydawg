<?php
Class Purchase
{
	static function saveOrder()
	{	
		
		$total = self::getTotalPrice();
		$member = isset($_SESSION['nMemberID'])?$_SESSION['nMemberID']:0;
		$order = isset($_SESSION['nOrdersStatusID'])?$_SESSION['nOrdersStatusID']:1;
		
		$sql = "INSERT INTO purchase(
			nMemberID,
			nPrice,
			nOrdersStatusID,
			date)
		VALUES (
			'".$member."',
			'".$total."',
			'".$order."',
			'".date('Y-m-d')."')";
		$nOrderID = DB::getRecord()->runSQL("insertNew", $sql);
		self::saveOrderDetails($nOrderID);
		self::saveBilling($nOrderID);
		self::saveShipping($nOrderID);
		return $nOrderID;
	}
	static function saveOrderDetails($nOrderID){
		foreach($_SESSION['cartProducts'] as $cartItem){
			$sql = "INSERT INTO orderItems (
			strName,
			nPrice,
			nSizeID,
			nQuantity,
			nColorID,
			nPurchaseID)
		VALUES (
			'".$cartItem['strName']."',
			'".$cartItem['nUnityPrice']."',
			'".$cartItem['nSizeID']."',
			'".$cartItem['nQuantity']."',
			'".$cartItem['nColorID']."',
			'".$nOrderID."')";
			DB::getRecord()->runSQL("insertNew", $sql);
		};
	}
	static function saveShipping($nOrderID){
		$sql = "INSERT INTO shippings (
			strName,
			strLastName,
			strAddress,
			strZipCode,
			nPurchaseID)
		VALUES (
			'".$_SESSION['shippings']['strName']."',
			'".$_SESSION['shippings']['strLastName']."',
			'".$_SESSION['shippings']['strAddress']."',
			'".$_SESSION['shippings']['strZipCode']."',
			'".$nOrderID."')";
		DB::getRecord()->runSQL("insertNew", $sql);			
	}
	static function saveBilling($nOrderID){
		$sql = "INSERT INTO billings (
			strFirstName,
			strLastName,
			strAddress,
			strZipCode,
			strEmail,
			nPurchaseID)
		VALUES (
			'".$_SESSION['billings']['strName']."',
			'".$_SESSION['billings']['strLastName']."',
			'".$_SESSION['billings']['strAddress']."',
			'".$_SESSION['billings']['strZipCode']."',
			'".$_SESSION['billings']['strEmail']."',
			'".$nOrderID."')";
		DB::getRecord()->runSQL("insertNew", $sql);	
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