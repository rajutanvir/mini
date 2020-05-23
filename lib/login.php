<?php
include 'config.php';
    session_start();



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['albab'];
        $password = $_POST['raju'];
        
        
        $result = mysql_query("SELECT * FROM tbllogin WHERE username = '$username' and password = '$password' and is_active = '1'");
        if (mysql_num_rows($result) != 0)
        {       
            $row = mysql_fetch_array($result);
            $_SESSION['username'] = $username;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
            
            
            header ('Location: ../index.php');
            
            
        } else {
            header('Location: ../login.php');
        }
        
        }
    
    
?>