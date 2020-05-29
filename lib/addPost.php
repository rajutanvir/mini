<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include 'config.php';

session_start();

$_SESSION['start'] = time(); // Taking now logged in time.
// Ending a session in 30 minutes from the starting time.
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_info = $_SESSION['username'];
    $post_heading = $_POST['tittle'];
    $post_details = $_POST['message'];

    if (mysqli_query($db,"INSERT INTO tblpost (user_info, post_heading, post_details) VALUES ('$user_info', '$post_heading', '$post_details')")) {
        header ('Location: ../addPost.php');
    } else {
        echo $test->error();
    }
}