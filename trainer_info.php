<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	$name=getfield_trainer('name');
	$username=getfield_trainer('username');
	$trid=getfield_trainer('trid');
	$location=getfield_trainer('loc');
	$no_of_training=getfield_trainer('no_of_train');
	$no_of_school=getfield_trainer('no_of_sc');
	$no_of_teacher=getfield_trainer('no_of_teach');
		echo "<table width='90%' border='1' cellspacing='1' cellpadding='1'>
		  <tr>
			<td>Trainer ID</td>
			<td>$trid</td>
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
			<td>Number of School</td>
			<td>$no_of_school</td>
		  </tr>
		  <tr>
			<td>Location</td>
			<td>$location</td>
		  </tr>
		  <tr>
			<td>Number of training</td>
			<td>$no_of_training</td>
		  </tr>
		  <tr>
			<td>No of Teachers</td>
			<td>$no_of_teacher</td>
		  </tr>
		</table>";
?>