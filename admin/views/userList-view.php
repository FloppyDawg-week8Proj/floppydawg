<?php
$arrUser = runSelectSQL("SELECT * FROM users");
?>

<section>
<table id="usersTable" class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>User Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<tr class="addNew">
			<td>
				<a href="?page=addUser">
					<img src="images/iconAdd.png" alt="iconAdd" class="iconAdd">
					<p class="addBtn">Add a User</p>
				</a>
			</td>
		</tr>
	<?php foreach($arrUser as $users) { ?>	
		<tr>
			<td><?=$users['strFullName']?></td>
			<td><?=$users['strUserName']?></td>
			<td><a href="?page=editUser&id=<?=$users['id'];?>" class="editBtn">Edit</a></td>
			<td><a href="?page=deleteUser&id=<?=$users['id'];?>" class="deleteBtn">Delete</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</section><!--usersTable-->