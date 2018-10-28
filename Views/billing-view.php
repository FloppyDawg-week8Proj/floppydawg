<style>
.formContainer
{
	position: relative;
	display: inline-block;
	margin-left: 25%;
	margin-top: 5%;
}
.formContainer h1
{
	text-align: center;
	margin-bottom: 10px;
}
.formHouse
{
	left: 0;
	right: 0;
	top: 0;
	bottom: 0; 
	background-color: #c1b8b5;/*light grey*/
	float: left;
	width: 50%;
	height: 550px;
	padding: 20px;
}
/****************************/
.shippingInfo h2
{
	margin-bottom: 10px;
}
.billingInfo h2
{
	margin-bottom: 10px;
}
.shippingInfo > * {
	position: relative;
}

.shippingInfo form {
	text-align: left;
	padding: 20px;
	color: #363636;
	align-self: center;
	width: 350px;
	margin-bottom: 10px;
}

.shippingInfo input {
	width: 100%;
	display: block;
}

.shippingInfo input[type=text] {
	padding: 10px;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
}

.shippingInfo label {
	font-size: 18px;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
}

.shippingInfo .btn-submit {
	margin: 20px 0;
	width: 100px;
}
.billingInfo 
{
	border-right: thick solid #363636;
}

/*******************/
.billingInfo h2
{
	margin-bottom: 10px;
}
.billingInfo > * {
	position: relative;
}

.billingInfo form {
	text-align: left;
	padding: 20px;
	color: #363636;
	align-self: center;
	width: 350px;
	margin-bottom: 10px;
}

.billingInfo input[type=checkbox] {
	display: inline-block;
}

.billingInfo input[type=text] {
	padding: 10px;
	width:100%;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
}

.billingInfo label {
	font-size: 18px;
	display: block;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
}

.billingInfo .btn-submit {
	margin: 20px 0;
	width: 100px;
}
.checkbox
{
	display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

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