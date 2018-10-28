<style>
.formContainer
{
	position: relative;
	display: inline-block;
	margin-left: 25%;
	margin-top: 20px;
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
	height: 580px;
	padding: 20px;
}
/****************************/
.shippingInfo h2
{
	margin-bottom: 10px;
}
.paymentInfo h2
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
.paymentInfo 
{
	border-right: thick solid #363636;
}

/*******************/
.paymentInfo h2
{
	margin-bottom: 10px;
}
.paymentInfo > * {
	position: relative;
}

.paymentInfo form {
	text-align: left;
	padding: 20px;
	color: #363636;
	align-self: center;
	width: 350px;
	margin-bottom: 10px;
}

.paymentInfo input[type=checkbox] {
	display: inline-block;
}

.paymentInfo input[type=text] {
	padding: 10px;
	width:100%;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
}

.paymentInfo label {
	font-size: 18px;
	display: block;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
}

.paymentInfo .btn-submit {
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
.shippingInfoForm h2
{
	margin-bottom: 10px;
	margin-top: 10px;
}
</style>

<div class="formContainer">
	<h1 class="pageTitle">Payment and Review</h1>
	<div class="formHolder">
		<div class="formHouse">
			<div class="paymentInfo">
				<h2>Payment Info</h2>
				<form class="paymentInfoForm">
					<input type="radio" name="paymentInfo">Credit
					<input type="radio" name="paymentInfo">Debit
					<input type="radio" name="paymentInfo">Paypal
					<label class="requiredLabel">Card Number</label>
					<input type="text" name="nCardNumber" id="nCardNumber" class="requiredField" value="" placeholder="555-555-555-555">
					<label class="requiredLabel">Name on Card</label>
					<input type="text" name="strNameCard" id="strNameCard"class="requiredField" value="" placeholder="ex. John doe">
					<label class="requiredLabel">Exp. Date:</label>
					<input type="date" name="expDate" id="expDate"class="requiredField">
					<label class="requiredLabel">CVV:</label>
					<input type="text" name="cvv" id="strCvv"class="requiredField">
					<input type="submit" name="strComplete" value="Complete Order" class="btn btn-primary" value="">
				</form>
			</div><!---password-->
		</div><!--formHouse-->
	<div class="formHouse">
			<div class="shippingInfo">
				<form class="shippingInfoForm">
					<h2>Shipping to:</h2>
					<label class="requiredLabel">Full Name</label>
					<p>Tyler Smith</p>
					<label class="requiredLabel">Address</label>
					<p>1654, Comox st. Vancouver, X5X6X7</p>

					<h2>Billing to:</h2>
					<label class="requiredLabel">Full Name</label>
					<p>Tyler Smith</p>
					<label class="requiredLabel">Address</label>
					<p>1654, Comox st. Vancouver, X5X6X7</p>
					<label class="requiredLabel">e-mail</label>
					<p>email@email.com</p>
					<label class="requiredLabel">Phone</label>
					<p>555-555-555</p>

					<h2>Summary:</h2>
					<label>Product Name----Qt-------Sub Total</label>
					<p>Fluffy Bed----------X1----------100.00</p>
					
					<h2>TOTAL : 100$</h2>

					<input type="submit" name="strEdit" value="Edit" class="btn btn-primary" value="">
				</form>
			</div><!---shippingInfo-->
		</div><!--formHouse-->
	</div><!--formHolder-->
</div><!--formContainer-->