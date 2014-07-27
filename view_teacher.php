<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	$var=$_GET['teid'];
	$query="select * from `teacher` where `teid`=$var";
	$query_run=mysql_query($query);
	if($query_run&&mysql_num_rows($query_run)==1)
	{
		$username=mysql_result($query_run,0,'username');
		$name=mysql_result($query_run,0,'name');
		$school=mysql_result($query_run,0,'school');
		$gender=mysql_result($query_run,0,'gender');
		$edu=mysql_result($query_run,0,'edu');
		$type=mysql_result($query_run,0,'type');
		$doj=mysql_result($query_run,0,'doj');
		$yoe=mysql_result($query_run,0,'yoe');
		$tskt=mysql_result($query_run,0,'tskt');
		$training=mysql_result($query_run,0,'training_attended');
		echo "<table width='90%' border='1' cellspacing='1' cellpadding='1'>
		  <tr>
			<td>Teacher ID</td>
			<td>$var</td>
		  </tr>
		  <tr>
			<td>Username</td>
			<td>$username</td>
		  </tr>
		  <tr>
			<td>Name</td>
			<td>$name</td>
		  </tr>
		  <tr>
			<td>School</td>
			<td>$school</td>
		  </tr>
		  <tr>
			<td>Gender</td>
			<td>$gender</td>
		  </tr>
		  <tr>
			<td>Education</td>
			<td>$edu</td>
		  </tr>
		  <tr>
			<td>Type</td>
			<td>$type</td>
		  </tr>
		  <tr>
			<td>Date of joining</td>
			<td>$doj</td>
		  </tr>
		  <tr>
			<td>Year of Experience</td>
			<td>$yoe</td>
		  </tr>
		  <tr>
			<td>TSKT Score</td>
			<td>$tskt</td>
		  </tr>
		  <tr>
			<td>Trainings Attended</td>
			<td>$training</td>
		  </tr>
		</table>";
	}
	else
	  echo "Invalid Teacher Id";
?>