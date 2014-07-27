


<html>
<title>Cluster Coordinator</title>
<body>
<h1>List of Schools</h1>
<table>
<?php 
session_start();
$mysql_host = "localhost";
$mysql_database = "bharti";
$mysql_user = "root";
$mysql_password = "cfg2014!"; 
$ccid = $_SESSION['user_id'];
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "SELECT * FROM teacher WHERE 'ccid' = $ccid";
$res = mysql_query($query) or die('Die!'.mysql_error());
$array = mysql_fetch_assoc($res);
foreach($array as $item)
{
	echo "<tr>$item['school']</tr>";
}




echo 'success';
?>
</table>
</body>
</html>