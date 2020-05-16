<?php
$dbhost = '#';
$dbuser = '#';
$dbpass = '#';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Database Error');
$dbname = '#';
mysql_select_db($dbname) or die("database not available");
?>

