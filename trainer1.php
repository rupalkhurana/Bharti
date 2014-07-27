<?php
$name = getfield_trainer('name');
echo 'welcome '.$name.' !';
?>
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
<a href="logout.php">[LOGOUT]</a>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><input type="button" value="BF Profile" onclick="load('area','trainer.inc.php')" /></td>
      </tr>
      <tr>
        <td><input type="button" value="Start Session" onclick="load('area','session.inc.php')" /></td>
      </tr>
      <tr>
        <td><input type="button" value="Give Feedback" onclick="window.open('teacherfeedback.php','mywindow','width=1000,height=600')" /></td>
      </tr>
      <tr>
        <td><input type="button" value="Ask Feedback" onclick="window.open('feedbackform.php','mywindow','width=1000,height=600')" /></td>
      </tr>
      <tr>
        <td><input type="button" value="Feedback Report" onclick="window.open('trainer_report.inc.php','mywindow','width=1000,height=600')" /></td>
      </tr>
      <tr>
        <td><input type="button" value="Take Attendance" onclick="window.open('attendance.php','mywindow','width=1000,height=600')" /></td>
      </tr>
    </table></td>
    <td width="80%"><div id="area"><?php include 'trainer.inc.php';?></div></td>
  </tr>
</table>
