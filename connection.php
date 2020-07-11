<?php

$hostname = "localhost";
$email = "root";
$pass = "";
$dbname = "SAMs";

  //create connection
$mysql_obj = new mysqli($hostname,$email, $pass, $dbname);
if ($mysql_obj->connect_error) {
	die("connection failed:" . $mysql_obj->connect_error);
}
  


?>
