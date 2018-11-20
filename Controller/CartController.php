<?php
Class CartController extends MainController
{
	public function showitems()
	{
		/// home page
		$arrData['cartProducts'] = Cart::getItems();		
		$cartContent = '';
		$arrData['cartitem'] = [];
		if(!empty($arrData['cartProducts'])){
			$i = 0;
			foreach($arrData['cartProducts'] as $cardItem){
				$newItem = Product::getProduct($cardItem['id']);
				$newItem['nQuantity'] = $cardItem['nQuantity'];
				$newItem['itemKey'] = $i;
				array_push($arrData['cartitem'], $newItem);
				$i++;
			};
			foreach($arrData['cartitem'] as $item){		
				$cartContent .= $this->loadView("item-card", $item);
			}		
		}
		$content = $this->loadView("cart", $cartContent);

		$content .= "<h2 class='page-title'>Featured Products</h2>";		
		$arrData['products'] = Products::getProductsInfo('features');
		$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
		$cards = $this->loadView("card",$arrData);
		$content .= $this->loadView("stripslider",$cards);
		
		include("Views/publiclayout-view.php");
	}
	public function insert()
	{	
		$newProduct = $_POST;
		Cart::insert($newProduct);
		
		
		$arrData = $this->loadView("addToCart");
		$modalBox = $this->loadView("modalHolder",$arrData);
		
		echo $modalBox;
	}
	public function delete()
	{
		Cart::delete();
		$this -> showitems();
	}
}
?>