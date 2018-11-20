<?php
Class CheckoutController extends MainController
{	
	public function billing(){
		$arrData['productsSummary'] = Purchase::getItems()['cartProducts'];
		$content = $this->loadView("billing");
		$content .= $this->loadView("order-summary", $arrData);
		include("Views/publiclayout-view.php");
	}
	public function payment(){
//		print_r($_POST);
//		die;
		$_SESSION['shippings']['strName'] = $_POST['billingfirstName'];
		$_SESSION['shippings']['strLastName'] = $_POST['billinglastname'];
		$_SESSION['shippings']['strAddress'] = $_POST['billingstreetAdress'];
		$_SESSION['shippings']['strZipCode'] = $_POST['billingzipCode'];
		$_SESSION['billings']['strName'] = $_POST['billingfirstName'];
		$_SESSION['billings']['strLastName'] = $_POST['billinglastname'];
		$_SESSION['billings']['strAddress'] = $_POST['billingstreetAdress'];
		$_SESSION['billings']['strZipCode'] = $_POST['billingzipCode'];
		$_SESSION['billings']['strEmail'] = $_POST['billingemail'];
		$content = $this->loadView("payment");
		
		$arrData['productsSummary'] = Purchase::getItems()['cartProducts'];
		$content .= $this->loadView("order-summary", $arrData);
		
		$modal = $this-> loadView("thanks");
		$content .= $this->loadView("modalHolder", $modal);
		include("Views/publiclayout-view.php");
	}
	public function saveOrder(){	
		$arrData = Purchase::saveOrder();
		$this-> home();
	}
	
}
?>