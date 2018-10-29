<?php

Class MainController
{
	public function home()
	{
		/// home page
		$content = $this->loadView("hero-slider");
		$content .= $this->loadView("welcomeText");
		
		$arrData = array(1,2,3);
		$content .= "<h2 class='page-title'>Feature Products</h2>";
		$content .= $this->loadView("card",$arrData);
		
		include("Views/publiclayout-view.php");
	}

	public function products()
	{	
		$arrData = array(1,2,3,4,5,6);
		$productContent = $this->loadView("card",$arrData);
		$content = $this->loadView("products", $productContent);
		
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