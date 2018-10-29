<?php
include("dbqueries.php");

$arrResults = runSelectSQL("SELECT * FROM register");
print_r($arrResults);
?>