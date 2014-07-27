<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

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
	if(isset($_POST['date'])&&isset($_POST['session'])&&isset($_POST['trainer'])&&isset($_POST['location'])&&isset($_POST['qstn1'])&&isset($_POST['qstn2'])&&isset($_POST['qstn3'])&&isset($_POST['qstn4'])&&isset($_POST['qstn5'])&&isset($_POST['qstn6'])&&isset($_POST['qstn7'])&&isset($_POST['qstn8'])&&isset($_POST['qstn9']))
	{
		$teacher=$_POST['date'];
		$teid=$_POST['session'];
		$plan=$_POST['trainer'];
		$closure=$_POST['location'];
		$ques=$_POST['qstn1'];
		$skill=$_POST['qstn2'];
		$concep=$_POST['qstn3'];
		$class=$_POST['qstn4'];
		$blackboard=$_POST['qstn5'];
		$teach=$_POST['qstn6'];
		$concept=$_POST['qstn7'];
		$improve=$_POST['qstn8'];
		$improve1=$_POST['qstn9'];
		$query="insert into `trainerfb` values('','$teid','$plan','$closure','$ques','$skill','$concep','$class','$blackboard','$teach','$concept','$improve','$improve1')";
		$query_run=mysql_query($query);
		if($query_run)
			echo "Feedback Submited Successfully !";
		else
			echo "Erroe Occured !";
	}
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
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	<br/>
	<br/>
    <div class="page-header">
  	<h1>Training Feedback Form</h1>
	</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
        <form action="feedbackform.php" method="post">

        <div class="form-group">

            <label>DATE:

            <input type="text" class="form-control" id="Date" name="date"></label>

        </div>
         <div class="form-group">

            <label>Name Of Session:

            <input type="text" class="form-control" id="Session_name" name="session"></label>

        </div>
         <div class="form-group">

            <label>Name Of Facilitator:

            <input type="text" class="form-control" id="Facil" name="trainer"></label>

        </div>
         <div class="form-group">

            <label>Training Location:

            <input type="text" class="form-control" id="Location" name="location"></label>

        </div>
        <table class="table" border="1">
   <caption>Please Enter the score in the following statements as per the given key</caption>
   <thead>
      <tr>
         <th>1</th>
         <th>2</th><th>3</th>
         <th>4</th><th>5</th>
         <th>6</th><th>7</th>
         <th>8</th><th>9</th>
         <th>10</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>0% to 10%</td>
          <td>11% to 20%</td> <td>21% to 30%</td> <td>31% to 40%</td> <td>41% to 50%</td> <td>51% to 60%</td>
           <td>61% to 70%</td> <td>71% to 80%</td> <td>81% to 90%</td> <td>91% to 100%</td>
      </tr>
    
   </tbody>
</table>

	<table class="table">
  <tbody>
      <tr>
         <td width="90%">1.The Content was meaningful with respect to the objectives of the session and addressed to the expectation of the participants</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn1" ></td>
      </tr>
        <tr>
         <td width="90%">2.The activities,group work,discussions were useful and engaging</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn2"></td>
      </tr>
        <tr>
         <td width="90%">3.The facilitator questioned,probed,challenged the participants to draw out responses and processed them to facilitate learning </td>
         <td width="10%"> <input type="text" class="form-control" name="qstn3"></td>
      </tr>
        <tr>
         <td width="90%">4.The facilitator was supportive and effective</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn4"></td>
      </tr>
        <tr>
         <td width="90%">5.The presentation was clear and helped my understanding.</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn5"></td>
      </tr>
        <tr>
         <td width="90%">6.The pace of the presentation was consistent.</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn6"></td>
      </tr>
        <tr>
         <td width="90%">7.The learning of the session can be used/applied in the workplace.</td>
         <td width="10%"> <input type="text" class="form-control" name="qstn7"></td>
      </tr>
        <tr>
         <td width="70%">8.Mention the key learning which you will incorporate in your classroom(in 200words)</td></tr>
         <tr><td width="90%">  <textarea class="form-control" name="qstn8"></textarea></td>
      </tr>
        <tr>
         <td width="70%">9.Any suggestions related to content/facilitation you may have to further improve this session(in 200words)</td></tr>
         <tr><td width="30%"> <textarea class="form-control" name="qstn9"></textarea></td>
      </tr>
       
   </tbody>
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
