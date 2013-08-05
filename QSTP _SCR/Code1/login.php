<?php
session_start();

	include_once("class/driver.php");
	$driver = new Driver();


if ($driver->get_session())
{
   header("location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$login = $driver->login($_POST["Input"]);
	if ($login) {
	   header("location: index.php");
	   echo "OK login";
	} 	
	
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
</head>

<body>
<center>
<p>
   <a href="index.php"><input type="submit" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit" /></a>
</p>
<p>&nbsp;</p><embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash">
<p>&nbsp; </p>
<center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
  <p>&nbsp;</p>
</center>
<form name="Calc" method="post" action="">
<p>
    <input type="button" class="btn-large btn btn btn-info" name="button" id="button" value="    1   " onclick="Calc.Input.value+='1'" />
    <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    2   " onclick="Calc.Input.value+='2'" />
    <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    3   " onclick="Calc.Input.value+='3'" />
  </p>
<p>
  <input type="button" class="btn-large btn btn btn-info" name="button" id="button" value="    4   " onclick="Calc.Input.value+='4'" />
  <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    5   " onclick="Calc.Input.value+='5'" />
  <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    6   " onclick="Calc.Input.value+='6'"/>
</p>
  <p>
  <input type="button" class="btn-large btn btn btn-info" name="button" id="button" value="    7   " onclick="Calc.Input.value+='7'" />
  <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    8   " onclick="Calc.Input.value+='8'" />
  <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    9   " onclick="Calc.Input.value+='9'"/>
</p>
<p>
  <input type="button" class="btn-large btn btn-danger" name="button" id="button" value="clear" onclick="Calc.Input.value=''"/>
  <input type="button" class="btn-large btn btn btn-info" name="button2" id="button2" value="    0   " onclick="Calc.Input.value+='0'"/>
  <input type="submit" class="btn-large btn btn-success" name="button2" id="button2" value="    ok  " />
</p>
 <p>
 <input type="text" class="btn-large btn btn btn-inverse" name="Input" size="16" />
 </p>
 <?php
 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["Input"]=="") {
	   echo "<font size='4' color='#FF0000'>กรุณาloginใหม่ !!</font>";
	} 	
	
}	

 ?>
 </form>
  </center>
</body>
</html>
