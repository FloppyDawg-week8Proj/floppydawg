<?php
Class CartController extends MainController
{
	public function showitems()
	{
		/// home page
		$arrData = Cart::getItems();		
		$cartContent = '';
		$i = 0;
		if(!empty($arrData)){
			foreach($arrData as $cardItem){
				$cardItem['itemKey'] = $i;
				$cartContent .= $this->loadView("item-card", $cardItem);
				$i++;
			};
		}
		
		$content = $this->loadView("cart", $cartContent);

		$content .= "<h2 class='page-title'>Feature Products</h2>";		
		$arrData['products'] = Products::getProductsInfo('features');
		$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
		$content .= $this->loadView("card",$arrData);
		
		include("Views/publiclayout-view.php");
	}
	public function insert()
	{	
		$newProduct = $_POST;
		Cart::insert($newProduct);
	}
	public function delete()
	{
		Cart::delete();
		$this -> showitems();
	}
}
?>