<?php
function uploadFile($whichFile)
{
	$directoryToSaveFileInto = "../assets";
	$serverLocationAndName = $directoryToSaveFileInto."/".$_FILES[$whichFile]["name"];
	move_uploaded_file($_FILES[$whichFile]["tmp_name"], $serverLocationAndName);

	return $_FILES[$whichFile]["name"];
}

function dbConnect()
{
	$con = mysqli_connect("192.185.103.157","shwetapr_floppyD","123456","shwetapr_floppyDawg");
	if ( mysqli_connect_errno())
	{
		echo "oh no... the sky is falling";
	}
	return $con;
}
function runSQL($sql)
{
	/// we will save our registration here.... 
	$con = dbConnect();
	
	# this executes our query from above, on the connection $con
	mysqli_query($con, $sql);
	mysqli_close($con);

}
function runDeleteSQL($sql)
{
	/// we will save our registration here.... 
	$con = dbConnect();
	
	# this executes our query from above, on the connection $con
	mysqli_query($con, $sql);
	mysqli_close($con);

}

function runInsertSQL($sql)
{
	/// we will save our registration here.... 
	$con = dbConnect();
	
	# this executes our query from above, on the connection $con
	mysqli_query($con, $sql);
	$lastID = mysqli_insert_id($con);
	mysqli_close($con);

	return $lastID;
}

function getGlobalValue($record)
{
	$arrGlobalValue = runSelectSQL("SELECT * FROM siteglobals WHERE strName='".$record."'");
	return $arrGlobalValue[0]["strValue"];
}

function runSelectSQL($sql)
{
	/// we will save our registration here.... 
	$con = dbConnect();
	$queryResultArray = array();

	# this executes our query from above, on the connection $con
	$result = mysqli_query($con, $sql);
	
	while ($arrResultRow=mysqli_fetch_assoc($result))
	{
		$queryResultArray[] = $arrResultRow;
	}

	mysqli_close($con);

	// output my "toast"
	return $queryResultArray;
}

function showResultInTable($arrData)
{
	$html="";
	$headerRow="";

	$arrData = (isset($arrData))?$arrData:"";

	foreach($arrData as $arrRow)
	{
		$html .= "<div class='datarow'><div class='datacell'><a href='delete.php?id=".$arrRow["id"]."'>DELETE</a></div>";
		$headerRowCells = ""; // make sure its blanked out for each row

			// this is all the fields for a SINGLE ROW
			$arrRow = (isset($arrRow))?$arrRow:"";
			foreach($arrRow as $fieldName=>$arrValue)
			{
				$headerRowCells .= "<div class='headercell'>".$fieldName."</div>";
				$html .= "<div class='datacell'><a href='details.php?id=".$arrRow["id"]."'>".$arrValue."</a></div>\n";
			}
		
		$headerRow = "<div class='headerrow'><div class='headercell'>Delete</div>".$headerRowCells."</div>";
		
		$html .= "</div>";

	}

	echo $headerRow;
	echo $html;
}


?>