<?php
include_once("dbqueries.php");

$sort = (isset($_GET["strSortBy"]))?" ORDER BY ".$_GET["strSortBy"] : "";

if (isset($_GET["strKeyword"]))
{	
	$test  = "register

	LEFT JOIN purchase

	ON register.id = purchase.nRegisterID";
	
	$sql = "SELECT strFirstName, strLastName, strEmail, nOrderNumber, nOrderDate
					FROM ".$test."
					WHERE strFirstName LIKE '%".$_GET['strKeyword']."%' OR strLastName LIKE '%".$_GET['strKeyword']."%' OR strEmail LIKE '%".$_GET['strKeyword']."%' OR nOrderNumber LIKE '%".$_GET['strKeyword']."%' OR nOrderDate LIKE '%".$_GET['strKeyword']."%' $sort";
}
else {
	$sql = "SELECT * FROM register

	LEFT JOIN purchase

	ON register.id = purchase.nRegisterID";
}

$arrResults = runSelectSQL($sql);

if ($arrResults){
	runSelectSQL(
	"SELECT
	register.strFirstName,
	register.strLastName,
	register.strEmail,
	purchase.nOrderNumber,
	purchase.nOrderDate

	FROM register

	LEFT JOIN purchase

	ON register.id = purchase.nRegisterID"
	);

	foreach($arrResults as $result) {
	?>
	<tr>
		<td><?=$result['strFirstName']?></td>
		<td><?=$result['strLastName']?></td>
		<td><?=$result['strEmail']?></td>
		<td><?=$result['nOrderNumber']?></td>
		<td><?=$result['nOrderDate']?></td>
	</tr>
	<?php
	}
}

else {
	echo "<div class='noResults'>No results found.</div>";
}
?>