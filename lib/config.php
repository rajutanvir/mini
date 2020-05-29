<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "blog";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database); 
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

?>