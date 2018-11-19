<?php

Class MainController
{
	public function home()
	{
		/// home page
		$content = $this->loadView("hero-slider");
		$content .= $this->loadView("welcomeText");
		
		$content .= "<h2 class='page-title'>Featured Products</h2>";		
		$arrData = Products::getFeatured();
		$content .= $this->loadView("card",$arrData);
		
		include("Views/publiclayout-view.php");
	}

	public function products()
	{
		$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
		$productID = isset($_GET['id'])?$_GET['id']:'';
		
		if(!empty($categoryID)){
			$arrData['products'] = Products::getProductsInfo('category', $categoryID);
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$productContent = $this->loadView("card",$arrData);
			
			
			$content = $this->loadView("products", $productContent);
		}
		else if(!empty($productID)){
			$arrData = Product::getProduct($productID);
			$prodDetails = $this->loadView("productDetails",$arrData);
			
			$prodDetails .= "<h2 class='page-title'>Feature Products</h2>";			
			$arrData = Products::getFeatured();
			$prodDetails .= $this->loadView("card",$arrData);
			
			$content = $this->loadView("products", $prodDetails);	
		}else{
			$arrData['products'] = Products::getProductsInfo('all');
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$allProducts = $this->loadView("card",$arrData);
			
			
			$content = $this->loadView("products", $allProducts);	
		}

		$contentMainClass = "productsView";
		include("Views/publiclayout-view.php");
}

	public function about()
	{
		$content = $this->loadView("about");
		include("Views/publiclayout-view.php");
	}

	public function contact()
	{	
		$content = $this->loadView("contact");
		include("Views/publiclayout-view.php");
	}

	public function cart()
	{
		
		$content = $this->loadView("contact");
		include("Views/publiclayout-view.php");
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