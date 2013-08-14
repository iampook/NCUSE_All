<?php
session_start();

echo $_SESSION['Name'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #999999;
}
</style>
</head>

<body>
<center>
<form id="form1" name="form1" method="post" action="">
  <p>
     <a href="index.php"><input type="submit" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit" /></a>
  </p>
  <p>&nbsp;</p>
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash">
    <p>&nbsp;</p>
    <center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
  <p>&nbsp;</p>
  <center>
  </center>  
</form>
<center>
  <table border=0>
			<tr>
			  <td width="150"><a href="login.php"><input type="button" class="btn-large btn btn-primary" name="button"  id="button" value="        LOGIN        " /></a>
		      </td><td></td><td><a href="status.php"><input type="button" class="btn-large btn btn-success" name="button2" id="button2" value="     STATUS     " /></a></td></tr>
              <tr><td>&nbsp;</td><td><a href="routing.php"><input type="button"  class="btn-large btn btn-warning" name="button3" id="button3" value="ROUTING UPDATES" /></td>
              </tr><tr><td><a href="define.php"><input type="button"  class="btn-large btn btn-info" name="button4" id="button4" value="DEFINE DRIVER" /></a></td><td></td>
              <td><a href="logout.php"><input type="button" class="btn-large btn btn-inverse" name="button5" id="button5" value="     LOGOUT     " /></a></td></tr>
</table>
  <p>&nbsp;</p>
  
  </p>
</center>
</body>
</html>
