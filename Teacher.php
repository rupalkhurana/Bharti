<?php
	$t_id=$_SESSION['user_id'];
	
	$query="select * from `teacher` where `teid`=$t_id";
	
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
	}
?>
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
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

      <div class="container" >
      <br/>
      <br/>
      <br/><br/>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="panel panel-primary">
                      <div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Personal Details:</div>
                      <div class="panel-body">
                        <div class="row">
                           <div class="col-xs-12 col-md-8">
                                   
                                      <table class="table table-hover">
                                        <tr><th>Name</th><td><?php echo $name; ?></td></tr>
                                        <tr><th>School</th><td><?php echo $school; ?></td></tr>
                                        <tr><th>Education</th><td><?php echo $edu; ?></td></tr>
                                        <tr><th>Gender</th><td><?php echo $gender; ?></td></tr>
                                        <tr><th>Year Of Experience</th><td><?php echo $yoe; ?></td>
                                        </tr>
                                        <tr><th>Date Of Joining</th><td><?php echo $doj; ?></td></tr>
                                       
                                      </table>
                                    
                             </div>
                         </div>
                       </div>
                    </div>
                </div>
                             </div>
                             </div>
                             </div>
                             
                             
                      
</body>
</html>