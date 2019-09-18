<?php
	/*define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'serbiede_elektro');
	define('DB_PASSWORD', 'a$1234567j');
	define('DB_DATABASE', 'serbiede_dinapi');
*/
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'dinapi');
	
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>