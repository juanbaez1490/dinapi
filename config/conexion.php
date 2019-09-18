<?php
/*	$dbhost="localhost";  
	$dbusuario="root"; 
	$dbpassword=""; 
	$db="economia";*/

	$dbhost="localhost";  
	$dbusuario="root"; 
	$dbpassword=""; 
	$db="dinapi";  

	$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
	mysql_select_db($db, $conexion);
?>