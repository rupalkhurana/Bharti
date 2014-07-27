<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cluster Cordinator</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    
    </style>
  </head>
  <?php
  if(isset($_POST['submit']))
  {
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
}
?>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
			<li><a href="logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	<br/>
	<br/>
    <div class="page-header">
  	<h1>Cluster Coordinator's Teacher Observation Sheet</h1>
	</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
      <form id="form1" name="form1" method="post" action="index.php"><label></label>
  <table  border="1" class="table">
     <tr>
      <td colspan="3">School:&nbsp;&nbsp;&nbsp;
       <input type="text" name="feed_school"/></td>
      <td colspan="2">Date:&nbsp;&nbsp;&nbsp;
       <input type="text" name="feed_date2"/></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2"><p>Name of Teacher:</p>
        <p>
          <input type="text" name="teach_name"/>
        </p>
        <p>Contact no:      </p>
      <p>
        <input type="text" name="teach_num"/>
      </p></td>
      <td height="147"><p>Obs Sl No:</p>
      <p>
        <input type="text" name="Obsno"/>
      </p></td>
      <td><p>Subject:</p>
       <p>
        <input type="text" name="Obsno"/>
      </p></td>
      <td><p>Topic of the subject being taught:</p>
       <p>
        <textarea name="sub_topic" cols="50" rows="3"></textarea>
       </p></td>
    </tr>
    <tr>
      <td height="65"><p>Total students enrolled in class</p></td>
      <td>Total Students present during class</td>
      <td>Number of students checked for .......</td>
    </tr>
    <tr>
      <td>Class</td>
      <td><input type="text" name="class"/></td>
      <td><input type="text" class="Num_en"/></td>
      <td><input type="text" name="Stu_present"/></td>
      <td><input type="text" name="num_stu_checked"/></td>
    </tr>
    <tr>
      <td>Sl.No</td>
      <td>Observation Points</td>
      <td>Observation Methodology</td>
      <td>Grade(1-10)</td>
      <td>Remarks by CC</td>
    </tr>
    <tr>
      <td>1.</td>
      <td>TLM [Only if day's topic and its flow has scope for use of TLM]</td>
      <td>Observe entire class as a whole class</td>
      <td><input name="Grade1" type="text" /></td>
      <td><textarea name="Rem1" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Seating plan</td>
      <td>Observe entire class as a whole class</td>
      <td><input name="Grade2" type="text" /></td>
      <td><textarea name="Rem2" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
	  <td>3.</td>
      <td>Was classroom teaching interactive,developing,connect with students?(Active learning)</td>
      <td>Observe entire class as a whole class</td>
      <td><input name="Grade3" type="text" /></td>
      <td><textarea name="Rem3" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
	  <td>4.</td>
      <td>Were students comfortable and confident?</td>
      <td>Observe entire class as a whole class</td>
      <td><input name="Grade4" type="text" /></td>
      <td><textarea name="Rem4" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Recently done classwork and homework;notebook correction and maintenance.</td>
      <td>5 students selected in class randomly to observe CW/HW done in this subject in last 7 days.</td>
      <td><input name="Grade5" type="text" /></td>
      <td><textarea name="Rem5" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Quick check for Learning Level.</td>
      <td>Few students selected randomly(pick 4 or 5 questions from last week's and lessons and ask)</td>
      <td><input name="Grade6" type="text" /></td>
      <td><textarea name="Rem6" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Lesson plan diary</td>
      <td>Observe the lesson plan diary.</td>
      <td><input name="Grade7" type="text" /></td>
      <td><textarea name="Rem7" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Curriculum implementation</td>
      <td>Observe entire class as a whole class</td>
      <td><input name="Grade8" type="text" /></td>
      <td><textarea name="Rem8" cols="50" rows="3"></textarea></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Total</td>
      <td><input name="Total" type="text" /></td>
      <td><textarea name="Rem9" cols="50" rows="3"></textarea></td>
    </tr>
     <tr>
      <td height="67" colspan="4"><p>Response by Teacher:</p>
       
       <p>&nbsp;</p>
	    <p>&nbsp;</p>
       <p>Signature of Teacher</p></td>
      <td><p>Name of HT:</p>
       <p>Signature of HT</p>
       <p>Name of CC</p>
       <p>Signature of CC</p></td>
    </tr>
  </table>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  
   </div>
  
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
  
  