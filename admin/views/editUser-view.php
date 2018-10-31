<?php
$arrUsers = runSelectSQL("SELECT * FROM users WHERE id=".$_GET["id"]);
?>

	<form method="POST"action="views/updateUser-view.php" class="userView">
		<input type="hidden" name="id" value="<?=$arrUsers[0]['id']?>">
		<h1>Add A User</h1>
		<label>Full Name:</label>
		<input type="text" name="strFullName" id="strFullName" value="<?=$arrUsers[0]['strFullName']?>">

		<label>Username:</label>
		<input type="text" name="strUserName" id="strUserName" value="<?=$arrUsers[0]['strUserName']?>">

		<label>Password:</label>
		<input type="password" name="strPassword" id="strPassword" value="<?=$arrUsers[0]['strPassword']?>"><br><br>
		<input type="submit" value="Save Changes" >
		<a href="?page=users">Cancel</a>
	</form>

