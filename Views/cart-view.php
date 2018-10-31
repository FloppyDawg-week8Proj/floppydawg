	<h2 class="page-title">Cart</h2>
	<?php if($arrData){ ?>
	<form class="cart-form" method="post" action="submit-order.php">
		<div class="cart-resume">
			<?php
				echo $arrData;
			?>
		</div>	
		<div class="btn btn-primary">
			<a href="#">Continue Shopping</a>
		</div>
		<div class="btn btn-grey">
			<a href="#">Checkout</a>
		</div>
	</form>
	<?php }else { ?>
		<h3>No products in the cart</h3>	
		<div class="btn btn-primary">
			<a href="#">Continue Shopping</a>
		</div>
	<?php } ?>