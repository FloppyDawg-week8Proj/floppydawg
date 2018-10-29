<style>

*{
	box-sizing: border-box;
}

.paymentRow
{
	display: flex;
	flex-wrap: wrap;
	margin: 0 -16px;
}

.paymentColumn
{
	flex: 50%;
	background-color: lightgrey;
	padding: 5px 20px 15px 20px;
	border-radius: 3px;
}

.paymentInfoForm
{
	flex: 75%;
}

.paymentColumn, .paymentInfoForm
{
	padding: 0 16px;
}

.paymentInfoForm [type=text]
{
	width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.paymentInfoForm label
{
  margin-bottom: 10px;
  display: block;

}
.formContainer
{
	margin-left: 25%;
	margin-top: 2%;
}
</style>

<div class="paymentRow">
	<div class="formContainer">
		<h1 class="pageTitle">Payment and Review</h1>
		<form class="paymentInfoForm" form method="post" onsubmit="return validate()">
			<div class="paymentRow">
				<div class="paymentColumn">
					<h3>Payment Info</h3>

					<input type="radio" name="credit">Credit
					<input type="radio" name="debit">Debit
					<input type="radio" name="payPal">PayPal<br>

					<label class="required" for="cardNumber">Card Number</label>
					<input type="text" name="cardNumber" id="cardNumber" placeholder="555-555-555-555">

					<label class="required" for="cardname">Name on card</label>
					<input type="text" name="cardname" id="cardname" placeholder="ex.John doe">

					<div class="paymentRow">
						<div class="paymentColumn">
							<label class="required" for="expDate">Exp. Date:</label>
							<input type="date" name="expDate" id="expDate"">
						</div><!--paymentColumn--->
						<div class="paymentColumn">
							<label class="required" for="cvv">CVV</label>
							<input type="text" name="cvv" id="cvv">
						</div><!--paymentColumn--->
						<input type="submit" name="strEdit" value="Complete Order" class="btn btn-primary" value="">
					</div><!--paymentRow-->
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
						<p>Fluffy Bed----------X1----------100.00</p>
						
						<h2>TOTAL : 100$</h2>

						<input type="submit" name="strEdit" value="Edit" class="btn btn-primary" value="">
					</div>
				</div><!--paymentColumn--->
			</div><!--paymentRow-->
		</form>
	</div><!--formContainer-->
</div>