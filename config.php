<?php
define('DB_SERVER','localhost');
define('DB_USER','amband_bahamas');
define('DB_PASS' ,'bahamas@123');
define('DB_NAME', 'amband_bahamas');
$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
mysql_select_db(DB_NAME, $conn);
	
?>