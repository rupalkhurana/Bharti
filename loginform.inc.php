<?php
	
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['role']))
	{
		$user_id=$_POST['username'];
		$password=$_POST['password'];
		$role=$_POST['role'];
		if(!empty($user_id)&&!empty($password)&&$role!='Select')
		{
			//Checks For Teacher Login
			if($role=='Teacher')
			{
				$query="select `teid` from `teacher` where `username`='$user_id' and `password`='$password'";
				$query_run=mysql_query($query);
				if($query_run)
				{
					$query_num_rows=mysql_num_rows($query_run);
					if($query_num_rows==0)
						echo "Invalid Username Password Combination";
					else if($query_num_rows==1)
						{
							$id=mysql_result($query_run,0,'teid');
							$_SESSION['user_id']=$id;
							$_SESSION['role']='teacher';
							header('Location:'.$_SERVER['SCRIPT_NAME']);
						}
				}
			}
			//Checks For Trainer Login
		    else if($role=='Trainer')
			{
				$query="select `trid` from `trainer` where `username`='$user_id' and `password`='$password'";
				$query_run=mysql_query($query);
				if($query_run)
				{
					$query_num_rows=mysql_num_rows($query_run);
					if($query_num_rows==0)
						echo "Invalid Username Password Combination";
					else if($query_num_rows==1)
						{
							$id=mysql_result($query_run,0,'trid');
							$_SESSION['user_id']=$id;
							$_SESSION['role']='trainer';
							header('Location:index.php');
						}
				}
			}
			//Checks For cluster Coordinator Login
			else if($role=='Cluster Coordinator')
			{
				$query="select `ccid` from `cc` where `username`='$user_id' and `password`='$password'";
				$query_run=mysql_query($query);
				if($query_run)
				{
					$query_num_rows=mysql_num_rows($query_run);
					if($query_num_rows==0)
						echo "Invalid Username Password Combination";
					else if($query_num_rows==1)
						{
							$id=mysql_result($query_run,0,'ccid');
							$_SESSION['user_id']=$id;
							$_SESSION['role']='cc';
							header('Location:index.php');
						}
				}
			}
			else
			{
				$query="select `aid` from `admin` where `username`='$user_id' and `password`='$password'";
				$query_run=mysql_query($query);
				if($query_run)
				{
					$query_num_rows=mysql_num_rows($query_run);
					if($query_num_rows==0)
						echo "Invalid Username Password Combination";
					else if($query_num_rows==1)
						{
							$id=mysql_result($query_run,0,'aid');
							$_SESSION['user_id']=$id;
							$_SESSION['role']='admin';
							echo 'ok!';
							header('Location:index.php');
						}
				}
			}
		}
		else
		{
			echo 'You must supply a user id and a password...';
		}
	}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-color:#88a">
  

  		<div class ="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-5" style = "text-align:center">
  				<br>
  				<h1 style="font-size:3em;"><b> BHARTI FOUNDATION</b></h1>
  				<br>
  				<br>
  				<br>
         <form action="index.php" method="POST">
 		 <span style="font-size:1.5em"></b>Role : <b></span><select name="role" id="select">
    	<option>Teacher</option>
        <option>Trainer</option>
        <option>Cluster Coordinator</option>
        <option>Admin</option>
        <option selected="selected">Select</option>
	 	 </select> <br>
		  <input type="text" name="username" class="form-control" placeholder="Email address" required autofocus>
		  <br>
		  <input type="password" name="password" class="form-control" placeholder="Password" required>
		  <br>
	 	 <input type="submit" class = "btn btn-lg" value="Log in" />
		</form>
		</div>
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>