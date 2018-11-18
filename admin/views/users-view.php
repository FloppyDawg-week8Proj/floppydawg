<div id="users">
	<h2>Users</h2>
	<div id="userBox">

		<?php
		include("userList-view.php");
		?>

	</div><!--userBox-->
	<form class="userView">
		<h1>Add A User</h1>
		<label>Full Name:</label>
		<input type="text" name="strFullName" id="strFullName" value="">

		<label>Username:</label>
		<input type="text" name="strUserName" id="strUserName" value="">

		<label>Password:</label>
		<input type="password" name="strPassword" id="strPassword"><br><br>
		<a href="#" id="doAjax" class="addUser">ADD USER</a>
	</form>
	`
</div><!--users-->
<script>
	$(function(){

	$("#doAjax").click(function(){
		$.ajax(
		{
			url: "views/addUser-view.php",
			method: "POST",
			data: {
				strFullName: $("#strFullName").val(),
				strUserName: $("#strUserName").val(),
				strPassword: $("#strPassword").val()
			},

			success: function(result){
        		$("#userBox").html(result);
        		return false;
        	},
   		 	error: function(response)
   		 	{
   		 		console.log(response.statusText);
   		 	}
   		});

		return false;
		
	});

});
</script>

