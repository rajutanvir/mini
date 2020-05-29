<?php
include 'lib/config.php';
session_start();

if (!isset($_SESSION['username'])) {

    header('Location: login.html');
} else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "Your session has expired! <a href='login.html'>Login here</a>";
    } else {



        $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }

            .active, .accordion:hover {
                background-color: #ccc;
            }

            .panel {
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }

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
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="viewBlog.php">View Blog</a></li>
            <li><a href="addPost.php">Add Post</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>

        <h2>View Blogs</h2>
        <p>Click on the buttons to open the collapsible content.</p>
        <?php
        $result = mysqli_query($db, "select * from tblpost");
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <button class="accordion"><?php echo $row[2] ?></button>

            <div class="panel">
                <p><?php echo 'Published Date: ' . $row[4] ?></p>
                <p><?php echo $row[3] ?></p>
            </div>
<?php } ?>


        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>

    </body>
</html>
