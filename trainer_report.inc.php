<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

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
  	<h1>Training Feedback</h1>
	</div>
	<?php
	  $query="select sum(content),sum(activity),sum(support),sum(question),sum(present),sum(pace),sum(learn),sum(keyy),sum(suggest) from `trainerfb`";
	  $query_run=mysql_query($query);
	  if($query_run)
	  {
		$content=mysql_result($query_run,0,sum(content))/mysql_num_rows($query_run);
		$activity=mysql_result($query_run,0,sum(activity))/mysql_num_rows($query_run);
		$support=mysql_result($query_run,0,sum(support))/mysql_num_rows($query_run);
		$question=mysql_result($query_run,0,sum(question))/mysql_num_rows($query_run);
		$present=mysql_result($query_run,0,sum(present))/mysql_num_rows($query_run);
		$pace=mysql_result($query_run,0,sum(pace))/mysql_num_rows($query_run);
		$learn=mysql_result($query_run,0,sum(learn))/mysql_num_rows($query_run);
		$keyy=mysql_result($query_run,0,sum(keyy))/mysql_num_rows($query_run);
		$suggest=mysql_result($query_run,0,sum(suggest))/mysql_num_rows($query_run);
	  }
     
	echo "<table class='table'>
  <tbody>
      <tr>
         <td width='90%'>1.The Content was meaningful with respect to the objectives of the session and addressed to the expectation of the participants</td>
         <td width='10%'> $content</td>
      </tr>
        <tr>
         <td width='90%'>2.The activities,group work,discussions were useful and engaging</td>
         <td width='10%'> $activity</td>
      </tr>
        <tr>
         <td width='90%'>3.The facilitator questioned,probed,challenged the participants to draw out responses and processed them to facilitate learning </td>
         <td width='10%'>$support </td>
      </tr>
        <tr>
         <td width='90%'>4.The facilitator was supportive and effective</td>
         <td width='10%'>$question </td>
      </tr>
        <tr>
         <td width='90%'>5.The presentation was clear and helped my understanding.</td>
         <td width='10%'>$pace $present</td>
      </tr>
        <tr>
         <td width='90%'>6.The pace of the presentation was consistent.</td>
         <td width='10%'> $learn</td>
      </tr>
        <tr>
         <td width='90%'>7.The learning of the session can be used/applied in the workplace.</td>
         <td width='10%'> $present </td>
      </tr>
        <tr>
         <td width='70%'>8.Mention the key learning which you will incorporate in your classroom(in 200words)</td></tr>
         <tr><td width='90%'> $keyy</td>
      </tr>
        <tr>
         <td width='70%'>9.Any suggestions related to content/facilitation you may have to further improve this session(in 200words)</td></tr>
         <tr><td width='30%'> $suggest</td>
      </tr>
       
   </tbody>
</table>;"
?>  
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
