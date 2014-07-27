<?php 


$mysql_host = "localhost";
$mysql_database = "bharti";
$mysql_user = "root";
$mysql_password = "cfg2014!"; 



$id = $_POST['id'];
$contact = $_POST['contact'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$yoj = $_POST['yoj'];
$ccid = $_POST['ccid'];
$gender = $_POST['gender'];
$type = $_POST['type'];
$tskt = $_POST['tskt'];
$obscore = $_POST['obscore'];
$school = $_POST['school'];
$subject = $_POST['subject'];
$training = $_POST['training'];
$name = $_POST['name'];

mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "INSERT INTO teacher(teid,contact,edu,yoe,doj,ccid,gender,type,tskt,observation,subjects,training_attended,name,school) VALUES('".$id."','".$contact."','".$qualification."','".$experience."','".$yoj."','".$ccid."','".$gender."','".$type."','".$tskt."','".$obscore."','".$subject."','".$training."','".$name."','".$school."')";
mysql_query($query) or die('Die!'.mysql_error());


echo 'success';
?>