<?php 
include 'class/config.php';
$db = new Config();
$delete = $_GET['deletecus'];
$query = mysql_query("DELETE FROM customers WHERE Cus_Id='".$delete."';") or die(mysql_error()); 
 
?>