<?php
include("cmsHeader-view.php");
include("../../../../functions/dbqueries.php");
$arrMembers = runSelectSQL("SELECT * FROM members");
?>

<section>
<table id="membersTable">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Street Address</th>
		<th>Zip Code</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php foreach($arrMembers as $member) { ?>	
	<tr>
		<td><?=$member['strFirstName']?></td>
		<td><?=$member['strLastName']?></td>
		<td><?=$member['strStreetAddress']?></td>
		<td><?=$member['strZipCode']?></td>
		<td><?=$member['strEmail']?></td>
		<td><a href="" class="editBtn">Edit</a></td>
		<td><a href="" class="deleteBtn">Delete</a></td>
	</tr>
<?php } ?>
</table>
</section><!--membersTable-->

<?php
include("cmsFooter-view.php");
?>