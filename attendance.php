<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	if(isset($_POST['day'])&&!empty($_POST['day']))
	{	$day=$_POST['day'];
	$name=getfield_trainer('name');
	$trid=getfield_trainer('trid');
	$query="select * from `session` where `session`='Session_$name' and `status`='start'";
	$query_run=mysql_query($query);
	if($query_run)
	{
		while ($row = mysql_fetch_array($query, MYSQL_ASSOC))
		{
			echo "Attending -> ";
			printf(" ID: %s  Name: %s ", $row["sid"], $row["teacher"]);
			$sid=$row["sid"];
			$tname=$row["teacher"];
			$query="insert into `attendance` values('$sid','$tname','A','A','A','A','A','A','A','A','A','A')";
			$query_run=mysql_query($query);
			if($query_run)
			{
				$query="update `attendance` set `d$day`='P' where `sid`='$sid' and `tname`='$tname'";
				$query_run=mysql_query($query);
				if($query_run)
				{
					echo 'Updated successfully !';
				}
			}
		}
	}
	else
		echo 'technical errors !';}
?>
<form action="attendance.php" method="post">
Day : <input type="text" name="day" />
<input type="submit" value="take" name="day">
</form>