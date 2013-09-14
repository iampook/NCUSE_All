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
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th"></script>
<script type="text/javascript">
	var markers;
	var infowindow;
	var map;
	var mapOptions;
	var contentMarker = new Array();
	var filterText = '';
	var url = 'data.php';
$(function()
{
	
	renderMap();
});
</script>
<link href="css/bootstrap.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
       #map-canvas {
        margin: 0;
        padding: 0;
        height: 500px;
		width:500px;
      }
    
body {
	background-color: #CCC;
}
</style>
</head>

<body>
 
<center>
<form id="form1" name="form1" method="post" action="">
  <p>
    <a href="index.php"><input type="button" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit" /></a>
  </p>
  <p>&nbsp;</p>
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash"></embed>
  <p>&nbsp;</p>
<center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  
    <table border=0>
      <tr>
        <td width="150"><a href="add.php">
          <input type="button" class="btn-large btn btn-primary" name="button"  id="button" value="        เพิ่มข้อมูลแผนที่        " />
        </a></td>
        <td><a href="edit.php">
          <input type="button"  class="btn-large btn btn-warning"  onclick="edit();" name="button2" id="button2" value="   แก้ไขข้อมูลแผนที่  " />
        </a></td>
      </tr>
    </table>
    <p> </p>
    <div id="map_canvas" style="height: 500px; width: 800px; float:left; margin-left:100px;" ></div>
  <p></p>
   
  <table width="310" border=0>
        <tr>
          <td width=150><input type="submit"  class="btn-large btn btn btn-success" name="button4" id="button4" value="   CustomersName   " /></td>
          <td><input type="submit"  class="btn-large btn btn-info" name="button3" id="button3" value="   DriverName   " /></td>
        </tr>
        <tr>
          <td><div id="showCus"></div></td>
          <td valign="top"><div id="showDri"></div></td>
        </tr>
      </table>
   
      <div id="informationMain"></div>
</center>

<script type="text/javascript">


function edit()
{
	//alert('sfsd');
	//$('#showCus').html('Loading...');
		$.get('show.php',function(data){
			//alert(data);
			$('#showCustomer').html(data);
});
}
</script>
</body>
</html>
