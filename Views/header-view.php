<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300|Roboto+Slab" rel="stylesheet">
</head>
<body>
	<header>
		<div class="logo coverBg">
			<a href="index.php"><img src="images/LogoPlaceholder.png" alt="logo" ></a>
		</div><!--logo-->
		<div class="headerNav">
			<nav>
				<ul class="mainNav">
				  <li><a href="index.php">Home</a></li>
				  <li>
				    <a href="index.php?action=products">Products</a>
				    <ul class="dropdown">
				    	<li>
				      		<a href="index.php?action=products&categoryID=1">Beds</a>
						</li>
			      		<li>
				      		<a href="index.php?action=products&categoryID=2">Acessories</a>
						</li>
				    </ul><!--drop down content-->
				  </li><!--dropdown-->
				  <li><a href="index.php?action=about">About</a></li>
				  <li><a href="index.php?action=contact">Contact</a></li>
				</ul>
			</nav><!--Navigation-->
		</div>

		<div class="rightNav">
			<div id="socialMedia"> <!-- here we will have the icons for social medias -->			
			    <span id="facebookIcon" class="socialSprite"><a href="#">Facebook</a></span>
			    <span id="instagramIcon" class="socialSprite"><a href="#">Instagram</a></span>
			</div><!--- closing div for social icons -->


			<div class="cartNav">
				<a href="index.php?controller=cart&action=showitems">Cart <span class="fas fa-shopping-cart"></span> (<?=isset($_SESSION['cartProducts'])?count($_SESSION['cartProducts']):0;?>)</a>
			</div><!--cartNav-->
		</div><!--rightNav-->
	</header>
