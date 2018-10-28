<?php include("header-view.php");?>
<style type="text/css">

	.contactClass
	{
		margin: auto;
		left: 0;
		top: 0;
		padding: 10px;
		bottom: 0;
		border:1px solid #363636;
		width: 800px;
		height: 600px;
		
	}
	.contactView
	{
		width: 100%;
		height: 100%;
	}
	.contactView >*
	{
		display: inline-block;
	}
	.addressView h2
	{
		font-family: 'Roboto Slab', serif;
		margin-bottom: 10px;
		font-size: 15px;
		color: #363636;
	}
	.addressView h1
	{
		font-family: 'Roboto Slab', serif;
		margin-bottom: 10px;
		font-size: 18px;
		color: #363636;
	}
	.addressView p
	{
		font-family: 'Montserrat', sans-serif;
		width: 250px;
		font-size: 12px;
		line-height: 25px;
		color: #363636;
	}
	.addressView
	{
		float: left;
	}
	.formDetails
	{
		float: right;
		height: 100%;
	}

	#map
	{
		margin-top: 20px;
		padding:20px;
		border: 1px solid #363636;
		width: 300px;
		height: 250px;
	}

	form
	{
	background-color: #c1b8b5; /*light grey*/
	text-align: left;
	padding: 20px;
	margin-top: 20px;
	color: #363636;
	align-self: center;
	}
	input
	{
	width: 100%;
	display: block;
	}
	input[type=text]
	{
	width: 400px;
	padding: 10px;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
	}
	label
	{
	font-size: 18px;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
	}
	.submitBtn 
	{
	background-color: #4f72af;
	font-family: 'Roboto Slab', serif;
	color: #fffff2;
	padding: 10px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 200px;
	}

	.submitBtn:hover 
	{
	transition: all ease 1s;
	opacity: 0.8;
	}
</style>
<div class="contactView">
	<div class="contactClass">
		<div class="addressView">
			<div class="addressDetails">
				<h1>Contact Us</h1>
				<h2>Address</h2>
				<p>123/4A,Vancouver, Denman, P0S 7AL</p>
				<h2>Mail:</h2>
				<p>contact@email.com</p>
				<h2>FAQ Info:</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
			</div><!--addressDetails--->
			<div id="map"></div><!--map-->

				 <script >// map function with location long and lati of vanarts
				 	function initMap()
				 	{
				 		var location = {lat: 49.2826982, lng:123.1153577 };
				 		var map = new google.maps.Map(document.getElementById("map"),{
				 			zoom: 4,
				 			center: location
				 		});
				 		var marker = new google.maps.Marker({
				 			position : location,
				 			map: map
				 		});
				 	}
				 	
				 </script>
			 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMaFf1MASfiqfZ74bRkaGWKbeEIcUIVOU&callback=initMap"></script>

		</div><!--addressView-->

		<div class="formDetails">
			<section id="contact">
		<form>
			<label class="requiredLabel">Enter Name</label>
			<input type="text" name="strName" id="strName" placeholder="ex. Jane Doe" class="requiredField" value="">
			<label class="requiredLabel">Enter Email</label>
			<input type="text" name="strEmail" id="strEmail" placeholder="ex. abc@gmail.com" class="requiredField" value="">
			<label class="requiredLabel">Enter Message</label>
			<input type="text" name="strMessage" id="strMessage" placeholder="Any Specific requirements.." class="requiredField">
			<input type="submit" name="submit" value="Submit" class="submitBtn" value="">
		</form>
	</section>
		</div><!--forDetails--->
	</div>	<!--contactClass-->
</div><!--ContactView-->

<?php include("footer-view.php");?>
