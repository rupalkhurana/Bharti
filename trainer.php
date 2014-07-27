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
		var v=document.getElementById('search1').value;
		xmlhttp.open('GET',thefile+"?teid="+v,true);
		xmlhttp.send();
	}
</script>


<h1>           Trainer's Profile</h1>
<?php
$name = getfield_trainer('name');
?>
<div class="row">
<div class="col-md-1 "></div>
<div class="col-md-8">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <div class = "col-md-5">
    <td width="20%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><input type="button" class="btn btn-primary" value="BF Profile" onclick="load('area','trainer.inc.php')" /><br><br></td>
      </tr>
      <tr>
        <td><input type="button" class="btn btn-danger" value="Start Session" onclick="load('area','session.inc.php')" /><br><br></td>
      </tr>
      <tr>
        <td><input type="button" class="btn btn-info" value="Give Feedback" onclick="window.open('teacherfeedback.php','mywindow','width=1000,height=600')" /><br><br></td>
      </tr>
      <tr>
        <td><input type="button" class="btn btn-warning" value="Ask Feedback" onclick="window.open('feedbackform.php','mywindow','width=1000,height=600')" /><br><br></td>
      </tr>
      <tr>
        <td><input type="button" class="btn btn-success" value="Feedback Report" onclick="window.open('trainer_report.inc.php','mywindow','width=1000,height=600')" /><br><br></td>
      </tr>
      <tr>
        <td><input type="button" class="btn btn-primary" value="Take Attendance" onclick="window.open('attendance.php','mywindow','width=1000,height=600')" /><br> <br></td>
      </tr>
	 <tr>
        <td> <a href="logout.php">[LOGOUT]</a></td>
      </tr>
    </table></td>
	</div>
	<div class="col-md-6 "></div>
    <td width="80%"><div id="area"><?php include 'trainer.inc.php';?></div></td>
	
  </tr>
</table>
</div>
	
</div>
