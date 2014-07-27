<?php 


$mysql_host = "localhost";
$mysql_database = "bharti";
$mysql_user = "root";
$mysql_password = "cfg2014!"; 



$school = $_POST['feed_school'];
$date2=$_POST['feed_data'];
$teachname=$_POST['teach_name'];
$teachnum=$_POST['teach_num'];
$obsno=$_POST['Obsno'];
$grade1=$_POST['Grade1'];
$grade2=$_POST['Grade2'];
$grade3=$_POST['Grade3'];
$grade4=$_POST['Grade4'];
$grade5=$_POST['Grade5'];
$grade6=$_POST['Grade6'];
$grade7=$_POST['Grade7'];
$grade8=$_POST['Grade8'];
$total=$_POST['Total'];
$rem1 = $_POST['Rem1'];
$rem2 = $_POST['Rem2'];
$rem3 = $_POST['Rem3'];
$rem4 = $_POST['Rem4'];
$rem5 = $_POST['Rem5'];
$rem6 = $_POST['Rem6'];
$rem7 = $_POST['Rem7'];
$rem8 = $_POST['Rem8'];
$subtopic = $_POST['sub_topic'];
$no_student = $_POST['Stu_present'];
$no_checked = $_POST['num_stu_checked'];
$rem9 = $_POST['Rem9'];
$total = $grade1 + $grade2 + $grade3 + $grade4 + $grade5 + $grade6 + $grade7 + $grade8;
$feedback = "TLM : $rem1
Seating plan : $rem2
Was classroom teaching interactive ? : $rem3
Were students comfortable and confident ? : $rem4
Recently done classwork & homework;notebook correction and maintainence : $rem5
Quickly check for learning level : $rem6
Lesson plan dairy : $rem7
Curriculum Implementation : $rem8
Response by teacher : $rem9
Total Score : $total";
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "INSERT INTO ccFB(teacher_id,date,feedback) VALUES('".$teachnum."','".$date2."','".$feedback."')";
mysql_query($query) or die('Die!'.mysql_error());

echo 'success';
?>