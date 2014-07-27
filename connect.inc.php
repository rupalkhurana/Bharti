<?php

$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';

$mysql_db='bharti';
if(!mysql_connect($mysql_host,$mysql_username,$mysql_password)||!mysql_select_db($mysql_db))
{
	die(mysql_error());
}
?>