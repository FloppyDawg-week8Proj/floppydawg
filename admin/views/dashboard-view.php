<?php


$arrMyUser = runSelectSQL(
	"SELECT * FROM users
	WHERE id='".$_SESSION["loggedUserId"]."'")[0];
?>

<section id="dashboard">
<h2>Dashboard</h2>

<h3>Welcome back, Admin</h3>

<div class="dashboardOptions">
<span>
	<a href="?page=products"><img src="images/iconBox" alt="iconBox" class="iconBox">
	<p class="productsOption">Products</p>
	</a>
</span>

<span>
	<a href="?page=users"><img src="images/iconPages" alt="iconPages" class="iconPages">
	<p>Users</p>
	</a>
</span>
</div><!--dashboardOptions-->
</section><!--dashboard-->

<?php
include("cmsFooter-view.php");
?>