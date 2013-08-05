<?php 
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