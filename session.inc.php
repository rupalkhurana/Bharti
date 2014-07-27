<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	$name=getfield_trainer('name');
	$query="insert into `session` values('','Session_".$name."','','start')";
	$query_run=mysql_query($query);
	if($query_run)
	{
		echo "Session_$name started successfully !";
		}
	else
		echo "Session was not started !";
?>