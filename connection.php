<?php
$hostname = "localhost";
$dbname = "SAMs";
$dbuser = "root";
$pswd = "";

$mysql_obj = new mysqli($hostname, $dbuser, $pswd, $dbname);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
?>