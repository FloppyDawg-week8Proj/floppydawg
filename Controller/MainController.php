<?php

Class MainController
{
	public function home()
	{
		/// home page
//		$mainnav = $this->loadView("mainnav-view",$arrFeaturedCats);
//
		$content = $this->loadView("hero-slider");
		$content .= $this->loadView("welcomeText");
		$content .= $this->loadView("card");
		include("Views/publiclayout-view.php");
	}

	public function category()
	{
		
		$arrFeaturedCats = Categories::getFeatured(); 
		$mainnav = $this->loadView("mainnav-view",$arrFeaturedCats);

		$arrData["othercats"] = Categories::getSubcategories();
		
		$arrData["products"] = Products::getProductsByCategory($_GET['category']); 
		$maincontent = $this->loadView("categoryLayout-view",$arrData);
		include("views/main-container-short-view.php");
	}

	public function showproduct()
	{
		
		$arrFeaturedCats = Categories::getFeatured(); 
		$mainnav = $this->loadView("mainnav-view",$arrFeaturedCats);

		$arrData = Product::getProduct($_GET['id']);
		$maincontent = $this->loadView("productDetails-view",$arrData);
		include("views/main-container-short-view.php");
	}

	public function addToCart()
	{
		
		$oCart = new Cart();
		$oCart->addToCart($_GET['item']);

		header("location: index.php?controller=main&action=showproduct&id=".$_GET['item']);
	}

	public function cart()
	{
		
		$arrFeaturedCats = Categories::getFeatured(); 
		$mainnav = $this->loadView("mainnav-view",$arrFeaturedCats);

		$oCart = new Cart();
		$arrCartItems = $oCart->getCartItems();

		$maincontent = $this->loadView("cart-view",$arrCartItems);
		include("views/main-container-short-view.php");
	}

	public function loadView($viewName ,$arrData="")
	{
		ob_start();
		include("Views/".$viewName."-view.php");
		$viewContent = ob_get_contents();
		ob_clean();

		return $viewContent;
	}

}

?>