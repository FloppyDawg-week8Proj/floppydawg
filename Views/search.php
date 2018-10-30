<?php
include("dbqueries.php");

$arrResults = runSelectSQL("SELECT * FROM register, purchase");
?>