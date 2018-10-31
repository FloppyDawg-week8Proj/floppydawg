<?php
include("../../../../functions/dbqueries.php");

$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";

if ($_GET["error"])
{
	echo "<div id=errorContainer>
			<div class='error'>
			Please enter valid login credentials.
			</div>
		</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Floppy Dawg Login</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section id="loginFormContainer">
	<div class="loginForm">
	<div class="logoHolder">
		<img src="http://www.floppydawg.com/images/floppydog_logo_circle.png" alt="LogoPlaceholder">
	</div><!--logoHolder-->

	<form method="post" action="login_user.php">
		<input type="text" name="strUserName" placeholder="Enter username">

		<input type="password" name="strPassword" placeholder="Enter at least five characters">

		<input type="submit" value="Log in">
	</form>
	</div><!--loginForm-->
</section><!--loginFormContainer-->
</body>
</html>