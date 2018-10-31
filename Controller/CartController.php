<?php
Class CartController extends MainController
{
	public function showitems()
	{
		/// home page
		$arrData = Cart::getItems();
		$cartContent = '';
		$i = 0;
		foreach($arrData as $cardItem){
			$cardItem['itemKey'] = $i;
			$cartContent .= $this->loadView("item-card", $cardItem);
			$i++;
		};
		$content = $this->loadView("cart", $cartContent);

		$content .= "<h2 class='page-title'>Feature Products</h2>";		
		$arrData = Products::getFeatured();
		$content .= $this->loadView("card",$arrData);
		
		include("Views/publiclayout-view.php");
	}
	public function delete($viewName ,$arrData="")
	{
		ob_start();
		include("Views/".$viewName."-view.php");
		$viewContent = ob_get_contents();
		ob_clean();

		return $viewContent;
	}
}
?>