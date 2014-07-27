
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administrator Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <script type="text/javascript">
		function load(thediv,thefile)
		{
			if(window.XMLHttpRequest)
				xmlhttp = new window.XMLHttpRequest;
			else
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById(thediv).innerHTML = xmlhttp.responseText;
				}
			}
			var v=$('#search1').val();
			xmlhttp.open('GET',thefile+"?teid="+v,true);
			xmlhttp.send();
		}
	</script>
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
          <a class="navbar-brand" href="#">Bharthi Foundation</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="#">Teacher</a></li>
            <li><a href="#about">Trainer</a></li>
            <li><a href="#contact">Cluster Coordinator</a></li>
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" style="margin-top: 120px;">
    	<ul class="nav nav-tabs" role="tablist" id="myTab">
		  <li class="active"><a href="#create" role="tab" data-toggle="tab">Create</a></li>
		  <li><a href="#edit" role="tab" data-toggle="tab">Insert</a></li>
		  <li><a href="#search" role="tab" data-toggle="tab">Search</a></li>
		  <li><a href="#delete" role="tab" data-toggle="tab">Delete</a></li>
		</ul>
		
		<div class="tab-content">
		  <div class="tab-pane active" id="create">
		  
		   <!-- Form Start -->
      <br>
        <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
          Teacher Type
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Elementary</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Primary</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Secondary</a></li>
          
        </ul>
      </div>
      <br>
      <!-- BFID -->
      <form action="index.php" method="post">
         <div class="form-group">
          <label for="BFID">BFID :</label>
          <input type="text" class="form-control" id="BFID" placeholder="BFID" name="bfid">
        </div>
        
        
         <div class="form-group">
          <label for="exampleInputPassword1">Name :</label>
          <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        
        
        <br>
        <label> Gender :</label>
        <div class="radio">
          <label>
            <input type="radio" name="male" id="male" value="male" checked>
           Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="female" id="female" value="female">
            Female
          </label>
        </div>
      
        
         <div class="form-group">
          <label for="exampleInputPassword1">School :</label>
          <input type="text" class="form-control" id="school" placeholder="School">
        </div>
        
        
        
         <div class="form-group">
          <label for="exampleInputPassword1">Years of Experience :</label>
          <input type="text" class="form-control" id="experience" placeholder="Experience">
        </div>
        
        
        
         <div class="form-group">
          <label for="exampleInputPassword1">Educational Qualification :</label>
          <input type="text" class="form-control" id="qualification" placeholder="Educational Qualification" name="qualification">
        </div>
        <br>
        
         <h3>Subjects Taught :</h3>   
        <div class="form-group">
          <label>
            <input type="checkbox"> Maths
          </label>
          <br>
           <label>
            <input type="checkbox"> English
          </label>
           <br>
           <label>
            <input type="checkbox"> EVS
          </label>
           <br>
           <label>
            <input type="checkbox"> Hindi
          </label>
           <br>
           <label>
            <input type="checkbox"> Punjabi/Tamil/Bengali
          </label>
           <br>
           <label>
            <input type="checkbox"> Induction
          </label>
           <br>
           <label>
            <input type="checkbox">Science
          </label>
           <br>
           <label>
            <input type="checkbox"> Social Science
          </label>
           <br>
           <label>
            <input type="checkbox"> Adolescent Education
          </label>
           <br>
           <label>
            <input type="checkbox"> Physical Education
          </label>
            <br>
           <label>
            <input type="checkbox"> I.T
          </label>
            <br>
           <label>
            <input type="checkbox"> Need-Based
          </label>   
          <br><br>
          <h3>TSKT Scores :</h3>    
           <div class="form-group">
	          <label for="Compulsory Paper">Compulsory Paper :</label>
	          <input type="text" class="form-control" id="compulsorypaper" placeholder="Compulsory Paper">
	        </div>
         <div class="form-group">
          <label for="subjectone">Subject 1 :</label>
          <input type="text" class="form-control" id="subjectone" placeholder="Subject One">
        </div>    
          <div class="form-group">
	          <label for="subject two">Subject 2 :</label>
	          <input type="text" class="form-control" id="subjecttwone" placeholder="Subject Two">
	        </div>   
	        <br>
	      <h3>Observation Scores :</h3>    
           <div class="form-group">
	          <label for="observation 1">Observation 1 :</label>
	          <input type="text" class="form-control" id="observation1" placeholder="Observation 1">
	        </div>
         <div class="form-group">
          <label for="observation 2">Observation 2 :</label>
          <input type="text" class="form-control" id="observation2" placeholder="Observation 2">
        </div>    
          <div class="form-group">
	          <label for="subject two">Observation 3 :</label>
	          <input type="text" class="form-control" id="observation3" placeholder="Observation 3">
	        </div>
	        
	      <div class="btn-group">
		    <button type="button" class="btn btn-primary btn-lg">Submit</button>
		  </div>
          
                 
        </div>
        </form>
        <!-- Form End -->
		  
		  </div>
		  <div class="tab-pane" id="edit">
		  
		  <!-- Start -->
		  <br>
		  	<div class="row">
		  		<div class="col-md-4"></div>
		  		<div class="col-md-4">
		  		 <div class="form-group">
			          <label for="edit">Enter the teacher ID to be edited :</label>
			          <input type="text" class="form-control" id="edit" placeholder="Teacher ID">
			      </div>
			      <br>
			      <div class="btn-group">
				    <button type="button" class="btn btn-primary btn-lg">Submit</button>
				  </div>
		  		</div>
		  		<div class="col-md-4"></div>
		  	</div>
		  
		  <!-- End -->
		  		  
		  </div>
		  
		  
		  <div class="tab-pane" id="search">
		  
		   <!-- Start -->
		  <br>
		  	<div class="row">
		  		<div class="col-md-4"></div>
		  		<div class="col-md-4">
		  		 <div class="form-group">
			          <label for="edit">Enter the teacher ID to be Searched :</label>
			          <input type="text" class="form-control" id="search1" placeholder="Teacher ID">
			      </div>
			      <br>
			      <div class="btn-group">
				    <button type="button" class="btn btn-primary btn-lg" onclick="load('view_teacher','view_teacher.php')">Submit</button>
				  </div>
		  		</div>
		  		<div class="col-md-4"></div>
		  	</div>
		  <div id="view_teacher">
          </div>
		  <!-- End -->
		  
		  </div>
		  
		  
		  <div class="tab-pane" id="delete">
			 <!-- Start -->
		  <br>
		  	<div class="row">
		  		<div class="col-md-4"></div>
		  		<div class="col-md-4">
		  		 <div class="form-group">
			          <label for="edit">Enter the teacher ID to be Deleted :</label>
			          <input type="text" class="form-control" id="delete" placeholder="Teacher ID">
			      </div>
			      <br>
			      <div class="btn-group">
				    <button type="button" class="btn btn-primary btn-lg">Submit</button>
				  </div>
		  		</div>
		  		<div class="col-md-4"></div>
		  	</div>
		  
		  <!-- End -->  
		  
		  </div>
		
		</div>
		


	</div>
	




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
