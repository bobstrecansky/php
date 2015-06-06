<?php

require 'connect.inc.php';

echo "<h1>Test</h1>This is my page<br><br>";

//include 'header.inc.php';
//echo $_SERVER['HTTP_HOST'];

$redirect_page = 'https://www.reddit.com/';
$redirect = 'false';

if ($redirect===true) {
	header('Location: '.$redirect_page);
}

$query = "SELECT * from newtable";
$query_run = mysql_query($query) or die("NOPE");

echo "<table>";
while($row = mysql_fetch_assoc($query_run)) {
echo "<tr>";
	$name =  $row['name'];
	$age  =  $row['age'];
	echo"<td>$name</td><td>$age</td>";
echo "</tr>";
}
echo "</table>";
?>

