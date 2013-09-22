<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
/***************************************************************************************
การ validation ข้อมูลการแก้ไขข้อมูลลูกค้า

by parichart
***************************************************************************************/
if($_POST)
	{		
		$latitude=$_POST['Latitude'];
		$longitude=$_POST['Longitude'];
		$user=$_POST['user'];
		$address=$_POST['Address'];
		$mobile=$_POST['Mobile'];
		$cus_id=$_POST['id_cus'];
		include('class/driver.php');
		$update=new Driver;


		if($latitude=="")
		{
			echo"!!กรุณากรอกละติจุด!!";
			echo"<a href='update.php'>back</a>";
		}
		
		else if($longitude=="")
		{
			echo"!!กรุณากรอกลองติจุด!!";
			echo"<a href='update.php'>back</a>";
		}
		
		else if($user=="")
		{
			echo"!!กรุณากรอกชื่อลูกค้า!!";
			echo"<a href='update.php'>back</a>";
		}
		
		else if($address=="")
		{
			echo"!!กรุณากรอกที่อยู่ลูกค้า!!";
			echo"<a href='update.php'>back</a>";
		}
		
		else if($mobile=="")
		{
			echo"!!กรุณากรอกเบอร์โทรของลูกค้า!!";
			echo"<a href='update.php'>back</a>";
		}
		
		else 
		{
		$update->update_customer($latitude,$longitude,$user,$address,$mobile,$cus_id);
		 echo "บันทึกข้อมูลเรียบร้อยแล้ว";
		}
	}
?> 
<body>

</body>
</html>