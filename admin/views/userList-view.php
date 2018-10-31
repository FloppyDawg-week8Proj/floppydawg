<?php
$arrUser = runSelectSQL("SELECT * FROM users");
?>

<section>
<table id="usersTable">
	<tr>
		<th>Name</th>
		<th>User Name</th>
		<th>Password</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
<?php foreach($arrUser as $users) { ?>	
	<tr>
		<td><?=$users['strFullName']?></td>
		<td><?=$users['strUserName']?></td>
		<td><?=$users['strPassword']?></td>
		<td><a href="?page=editUser&id=<?=$users['id'];?>" class="editBtn">Edit</a></td>
		<td><a href="?page=deleteUser&id=<?=$users['id'];?>" class="deleteBtn">Delete</a></td>
	</tr>
<?php } ?>
</table>
</section><!--productsTable-->