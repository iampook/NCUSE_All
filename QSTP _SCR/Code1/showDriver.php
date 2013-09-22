<?php 
/*****************************************************************************************************
การรับค่าและโชว์ข้อมูลสถานะพนังงานส่ง โดยการโชว์ค่าเฉพาะพนักงานส่งที่มีสถานนะ ว่าง เท่านั้น

By parichart
*****************************************************************************************************/
include 'class/config.php';
$db = new Config();
$query = mysql_query('SELECT name FROM  define WHERE status = "ว่าง"') or die(mysql_error()); 
$data_array=array(); 
$i=1;
while($res = $db->fetch_array($query)) 
	{
		echo $i.". ".$res['name'];
		echo "</br>";
		$i++;
		
	} 
 
?>