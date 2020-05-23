<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user_info = $_SESSION['username'];
$post_heading = $_POST['tittle'];
$post_details = $_POST['message'];

 if($test = mysql_query("INSERT INTO tblpost (user_info, post_heading, post_details) VALUES ('$user_info', '$post_heading', '$post_details')"))
{
echo 'Data Inserted successfully...';
}
else
{
  echo $test->error();
}

}