<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 600|Roboto+Slab:300, 700" rel="stylesheet">
</head>
<body>
<header>
<section class="container">
	<div class="logo coverBg">
		<a href="index.php">
			<img src="images/floppyLogo.png" alt="logo" >
		</a>
	</div><!--logo-->

	<div class="headerNav">
		<div id="nav-icon2">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<nav>
			<ul class="menu">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="index.php?action=products">Products</a>
			    <ul class="dropdown">
			    	<li><a href="index.php?action=products&categoryID=1">Beds</a>
					</li>
		      		<li><a href="index.php?action=products&categoryID=2">Acessories</a>
					</li>
			    </ul><!--drop down content-->
			  </li><!--dropdown-->
			  <li><a href="index.php?action=about">About</a></li>
			  <li><a href="index.php?action=contact">Contact</a></li>
			</ul>
		</nav><!--Navigation-->
	</div><!--headerNav-->

	<div class="rightNav">
		<div class="cartNav">
			<a href="index.php?controller=cart&action=showitems">
				<span class="fas fa-shopping-cart"></span>
				Cart(<span id="cart-product-quantity"><?=isset($_SESSION['cartProducts'])?count($_SESSION['cartProducts']):0;?></span>)
			</a>
		</div><!--cartNav-->
		<div class="userNav">
			<a href="index.php?action=memberDashboard"><span class="fas fa-user"></span>Account</a>
		</div><!--cartNav-->
	</div><!--rightNav-->
</section><!--container-->
</header>

<div class="shippingBanner">
	<p>Free shipping (No minimum)</p>
</div><!--shippingBanner-->