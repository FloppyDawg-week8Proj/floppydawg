<div class="paymentContainer">
	<div class="paymentViewContainer">
		<div class="orderSummary">
			<div class="shippingSummary">
				<h3>Shipping</h3>
				<p><?=$_SESSION['shippings']['strName']." ".$_SESSION['shippings']['strLastName']?></p>
				<p><?=$_SESSION['shippings']['strAddress']?></p>
				<p><?=$_SESSION['shippings']['strZipCode']?></p>
			</div><!--shippingSummary-->
			<div class="billingSummary">
				<h3>Billing</h3>
				<p>Same as Shipping</p>
			</div><!--billingSummary-->
		</div><!--orderSummary-->
	</div><!--paymentViewContainer-->
</div><!--paymentContainer-->