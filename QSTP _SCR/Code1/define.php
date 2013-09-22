<?php
session_start();

echo $_SESSION['Name'];

$statrs = $_SESSION['statrs'];
	include_once("class/manager.php");
	$manager = new Manager();

if($statrs!="1123213"){
	 header("location: index.php");
}
if (!$manager->get_session())
{
   header("location: index.php");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
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
  <p>&nbsp;</p>
  </center>
  </embed>

  <table width="38%" height="57" border="0">
    <tr>
      <th width="37%" scope="col"><input type="button" class="btn-large btn btn-primary" name="button"  id="button" value="        Dirver Name        " /></th>
      <th width="37%" scope="col"><input type="button" class="btn-large btn btn-inverse" name="button2" id="button2" value="         STATUS         " /></th>
      
      <tr><td>
      <?php
	$show = $manager->get_show();
	while ($arr = mysql_fetch_array($show))
	{
/***************************************************************************************
การแสดงพนักงานส่ง และกำหนดพนักงานส่ง
by parichart
***************************************************************************************/
		 if($arr['status']=="ว่าง")
		{
			$st="checked='checked'";
			$rn="";
			$p="";
			echo "<tr><td>".$arr['name']."</td>
			<td><form action='' name='frm_mg_repair' method='post'>
			<input name='name' id='name' type='hidden' value=".$arr['name'].">
			<input name='repair' id='repair' type='radio'  ".$st."   value='ว่าง' >ว่าง
			<input name='repair' id='repair' type='radio'   ".$rn." value='วิ่ง'>วิ่ง
			<input name='repair' id='repair' type='radio'  ".$p." value='พัก'>พัก
			<input name='bt_uprepair1' class='btn btn-success' type='submit'  value='บันทึก'>
		   </form></td></tr>
			";
		}
		/*else if($arr['status']=="วิ่ง")
		{
			$st="";
			$rn="checked='checked'";
			$p="";
			echo "<tr><td>".$arr['name']."</td>
			<td><form action='' name='frm_mg_repair' method='post'>
			<input name='name' id='name' type='hidden' value=".$arr['name'].">
			<input name='repair' id='repair' type='radio'  ".$st."   value='ว่าง'>ว่าง
			<input name='repair' id='repair' type='radio'   ".$rn." value='วิ่ง'>วิ่ง
			<input name='repair' id='repair' type='radio'  ".$p." value='พัก'>พัก
			<input name='bt_uprepair2' class='btn btn-success' type='submit'  value='บันทึก'>
		   </form></td></tr>
			";
		}
		else if($arr['status']=="พัก")
		{
			//$manager->deleteOne($_POST['');
			$st="";
			$rn="";
			$p="checked='checked'";
			echo "<tr><td>".$arr['name']."</td>
			<td><form action='' name='frm_mg_repair' method='post'>
			<input name='name' id='name' type='hidden' value=".$arr['name'].">
			<input name='repair' id='repair' type='radio'  ".$st."   value='ว่าง'>ว่าง
			<input name='repair' id='repair' type='radio'   ".$rn." value='วิ่ง'>วิ่ง
			<input name='repair' id='repair' type='radio'  ".$p." value='พัก'>พัก
			<input name='bt_uprepair3' class='btn btn-success' type='submit'  value='บันทึก'>
		   </form></td></tr>
			";
		}*/
		else
		{
			$st="";
			$rn="";
			$p="";
			echo "<tr><td>".$arr['name']."</td>
			<td><form action='' name='frm_mg_repair' method='post'>
			<input name='name' id='name' type='hidden' value=".$arr['name'].">
			<input name='repair' id='repair' type='radio'  ".$st."   value='ว่าง'>ว่าง
			<input name='repair' id='repair' type='radio'   ".$rn." value='วิ่ง'>วิ่ง
			<input name='repair' id='repair' type='radio'  ".$p." value='พัก'>พัก
			<input name='bt_uprepair4' class='btn btn-success' type='submit'  value='บันทึก'>
		   </form></td></tr>
			";
		}
	}
	if($_POST)
	{
		$name=$_POST['name'];
		$status=$_POST['repair'];
		$con=new Manager;
		$con->define_drive($name,$status);
	}
?>   
     	
    </td></tr>
   
  </table>
   <a href="addDriver.php"><input type="button" class="btn-large btn btn-primary" name="button"  id="button" value="AddDriver"/></a>
   <input type="button" class="btn-large btn btn-danger" name="button"  id="button" value="ClearDriver" onclick="clearAll()"/>
  </center>
<script>
/***************************************************************************************
การclear พนักงานส่งหลังจากร้านปิด

by parichart
***************************************************************************************/
	function clearAll()
	{
		$.post("clearAll.php",function(data)
		{
			window.location.reload();
			alert("ลบข้อมูลเสร็จแล้ว");
		});
	}

</script>
</body>
</html>