<?php
include 'config.php';
    session_start();



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $result = mysqli_query($db,"SELECT * FROM tbllogin WHERE username = '$username' and password = '$password' and is_active = '1'");
        $num_rows = mysqli_fetch_row($result)[0];
        if ($num_rows != 0)
        {       
            
            $_SESSION['username'] = $username;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
            
            
            header ('Location: ../index.php');
            
            
        } else {
            header('Location: ../login.html');
        }
        
        }
    
    
?>