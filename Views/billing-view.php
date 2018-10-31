
<style>
	* {
		box-sizing: border-box;
	}

	.error {
		padding: 8px;
		background-color: tomato;
		color: #363636;
	}

	.editBillingForm {
		display: flex;
		flex-wrap: wrap;
		margin: 0 -16px;
	}

	.editBillingColumn {
		flex: 50%;
		background-color: lightgrey;
		padding: 5px 20px 15px 20px;
		border-radius: 3px;
	}

	.editBillingForm {
		flex: 75%;
	}

	.editBillingColumn,
	.editBillingForm {
		padding: 0 16px;
	}

	.editBillingForm [type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
	}

	.editBillingForm label {
		margin-bottom: 10px;
		display: block;

	}

	.formContainer {
		margin-left: 25%;
		margin-top: 2%;
	}
</style>

<div class="editBillingForm">
	<div class="formContainer">
		<h1 class="pageTitle">Billing and Shipping Info</h1>
		<form class="editBillingForm" method="post" action="index.php?controller=checkout&action=payment">
			<div class="editBillingForm">
				<div class="editBillingColumn">
					<h3>Billing Info</h3>

					<input id="autoFill" type="checkbox" name="sameAsShipping">Same as shipping Info <br/>

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
				</div>
				<div class="editBillingColumn"><br>
					<h3>Shipping Info</h3>

					<label class="required" for="firstName">First Name</label>
					<input type="text" name="firstName" id="shippingfirstName" placeholder="ex. Jane">

					<label class="required" for="lastname">Last Name</label>
					<input type="text" name="lastname" id="shippinglastname" placeholder="ex. Doe">

					<label class="required" for="streetAdress">Street Address:</label>
					<input type="text" name="streetAdress" id="shippingstreetAdress" placeholder="ex. Nelson Street">

					<label class="required" for="zipCode">Zip Code:</label>
					<input type="text" name="zipCode" id="shippingzipCode" placeholder="ex. X5X 5X5">

					<input type="submit" name="strEdit" value="Next" class="btn btn-primary" value="Update"><br/>
				</div><!--editBillingColumn--->
			</div><!--editBillingForm-->
		</form>
	</div>
</div>