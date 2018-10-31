<?php
Class CheckoutController extends MainController
{	
	public function billing(){
		$content = $this->loadView("billing");		
		include("Views/publiclayout-view.php");
	}
	public function payment(){
		
		$content = $this->loadView("payment");
		
		$modal = $this-> loadView("thanks");
		$content .= $this->loadView("modalHolder", $modal);
		include("Views/publiclayout-view.php");
	}
	public function saveOrder(){
		$arrData = Purchase::saveOrder();
		
	}
	
}
?>