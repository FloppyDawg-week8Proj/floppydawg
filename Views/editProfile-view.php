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
	height: 500px;
	padding: 20px;
}
/****************************/
.userInfo h2
{
	margin-bottom: 10px;
}
.changePassword h2
{
	margin-bottom: 10px;
}
.userInfo > * {
	position: relative;
}

.userInfo form {
	text-align: left;
	padding: 20px;
	color: #363636;
	align-self: center;
	width: 350px;
	margin-bottom: 10px;
}

.userInfo input {
	width: 100%;
	display: block;
}

.userInfo input[type=text] {
	padding: 10px;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
}

.userInfo label {
	font-size: 18px;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
}

.userInfo .btn-submit {
	margin: 20px 0;
	width: 100px;
}
.userInfo 
{
	border-right: thick solid #363636;
}

/*******************/
.changePassword h2
{
	margin-bottom: 10px;
}
.changePassword > * {
	position: relative;
}

.changePassword form {
	text-align: left;
	padding: 20px;
	color: #363636;
	align-self: center;
	width: 350px;
	margin-bottom: 10px;
}

.changePassword input[type=checkbox] {
	display: inline-block;
}

.changePassword input[type=text] {
	padding: 10px;
	width:100%;
	font-family: 'Montserrat', sans-serif;
	margin: 8px 0;
	border: 1px solid #cccccc;
	box-sizing: border-box;
}

.changePassword label {
	font-size: 18px;
	display: block;
	font-family: 'Roboto Slab', serif;
	margin-top: 20px;
	text-align: left;
}

.changePassword .btn-submit {
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
	<h1 class="pageTitle">Edit Profile</h1>
	<div class="formHolder">
		<div class="formHouse">
			<div class="userInfo">
				<h2>User Info</h2>
				<form>
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
				</form>
			</div><!---userInfo-->
		</div><!--formHouse-->
		<div class="formHouse">
			<div class="changePassword">
				<h2>Change Password</h2>
				<form>
					<input type="checkbox" name="changePassword">Change Password
					<label class="requiredLabel">Actual Password</label>
					<input type="text" name="strActualPassword" id="strActualPassword" class="requiredField" value="">
					<label class="requiredLabel">New Password</label>
					<input type="text" name="strNewPassword" id="strNewPassword"class="requiredField" value="">
					<label class="requiredLabel">Repeat Password</label>
					<input type="text" name="strRepeatePassword" id="strRepeatePassword"class="requiredField">
					<input type="submit" name="strUpdate" value="Update" class="btn btn-primary" value="">
				</form>
			</div><!---password-->
		</div><!--formHouse-->

	</div><!--formHolder-->
</div><!--formContainer-->