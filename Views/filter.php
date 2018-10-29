<?php
include_once("dbqueries.php");

$sort = (isset($_GET["strSortBy"]))?" ORDER BY ".$_GET["strSortBy"] : "";

if (isset($_GET["strKeyword"]))
{
	$sqlRegister = "SELECT * FROM register WHERE strFirstName LIKE '%".$_GET['strKeyword']."%' $sort";
}
else {
	$sqlRegister = "SELECT * FROM register $sort";
}

$arrResults = runSelectSQL($sqlRegister);

if ($arrResults){
	$sqlRegister = runSelectSQL(
	"SELECT
	register.strFirstName,
	register.strLastName,
	register.strEmail,
	purchase.nOrderNumber

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
		<!-- <td><?=$result['nOrderNumber']?></td> -->
	
	</tr>
	<?php
	}
}

else {
	echo "No results found.";
}
?>