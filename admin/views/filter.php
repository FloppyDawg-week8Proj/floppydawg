<?php
include_once("../../../../functions/dbqueries.php");

$sort = (isset($_GET["strSortBy"]))?" ORDER BY ".$_GET["strSortBy"] : "";

if (isset($_GET["strKeyword"]))
{	
	$test = "members

	LEFT JOIN purchase

	ON members.id = purchase.nMemberID";
	
	$sql = "SELECT strFirstName, strLastName, strEmail, nOrdersStatusID, date
					FROM ".$test."
					WHERE strFirstName LIKE '%".$_GET['strKeyword']."%' OR strLastName LIKE '%".$_GET['strKeyword']."%' OR strEmail LIKE '%".$_GET['strKeyword']."%' OR nOrdersStatusID LIKE '%".$_GET['strKeyword']."%' OR date LIKE '%".$_GET['strKeyword']."%' $sort";
}
else {
	$sql = "SELECT * FROM members

	LEFT JOIN purchase

	ON members.id = purchase.nMemberID";
}

$arrResults = runSelectSQL($sql);

if ($arrResults){
	runSelectSQL(
	"SELECT
	members.strFirstName,
	members.strLastName,
	members.strEmail,
	purchase.nOrdersStatusID,
	purchase.date

	FROM members

	LEFT JOIN purchase

	ON members.id = purchase.nMemberID"
	);

	foreach($arrResults as $result) {
	?>
	<tr>
		<td><?=$result['strFirstName']?></td>
		<td><?=$result['strLastName']?></td>
		<td><?=$result['strEmail']?></td>
		<td><?=$result['nOrdersStatusID']?></td>
		<td><?=$result['date']?></td>
	</tr>
	<?php
	}
}

else {
	echo "<div class='noResults'>No results found.</div>";
}
?>