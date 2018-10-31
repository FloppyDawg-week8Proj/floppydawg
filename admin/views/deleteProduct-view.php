<?php
$sql = "DELETE FROM products WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);
header("location: index.php?page=products");

?>