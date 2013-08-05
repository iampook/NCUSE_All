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
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/map.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/show.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th"></script>
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
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash"></embed>
  <p>&nbsp;</p>
<center>
  <p><font size="+2">Queuing System for The Pizza Company Delivers HangDong2</font></p>
  <p>&nbsp;</p>
  
  
  
</center>

<center>
<div id="showCustomer">
<?php 
include_once 'class/config.php';
$db = new Config();
$query = mysql_query('SELECT * FROM  customers') or die(mysql_error()); 
$data_array=array(); 
$i=1;

while($res = $db->fetch_array($query)) 
	{
		echo "<br><font color='#0000CC' size='+1'>". $i.". ลิติจุด:</font>".$res['Latitude']."
		<font color='#0000CC' size='+1'>ลองติจุด: </font>".$res['Longitude']."
		<font color='#0000CC' size='+1'>ชื่อลูกค้า: </font>".$res['Name']."
		<font color='#0000CC' size='+1'>ที่อยู่ลูกค้า: </font>".$res['Address']."<br>
		<font color='#0000CC' size='+1'>เบอร์โทรศัพท์ : </font>".$res['Mobile']."
		<form action='update.php' id=".$i." method='post' name='frm_edit'>
		<input name='id_user' type='hidden' value=".$res['Cus_Id'].">
		<input type='submit' class='btn btn-success' style='font-size:20px' value='Edit'>
		<input type='button' class='btn btn-danger' style='font-size:20px'  onclick='del(".$res['Cus_Id'].")' value='Delete'>
		</form><br>";
		$i++;
	} 
 
?>


</center>
</body>
</html>
