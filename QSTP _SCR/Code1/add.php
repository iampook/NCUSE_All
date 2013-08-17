
<?php
/*****************************************************************************************************
เป็นการเรียกใช้ class driver.php

by pairchart

*****************************************************************************************************/
session_start();

echo $_SESSION['Name'];

	include_once("class/driver.php");
	$driver = new Driver();

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
  <form id="form1" name="form1" method="post" action="">
  
   <table border=0>
			<tr>
			  <td width="150"><a href="add.php"><input type="button" class="btn-large btn btn-primary"name="button"  id="button" value="        เพิ่มข้อมูลแผนที่        " /></a>
		      </td><td><a href="edit.php"><input type="button"  class="btn-large btn btn-warning" name="button2" id="button2" value="   แก้ไขข้อมูลแผนที่  " /></a></td></tr>
</table>
<!------------------------------------------------------------------------------------------------------------------------------
การดึงแผนที่ของgoogleออกมาแสดงให้เห็นพิกัด
by parichart
------------------------------------------------------------------------------------------------------------------------------->
   <p> <div id="map_canvas" style="height: 500px; width: 800px; float:left; margin-left:100px; margin-right:50px;" ></div> </p>
    <div align="right" style="margin-left:100px;">
      <table width="326" border=0>
			<tr><td width="150">
			<div align=left><font color="white" size="3">Latitude</font></div></td><td>
			<input id="Latitude" type="text" name="Latitude" placeholder="Latitude">
		</td></tr><tr><td>
			<div align=left><font color="white" size=3>Longitude</font></div></td><td>
			<input id="Longitude" type="text" name ="Longitude" placeholder="Longitude">
			</td></tr><tr><td>
			<div align=left><font color="white" size=3>Name</font></div></td><td>
			<input id="Name" type="text" name="Name" placeholder="Name">
			</td></tr>
			<tr>
			  <td><font color="white" size="3">Address</font></td>
			  <td><input id="Address" type="text"  name="Address" placeholder="Address" /></td>
	    </tr>
			<tr>
			  <td><font color="white" size="3">Mobile</font></td>
			  <td><input id="Mobile" type="text"  name="Mobile" placeholder="Mobile" /></td>
	    </tr>
	  </table>
      <table width="32%" border="0">
        <tr align="center">
          <td scope="col"><input type="submit"  class="btn-large btn btn-success" name="button3" id="button3" value="   เสร็จสิ้น  " /></td>
        </tr>
      </table>
    </div>
  </form>
</center>

<script type="text/javascript">
$(function()
{
	initialize();
});
</script>

<font color="#FF0000" size="+2">
<!------------------------------------------------------------------------------------------------------------------------------

การทำ validation ข้อมูล

------------------------------------------------------------------------------------------------------------------------------->
<?php 

	if($_POST)
	{
		$Latitude=$_POST['Latitude'];
		$Longitude=$_POST['Longitude'];
		$Name=$_POST['Name'];
		$Address=$_POST['Address'];
		$Mobile=$_POST['Mobile'];
		$con=new Driver;
		
		if($Latitude=="")
		{
			echo"!!กรุณากรอกละติจุด!!";
		}
		
		else if($Longitude=="")
		{
			echo"!!กรุณากรอกลองติจุด!!";
		}
		
		else if($Name=="")
		{
			echo"!!กรุณากรอกชื่อลูกค้า!!";
		}
		
		else if($Address=="")
		{
			echo"!!กรุณากรอกที่อยู่ลูกค้า!!";
		}
		
		else if($Mobile=="")
		{
			echo"!!กรุณากรอกเบอร์โทรของลูกค้า!!";
		}
		
		else 
		{
		$con->add_customer($Latitude,$Longitude,$Name,$Address,$Mobile);
		 echo "บันทึกข้อมูลเรียบร้อยแล้ว";
		}
	}
?> 
</font>
</body>
</html>
