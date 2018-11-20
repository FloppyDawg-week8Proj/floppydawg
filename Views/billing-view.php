<div class="editBillingForm">
	<h1 class="shipping-title">Shipping Information</h1>
		<form method="post" action="index.php?controller=checkout&action=payment">
			<div class="editBillingColumn">
				<label class="required" for="firstName">First Name</label>
				<input class='billingField' type="text" name="firstName" id="billingfirstName" placeholder="ex. Jane">

				<label class="required" for="lastname">Last Name</label>
				<input class='billingField' type="text" name="lastname" id="billinglastname" placeholder="ex. Doe">

				<label class="required" for="streetAdress">Street Address:</label>
				<input class='billingField' type="text" name="streetAdress" id="billingstreetAdress" placeholder="ex. Nelson Street">

				<label class="required" for="zipCode">Zip Code:</label>
				<input class='billingField' type="text" name="zipCode" id="billingzipCode" placeholder="ex. X5X 5X5">

				<label class="required" for="email">Email</label>
				<input class='billingField' type="text" name="email" id="billingemail" placeholder="ex. email@address.com">
			</div><!--editBillingColumn-->

			<h1 class="billing-title">Billing Information</h1>

			<input id="autoFill" type="checkbox" name="sameAsShipping">Same as shipping Info <br/>
				<!-- <div class="editBillingColumn"><br>
					<h3>Shipping Info</h3>

					<label class="required" for="firstName">First Name</label>
					<input type="text" name="shippingfirstName" id="shippingfirstName" placeholder="ex. Jane">

					<label class="required" for="lastname">Last Name</label>
					<input type="text" name="shippinglastname" id="shippinglastname" placeholder="ex. Doe">

					<label class="required" for="streetAdress">Street Address:</label>
					<input type="text" name="shippingstreetAdress" id="shippingstreetAdress" placeholder="ex. Nelson Street">

					<label class="required" for="zipCode">Zip Code:</label>
					<input type="text" name="shippingzipCode" id="shippingzipCode" placeholder="ex. X5X 5X5">

					<input type="submit" class="btn btn-primary"><br/>
				</div> --><!--editBillingColumn-->
		</form>
</div><!--editBillingForm-->