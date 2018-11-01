<?php
Class CheckoutController extends MainController
{	
	public function billing(){
		$content = $this->loadView("billing");		
		include("Views/publiclayout-view.php");
	}
	public function payment(){
		$_SESSION['shippings']['strName'] = $_POST['shippingfirstName'];
		$_SESSION['shippings']['strLastName'] = $_POST['shippinglastname'];
		$_SESSION['shippings']['strAddress'] = $_POST['shippingstreetAdress'];
		$_SESSION['shippings']['strZipCode'] = $_POST['shippingzipCode'];
		$_SESSION['billings']['strName'] = $_POST['firstName'];
		$_SESSION['billings']['strLastName'] = $_POST['lastname'];
		$_SESSION['billings']['strAddress'] = $_POST['streetAdress'];
		$_SESSION['billings']['strZipCode'] = $_POST['zipCode'];
		$_SESSION['billings']['strEmail'] = $_POST['email'];
		$content = $this->loadView("payment");
		
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