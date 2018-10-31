<?php
Class CheckoutController extends MainController
{	
	public function billing()
	{
		$content = $this->loadView("billing");		
		include("Views/publiclayout-view.php");
	}
	public function payment()
	{
		$content = $this->loadView("payment");		
		include("Views/publiclayout-view.php");
	}
}
?>