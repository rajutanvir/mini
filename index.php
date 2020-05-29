<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mini Project</title>
        <style>
            body{
                background-color:springGreen;
            }
            img{
                float:right;
            }
            .bu a{
                background-color:HotPink;
                width:200px;
                border: 1px solid white;
                height:50 px;
                line-height:100 px;
                text-align:center;
                float: left;
                color:brown;
                font-size:18 px;
            }
            *{
                box-sizing: border-box;
            }

            /*create three unequal that floats next to each other*/
            .column{
                float: left;
                padding:10px;
                height: 800px;
            }

            .left, .right{
                background-color:white ;
                width: 25%;
            }

            .middle{
                width:50%;
                background-color:white;
            }

            /*claer floats after the colums*/
            .row:after{
                content: " ";
                display:table;
                clear:both;
            }

            .ri{
                background-color: lightgrey;
                width:200px;
                border:15px solid green;
                padding:20px;
                margin:20px;
                text-align:left;
            }

            .li{
                background-color: lightgrey;
                width:200px;
                border:15px solid green;
                padding:20px;
                margin:20px;
                text-align:left;
            }

            .skills{
                background-color: lightgrey;
                width:200px;
                border:10px solid green;
                padding:10px;
                margin:20px;
                text-align:left;
            }

            .hobbies{
                background-color: lightgrey;
                width:250px;
                border:15px solid green;
                padding:20px;
                margin:20px;
                text-align:left;
            }

            .movies{
                background-color: lightgrey;
                width:250px;
                border:10px solid green;
                padding:50px;
                margin:20px;
                text-align:left;
            }

            .head{
                background-color: pink;
                latter-spacing:.1px;
                font-size:20px;
            }

        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <!....main frem declare ....>
        <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="myName">Tanvir Ahmed</a>
                    </div>

                    <!.startng nav bar >
                    <div class="collapse navbar-collapse" id="myNavbar">

                        <ul class="nav navbar-nav">
                            <?php
                            include 'lib/config.php';

                            session_start();

                            if (!isset($_SESSION['username'])) {
                                ?>
                                <li class="active"><a href="#myName">Home</a></li>


                                <li><a href="login.html">Login</a></li>
                                <?php
                            } else {
                                ?> 
                                <li class="active"><a href="#myName">Home</a></li>
                                <li><a href="viewBlog.php">View Blog</a></li>
                                <li><a href="addPost.php">Add Post</a></li>

                                <li><a href="logout.php">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
                <!.....Starting the ror.....>
                <div class="row">
                    <!.....first coloumn....>
                    <div class="col-sm-3" style="background-color:lavender;">

                        <aside class="ri">
                            <h1  class="head">Reasearch Interests</h1>
                            <p>Aritificial Intelligence </p>
                            <p> Quamtum Computer</p>
                            <p> Cyber Sequruity</p>
                        </aside>

                        <ul class="li">
                            <li><a href="cv.html">CV</a></li>
                            <li><a href="#mySkills">Skills</a></li>
                            <li><a href="#hobbies">Hobbies</a></li>
                            <li><a href="link.html">link</a></li>
                        </ul>

                        <aside class="skills">
                            <a id="mySkills"> </a>
                            <h1 class="head">Top 3 Skills</h1>
                            <img src="first.png".alt="trulli" style="float:left; width:50px; height:50px;"><br>
                            <p>HTML</p>
                            <img src="second.png".alt="trulli" style="float:left; width:50px ;height:50px;"><br>
                            <p>CSS </p>
                            <img class="" src="third.png".alt="trulli" style="float:left; width:50px ;height:50px;"><br>
                            <p>JAVASCRIPT</p>
                        </aside>

                    </div>

                    <div class="col-sm-6" style="background-color:lavenderblush;">
                        <aside>
                            <a id="myname" ></a>
                            <h1> About Myself </h1>
                            <p><img class="picture" src="qmul.JPG" style="float:right; width:120px; height:120px; margin-left:15px;" >
                                My full name is Tanvir Ahmed . I bron and raised in the most beautiful country Bangladesh. Currently, I am studying at Queen Mary University of Lonodn at computer science . </p>
                            <hr align="left" width="450">
                        </aside>

                        <aside>
                            <a id="myEducation"></a>
                            <h1>Education</h1>
                            <p> <b>2019-2022:</b>BSc in Computer Science (Queen Mary University of Lonodn)</p>
                            <p><b>2017-2018:</b>Internation Science & Engeneering Foundation Programme(Queen Mary University of Lonodn)</p>
                            <p><b>2014-2016:</b>Higher Secondary Education (HSC)</p>
                            <p><b>2012-2014:</b>Secondary School Certificate (SSC)</p>
                            <p><b>2003-2011:</b>Junior Schhol Certificate (JSC)</p>
                        </aside>
                    </div>


                    <!....last one>
                    <div class="col-sm-3" style="background-color:lavender;">

                        <aside class="hobbies">
                            <a id="hobbies"> </a>
                            <h1 class="head">Hobbies</h1>
                            <p>Programming</p>
                            <p>Playing Cricket</p>
                            <p>Watching movies</p>
                        </aside>

                        <aside class="movies">
                            <a id="movies"> </a>
                            <h1 class="head">Top 5 Movies</h1>
                            <p>Good Will Hunting</p>
                            <p>Pursuit of Happiness</p>
                            <p>Life of PI</p>
                            <p>The Terminal</p>
                            <p>3 Idoit</p>
                        </aside>
                    </div>
                </div><!...ending row...>
        </div>

    </body>
</html>
