<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['teacher'])&&isset($_POST['Avg_1'])&&isset($_POST['Avg_2'])&&isset($_POST['Avg_3'])&&isset($_POST['Avg_4'])&&isset($_POST['Avg_5'])&&isset($_POST['Avg_6'])&&isset($_POST['Avg_7'])&&isset($_POST['Avg_8'])&&isset($_POST['Avg_9'])&&isset($_POST['Avg_10'])&&isset($_POST['improve']))
	{
		$teid=$_POST['teacher'];
		$effective=$_POST['Avg_1'];
		$plan=$_POST['Avg_2'];
		$closure=$_POST['Avg_3'];
		$ques=$_POST['Avg_4'];
		$skill=$_POST['Avg_5'];
		$concep=$_POST['Avg_6'];
		$class=$_POST['Avg_7'];
		$blackboard=$_POST['Avg_8'];
		$teach=$_POST['Avg_9'];
		$concept=$_POST['Avg_10'];
		$improve=$_POST['improve'];
		$query="insert into `teacherfb` values('','$teid','$effective','$plan','$closure','$ques','$skill','$concep','$class','$blackboard','$teach','$concept','$improve')";
		$query_run=mysql_query($query);
		if($query_run)
			echo "Feedback Submited Successfully !";
		else
			echo "Erroe Occured !";
	}
}
?>
<body>
<h2>Academic Observation of Teachers(AOT)</h2>
<form action="teacherfeedback.php" method="post">
<table width="761" height=" "border="1">
  <tr>
    <td width="21" rowspan="3">&nbsp;</td>
    <td colspan="2">School:
    <input type="text" name="school"/></td>
    <td colspan="2">Teacher:<input type="text" name="teacher"/></td>
  </tr>
  <tr>
    <td colspan="2">Criteria:
     <input type="text" name="school"/></td>
    <td colspan="2">Topic:<input type="text" name="topic"/></td>
  </tr>
  <tr>
    <td width="193">Criteria</td>
    <td width="205">Methodology</td>
    <td width="153">Scores</td>
    <td width="155">Average</td>
  </tr>
  <tr>
    <td rowspan="2">1.</td>
    <td rowspan="2"><p>Planning of the lesson and </p>
    <p>Curriculum Completion Status</p></td>
    <td>1.1 Check the lesson plan diary for the details of the components of a lesson plan(SMART lesson)</td>
    <td>&nbsp;</td>
    <td rowspan="2"><input type="text" name="Avg_1"/></td>
  </tr>
  <tr>
    <td>1.2 Check the lesson plan</td>
    <td><input type="text" name="score_1.2"/></td>
  </tr>
  <tr>
    <td rowspan="2">2.</td>
    <td rowspan="2">Self-Induction &amp; Closure</td>
    <td>2.1 Observe the teacher for checking the previous knowledge of students and linking it with the concept to be taught.</td>
    <td><input type="text" name="score_2.1"/></td>
    <td rowspan="2"><input type="text" name="Avg_2"/></td>
  </tr>
  <tr>
    <td>2.2 Observe the teacher for the closure of the lesson.</td>
    <td><input type="text" name="score_2.2"/></td>
  </tr>
  <tr>
    <td rowspan="3">3.</td>
    <td rowspan="3">Questioning and interaction.</td>
    <td>3.1 Look for the higher order questions</td>
    <td><input type="text" name="score_3.1"/></td>
    <td rowspan="3"><input type="text" name="Avg_3"/></td>
  </tr>
  <tr>
    <td>3.2 Look for the distribution of questions and processing of responses.</td>
    <td><input type="text" name="score_3.2"/></td>
  </tr>
  <tr>
    <td>3.3 Look for the teacher-student talk time</td>
    <td><input type="text" name="score_3.3"/></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Communication Skills</td>
    <td>Body language,energy and eye-contact with students pronunciation and voice modulation.</td>
    <td><input type="text" name="score_4.1"/></td>
    <td><input type="text" name="Avg_4"/></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Conceptual Clarity</td>
    <td>Look for the self-clarity of the teachers.</td>
    <td><input type="text" name="score_5.1"/></td>
    <td><input type="text" name="Avg_5"/></td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Classroom Management</td>
    <td>Look for the process of classroom transactions such as responding to questions,group formations.</td>
    <td><input type="text" name="score_6.1"/></td>
    <td><input type="text" name="Avg_6"/></td>
  </tr>
  <tr>
    <td>7</td>
    <td>Black-board organization</td>
    <td>Look for the presentation of information on the board and use of Gos</td>
    <td><input type="text" name="score_7.1"/></td>
    <td><input type="text" name="Avg_7"/></td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Use of Teaching Aids</td>
    <td>Look for teachers/students use of TLM and its end result after use.</td>
    <td><input type="text" name="score_8.1"/></td>
    <td><input type="text" name="Avg_8"/></td>
  </tr>
  <tr>
    <td>9.</td>
    <td>Students learning from the concept</td>
    <td>Assess the students learning on conceptual taught.</td>
    <td><input type="text" name="score_9.1"/></td>
    <td><input type="text" name="Avg_9"/></td>
  </tr>
  <tr>
    <td>10.</td>
    <td>Trainer's Self-reflection on training effectiveness</td>
    <td>Assess the effectiveness of your training sessions on the basis of its implementation by teacher.</td>
    <td><input type="text" name="score_10.1"/></td>
    <td><input type="text" name="Avg_10"/></td>
  </tr>
  <tr>
    <td colspan="5"><p>Highlights of the lessson:</p>
    <p>
      <textarea name="highlights" cols="50" rows="3"></textarea>
    </p></td>
  </tr>
  <tr>
    <td colspan="5"><p>Areas of improvement:</p>
    <p><textarea name="improve" cols="50" rows="3"></textarea></p></td>
  </tr>
</table>
<input type="submit" name="submit">
</form>
</body>
</html>
