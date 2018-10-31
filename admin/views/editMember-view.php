<?php 
include("cmsHeader-view.php");
include("../../../../functions/dbqueries.php");
$arrMembers = runSelectSQL("SELECT * FROM members WHERE id=".$_GET["id"]);
?>
<div class="addMemberContainer">
	<form method="post" action="update_member.php" class="addMemberForm" enctype="multipart/form-data">
		<h2>Edit Member</h2>
		<label class="required">First Name</label>
		<input type="text" name="strFirstName" class="required" value="<?=$arrMembers[0]['strFirstName']?>"/>

		<label class="required">Last Name</label>
		<input type="text" name="strLastName" class="required" value="<?=$arrMembers[0]['strLastName']?>"/>

		<label class="required">Street Address</label>
		<input type="text" name="strStreetAddress" class="required" value="<?=$arrMembers[0]['strStreetAddress']?>">

		<label class="required">Zip Code</label>
		<input type="text" name="strZipCode" class="required" value="<?=$arrMembers[0]['strZipCode']?>"/>

		<label class="required">Email</label>
		<input type="text" name="strEmail" class="required" value="<?=$arrMembers[0]['strEmail']?>"/>

		<label class="required">Password</label>
		<input type="password" name="strPassword" class="required" value="<?=$arrMembers[0]['strPassword']?>"/>

		<input type="submit" value="Save changes">
	</form><!--editMemberForm-->
</div><!--editMemberContainer-->

<?php
include("cmsFooter-view.php");
?>