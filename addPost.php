<?php
session_start();

$_SESSION['start'] = time(); // Taking now logged in time.
// Ending a session in 30 minutes from the starting time.
$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="addPost.css">

        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #111;
            }

            .active {
                background-color: #4CAF50;
            }
        </style>

        <script>
            function myFunction() {
                var txt;
                if (confirm("Are you sure, you want to clear it?")) {
                    document.getElementById('message').value = "";
                    document.getElementById('tittle').value = "";
                }

            }
        </script>
    </head>
    <body>
        <p id="demo"></p>

        <div class="container">
            <div class="row">
                <div style="text-align:center">
                    <h1>Tanvir's Blog</h1>
                </div>

                <ul>
                    <li><a href="#myName">Home</a></li>
                    <li><a href="viewBlog.php">View Blog</a></li>
                    <li class="active"><a href="addPost.php">Add Post</a></li>

                    <li><a href="logout.php">Logout</a></li>
                </ul>
                <form action="lib/addPost.php" method="post" >
                    <input type="text" id="tittle" name="tittle" placeholder="Subject..">
                    <textarea type="text" id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit"  value="Submit">
                    <input type="button" onclick="myFunction()" value="Clear">



                </form>




            </div>
        </div>
    </body>
</html>
