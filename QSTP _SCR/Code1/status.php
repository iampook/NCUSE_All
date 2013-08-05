<?php
session_start();

echo $_SESSION['Name'];

	include_once("class/driver.php");
	$driver = new Driver();


if (!$driver->get_session())
{
   header("location: index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #CCC;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form id="form1" name="form1" method="post" action="">
  <p>
    <a href="index.php"><input type="button" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit" /></a>
  </p>
  <p>&nbsp;</p>
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash">
  <p>&nbsp;</p>
    <center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
  <p>&nbsp;</p>
  
  </center>  
</form>

<center>
<table border=0>
			<tr>
			  <td width="150"><input type="button" class="btn-large btn btn-primary"name="button"  id="button" value="        Dirver Name        " /></td>
              <td></td>
              <td><input type="submit" class="btn-large btn btn-inverse" name="button2" id="button2" value="       STATUS       " /></td></tr>
<?php
	$show = $driver->get_show();
	while ($arr = mysql_fetch_array($show))
	{
		echo "<tr><td>".$arr['name']."</td><td>".$arr['status']."</td></tr>";
	}
	
?>   
</table>

<center>


</body>
</html>
