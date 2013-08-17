<?php
/*****************************************************************************************************
โชว์ session 
การเรียกใช้ class manager.php
by pairchart

*****************************************************************************************************/
session_start();

echo $_SESSION['Name'];

	include_once("class/manager.php"); 
	$mnn = new Manager();

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
			  <td width="150"><input type="button" class="btn-large btn btn-primary"name="button"  id="button" value="        เพิ่มพนักงานส่ง        " />
		      </td><td>&nbsp;</td></tr>
</table>
   
      <p>&nbsp;</p>
      <table width="326" border=0>
			<tr><td width="250">
			<div align=left><font color="white" size="4">Name</font></div></td><td>
			<input id="Name" type="text" name="Name" placeholder="NameCustomers">
		</td></tr><tr>
	  </table>
      <p>&nbsp;</p>
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
<?php 
/*****************************************************************************************************

การ validation การเพิ่มข้อมูลพนักงานส่ง
by pairchart

*****************************************************************************************************/
	if($_POST)
	{
		$Name=$_POST['Name'];
		$mnn=new Manager;
		
		if($Name=="")
		{
			echo"!!กรุณากรอกชื่อพนักงานส่ง!!";
		}
			
		else 
		{
		$mnn->add_driver($Name);
		 echo "บันทึกข้อมูลเรียบร้อยแล้ว";
		}
	}
?> 
</font>
</body>
</html>
