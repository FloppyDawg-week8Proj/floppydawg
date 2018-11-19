<div class="addMemberContainer">
	<form method="post" action="views/save_member.php" class="addMemberForm" enctype="multipart/form-data">
		<h2>Add A Member</h2>
		<label class="required">First Name</label>
		<input type="text" name="strFirstName" class="required" value=""/>

		<label class="required">Last Name</label>
		<input type="text" name="strLastName" class="required" value=""/>

		<label class="required">Street Address</label>
		<input type="text" name="strStreetAddress" class="required">

		<label class="required">Zip Code</label>
		<input type="text" name="strZipCode" class="required" value=""/>

		<label class="required">Email</label>
		<input type="text" name="strEmail" class="required" value=""/>

		<label class="required">Password</label>
		<input type="password" name="strPassword" class="required" value=""/>

		<input type="submit" value="Add Member">
	</form><!--addMemberForm-->
</div><!--addMemberContainer-->
