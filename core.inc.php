<?php
    ob_start();
	if(session_start())
	{
	$current_file=$_SERVER['SCRIPT_NAME'];
	}
	function logged_in()
	{
		if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
			return true;
		else
			return false;
	}
	function getfield($field)
	{
		$query="select `$field` from `users` where `id`='".$_SESSION['user_id']."'";
		if($query_run=mysql_query($query))
		{
			if($query_result=mysql_result($query_run,0,$field))
				return $query_result;
		}
	}
	function getfield_admin($field)
	{
		$query="select `$field` from `admin` where `aid`='".$_SESSION['user_id']."'";
		if($query_run=mysql_query($query))
		{
			if($query_result=mysql_result($query_run,0,$field))
				return $query_result;
		}
	}
	function getfield_trainer($field)
	{
		$query="select `$field` from `trainer` where `trid`='".$_SESSION['user_id']."'";
		if($query_run=mysql_query($query))
		{
			if($query_result=mysql_result($query_run,0,$field))
				return $query_result;
		}
	}
	function getfield_teacher($field)
	{
		$query="select `$field` from `teacher` where `teid`='".$_SESSION['user_id']."'";
		if($query_run=mysql_query($query))
		{
			if($query_result=mysql_result($query_run,0,$field))
				return $query_result;
		}
	}
?>