<style>

*{
	box-sizing: border-box;
}
.error{
	padding: 8px;
	background-color: tomato;
	color: #363636;
}
.editBillingForm
{
	display: flex;
	flex-wrap: wrap;
	margin: 0 -16px;
}

.editBillingColumn
{
	flex: 50%;
	background-color: lightgrey;
	padding: 5px 20px 15px 20px;
	border-radius: 3px;
}

.editBillingForm
{
	flex: 75%;
}

.editBillingColumn, .editBillingForm
{
	padding: 0 16px;
}

.editBillingForm [type=text]
{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.editBillingForm label
{
  margin-bottom: 10px;
  display: block;

}
<<<<<<< HEAD
.billingInfo 
=======
.formContainer
>>>>>>> billingView
{
	margin-left: 25%;
	margin-top: 2%;
}
</style>

<div class="editBillingForm">
	<div class="formContainer">
		<h1 class="pageTitle">Billing and Shipping Info</h1>
		<form class="editBillingForm" form method="post" onsubmit="return validate()">
			<div class="editBillingForm">
				<div class="editBillingColumn">
					<h3>Billing Info</h3>

					<input type="checkbox" name="sameAsShipping">Same as shipping Info </br>

					<label class="required" for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" placeholder="ex.Jane">

					<label class="required" for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder="ex.doe">
					
					<label class="required" for="streetAdress">Street Address:</label>
					<input type="text" name="streetAdress" id="streetAdress" placeholder="ex.nelson street">

					<label class="required" for="zipCode">Zip Code:</label>
					<input type="text" name="zipCode" id="zipCode" placeholder="x5x5x5">
				</div>
					<div class="editBillingColumn"><br>
					<h3>Shipping Info</h3>

					<label class="required" for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" placeholder="ex.Jane">

					<label class="required" for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder="ex.doe">
					
					<label class="required" for="streetAdress">Street Address:</label>
					<input type="text" name="streetAdress" id="streetAdress" placeholder="ex.nelson street">

					<label class="required" for="zipCode">Zip Code:</label>
					<input type="text" name="zipCode" id="zipCode" placeholder="x5x5x5">

					<label class="required" for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="ex. abc@abc.com">

<<<<<<< HEAD
<div class="formContainer">
	<h1 class="pageTitle">Billing and Shipping Address</h1>
	<div class="formHolder">
		<div class="formHouse">
			<div class="billingInfo">
				<h2>Billing Info</h2>
				<form class="billingInfoForm">
					<input type="checkbox" name="billingInfo">Same as Shipping Info
					<label class="requiredLabel">First Name</label>
					<input type="text" name="strFirstName" id="strFirstName" class="requiredField" value="">
					<label class="requiredLabel">Last Name</label>
					<input type="text" name="strLastName" id="strEmail"class="requiredField" value="">
					<label class="requiredLabel">Street Address</label>
					<input type="text" name="strStreetAddress" id="strStreetAddress"class="requiredField">
					<label class="requiredLabel">Zip Code</label>
					<input type="text" name="strZipCode" id="strZipCode"class="requiredField">
					
				</form>
			</div><!---password-->
		</div><!--formHouse-->
	<div class="formHouse">
			<div class="shippingInfo">
				<h2>Shipping Info</h2>
				<form class="shippingInfoForm">
					<label class="requiredLabel">First Name</label>
					<input type="text" name="strFirstName" id="strFirstName" class="requiredField" value="">
					<label class="requiredLabel">Last Name</label>
					<input type="text" name="strLastName" id="strEmail"class="requiredField" value="">
					<label class="requiredLabel">Street Address</label>
					<input type="text" name="strStreetAddress" id="strStreetAddress"class="requiredField">
					<label class="requiredLabel">Zip Code</label>
					<input type="text" name="strZipCode" id="strZipCode"class="requiredField">
					<label class="requiredLabel">Email</label>
					<input type="text" name="strEmail" id="strEmail"class="requiredField">
					<input type="submit" name="strNext" value="Next" class="btn btn-primary" value="">
				</form>
			</div><!---shippingInfo-->
		</div><!--formHouse-->
	</div><!--formHolder-->
</div><!--formContainer-->
=======
					<input type="submit" name="strEdit" value="Next" class="btn btn-primary" value="Update"><br>
					</div>
				</div><!--editBillingColumn--->
			</div><!--editBillingForm-->
		</form>
	</div><!--formContainer-->
</div>
>>>>>>> billingView
