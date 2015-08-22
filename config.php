<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '1234';
	$dbname = 'comsystem';


	$conn = mysql_connect($host,$user,$pass,$dbname) or die(mysql_error());
	mysql_query("SET NAMES UTF8");



?>
