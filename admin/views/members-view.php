<?php
$arrMembers = runSelectSQL("SELECT * FROM members");
?>

<section id="members">
<h2>Members</h2>

<span>
	<a href="?page=addMember">
		<img src="images/iconAdd.png" alt="iconAdd" class="iconAdd">
		<p class="addMember">Add a member</p>
	</a>
</span>

<table id="membersTable" class="table">
	<thead>	
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Street Address</th>
			<th>Zip Code</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($arrMembers as $member) { ?>	
	<tr>
		<td><?=$member['strFirstName']?></td>
		<td><?=$member['strLastName']?></td>
		<td><?=$member['strStreetAddress']?></td>
		<td><?=$member['strZipCode']?></td>
		<td><?=$member['strEmail']?></td>
		<td><a href="?page=editMember&id=<?=$member['id'];?>" class="editBtn">Edit</a></td>
		<td><a href="views/delete_member.php?id=<?=$member['id'];?>" onclick="return confirm('Are you sure?');" class="deleteBtn">Delete</a></td>
	</tr>
<?php } ?>
	</tbody>
</table><!--membersTable-->
</section><!--members-->