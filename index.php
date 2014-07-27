<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
	include 'core.inc.php';
	include 'connect.inc.php';
	if(logged_in())
	{
		include $_SESSION['role'].'.php';
	}
	else
	{
		include 'loginform.inc.php';
	}
?>