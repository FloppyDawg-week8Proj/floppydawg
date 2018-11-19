<div class="contactView">
	<h1>Contact Us</h1>
	<div class="contactClass">
		<div class="addressView">
			<div class="addressDetails">
				<h2>Address</h2>
				<p>123/4A,Vancouver, Denman, P0S 7AL</p>

				<h2>Mail:</h2>
				<p>contact@email.com</p>

				<h2>FAQ Info:</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
			</div><!--addressDetails--->

		</div><!--addressView-->

		<div class="formDetails">
			<form method="post" onsubmit="return validate()">
				<label class="required">Enter Name</label>
				<input type="text" name="strName" id="strName" placeholder="ex. Jane Doe" class="required" value="" required>
				<label class="required">Enter Email</label>
				<input type="text" name="strEmail" id="strEmail" placeholder="ex. abc@gmail.com" class="required" value="" required>
				<label class="required">Enter Message</label>
				<textarea type="textarea" name="strMessage" id="strMessage" placeholder="Any Specific requirements.." class="required" required></textarea>
				<input type="submit" name="submit" value="Submit" class="btn btn-submit">
			</form>
		</div><!--formDetails--->
		<div id="map"></div><!--map-->
	</div><!--contactClass-->
</div><!--ContactView-->