<div class="paymentRow">
	<div class="formContainer">
		<h1 class="pageTitle">Payment and Review</h1>
		<form class="paymentInfoForm" method="post" action="index.php?controller=checkout&action=saveOrder">
			<div class="paymentRow">
				<div class="paymentColumn">
					
					<label class="required">Payment method:</label>
					<input type="radio" name="paymentMethod">Credit
					<input type="radio" name="paymentMethod">Debit
					<input type="radio" name="paymentMethod">PayPal<br>

					<label class="required" for="cardNumber">Card Number</label>
					<input type="text" name="cardNumber" id="cardNumber" placeholder="555-555-555-555">

					<label class="required" for="cardname">Name on card</label>
					<input type="text" name="cardname" id="cardname" placeholder="ex.John doe">

					<div class="paymentRow">
						<div class="paymentColumn">
							<label class="required" for="expDate">Exp. Date:</label>
							<input type="month" id="expDate" name="expDate"  min="2018-11" value="2018-11" />
						</div><!--paymentColumn--->
						<div class="paymentColumn">
							<label class="required" for="cvv">CVV</label>
							<input type="text" name="cvv" id="cvv">
						</div><!--paymentColumn--->
					</div><!--paymentRow-->
					<input id="completeOrder" type="submit" value="Complete Order" class="btn btn-primary">
				</div>
				<div class="paymentColumn">
					<h2>Shipping to:</h2>
					<label>Full Name</label>
					<p>Tyler Smith</p>
					<label>Address</label>
					<p>1654, Comox st. Vancouver, X5X6X7</p>

					<h2>Billing to:</h2>
					<label>Full Name</label>
					<p>Tyler Smith</p>
					<label>Address</label>
					<p>1654, Comox st. Vancouver, X5X6X7</p>
					<label>e-mail</label>
					<p>email@email.com</p>
					<label>Phone</label>
					<p>555-555-555</p>

					<h2>Summary:</h2>
					<label>Product Name----Qt-------Sub Total</label>
					<?php foreach($_SESSION['cartProducts'] as $product){ ?>
						<p><?=$product['strName']?>----------X<?=$product['nQuantity']?>----------<?=$product['nUnityPrice']?></p>
					<?php } ?>

					<h2>TOTAL : $<?=Purchase::getTotalPrice();?></h2>

					<a href="index.php?controller=checkout&action=billing" class="btn btn-primary">Edit</a>
				</div>
			</div><!--paymentColumn--->
		</form>
	</div><!--formContainer-->
</div>