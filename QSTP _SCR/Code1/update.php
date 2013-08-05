<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/map.js"></script>
<script src="js/bootstrap.js"></script>
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
</head>
<body >
<center>
<p>
    <a href="index.php"><input type="button" class="btn-block btn-large btn btn-danger" style="font-size:25px" value="Exit" /></a>
  </p>
   <p>&nbsp;</p>
  <embed style="margin-left: 1080px" src="http://www.clocklink.com/clocks/5012-gray.swf?TimeZone=GMT0700&"  width="151" height="50" wmode="transparent" type="application/x-shockwave-flash"></embed>
  <p>&nbsp;</p>
  <p><font  color="#333333"size="+2"> Queuing System for The Pizza Company Delivers HangDong2 </font></p>
  <p> </p>
     <p> <div id="map_canvas" style="height: 500px; width: 800px; float:left; margin-left:100px; margin-right:50px;" ></div> </p>
    <div align="right" style="margin-left:100px;">

<?php
	if(isset($_POST['id_user']))
	{
	 	$_SESSION['id_user']=$_POST['id_user'];
	}
	include_once 'class/config.php';
$db = new Config();
$query = mysql_query("SELECT * FROM  customers where Cus_Id='".$_SESSION['id_user']."'") or die(mysql_error()); 
$res = $db->fetch_array($query); 
	{
		echo "<form action='record_update.php' name='frm_update' method='post'>
		<input name='id_cus'type='hidden' value='".$_SESSION['id_user']."'>
		<font color='#0000CC' size='+1'>ละติจุด: </font><input id='Latitude' name='Latitude' type='text' value='".$res['Latitude']."' >
		<br><font color='#0000CC' size='+1'>ลองติจุด: </font><input id='Longitude' name='Longitude' type='text' value='".$res['Longitude']."' >
		<br><font color='#0000CC' size='+1'>ชื่อ: </font><input id='Name' name='user' type='text' value='".$res['Name']."' >
		<br><font color='#0000CC' size='+1'>ที่อยู่: </font><input id='Address' name='Address' type='text' value='".$res['Address']."' >
		<br><font color='#0000CC' size='+1'>เบอร์โทรศัพท์: </font><input id='Mobile' name='Mobile' type='text' value='".$res['Mobile']."' >
		<br><input name='bt_update' class='btn btn-success' type='submit' value='บันทึก'>
		</br></form>";
	}
	
?>

</center>
<script type="text/javascript">
$(function()
{
	initialize();
});
</script>

</body>
</html>