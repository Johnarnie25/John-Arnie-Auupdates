<?php
define('DB_SERVER','localhost');
define('DB_USER','u872502285_updates');
define('DB_PASS' ,'Updates_123');
define('DB_NAME','u872502285_updates');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>