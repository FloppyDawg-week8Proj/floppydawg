<?php
$sql = "DELETE FROM users WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);
header("location: index.php?page=users");

?>