<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "blog";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong Connection");
mysql_select_db($mysql_database, $db) or die("Opps some thing went wrong Database");


?>