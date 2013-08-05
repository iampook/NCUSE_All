<?php
session_start();

$_SESSION['login'] = FALSE;
        	session_destroy();

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
  <p>
    <a href="index.php"><input type="submit" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit"/></a>
  </p>
  <p>&nbsp;</p>
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash">
    <p>&nbsp;</p>
    <center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
</center>

</body>
</html>
