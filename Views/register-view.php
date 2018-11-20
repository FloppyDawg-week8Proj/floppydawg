<div class="editRegister">
	<div class="formContainer">
		<h1 class="pageTitle">User Info</h1>
		<form class="editRegisterForm" form method="post" onsubmit="return validate()">
			<div class="editRegisterForm">
				<div class="editRegisterColumn">
					<h3>User Info</h3>

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
				</div>
					<div class="editRegisterColumn"><br>
					<h3>Password</h3>

					<label class="required" for="password"> Password</label>
					<input type="text" name="password" id="password" placeholder="*******">
					
					<label class="required" for="repeatPassword">Repeat Passwod</label>
					<input type="text" name="repeatPassword" id="repeatPassword" placeholder="*******">

					<input type="checkbox" name="termsAndconditions"> I agree with the <a href="#">terms and conditions</a>of the privacy policy

						<input type="submit" name="strEdit" value="Update" class="btn btn-primary" value="Update"><br>
					</div>
				</div><!--editRegisterColumn--->
			</div><!--editRegisterForm-->
		</form>
	</div><!--formContainer-->
</div>