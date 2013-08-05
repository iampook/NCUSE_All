<?php
require_once 'class/config.php';

$con = new Config();


$gps_array = array();

$i = 0;

$gps_query = mysql_query('SELECT Cus_Id, Latitude, Longitude, Name, Address, Mobile, statrs FROM customers') or die(mysql_error());
while(list($Cus_Id, $Latitude, $Longitude, $Name, $Address, $Mobile, $statrs) = mysql_fetch_row($gps_query))
{
	$gps_array[$i]['Cus_Id'] = $Cus_Id;
	$gps_array[$i]['Latitude'] = $Latitude;
	$gps_array[$i]['Longitude'] = $Longitude;
	$gps_array[$i]['Name'] = $Name;
	$gps_array[$i]['Address'] = $Address;
	$gps_array[$i]['Mobile'] = $Mobile;
	$gps_array[$i]['statrs'] = $statrs;
	
	$watershed_array[$i]['icon'] = 'img/fgrey.png';

	++$i;
}

echo json_encode($gps_array);

?>