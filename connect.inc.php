<?php
$conn_error = 'could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'asdfjkl';
$mysql_db   = 'testDB';

@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);
mysql_select_db($mysql_db) or die($conn_error);

echo "connected!";