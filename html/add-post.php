<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<!-- navbar -->
<nav class="navbar bg-info">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand web_logo" href="index.php"><span style="color: red">Tutor</span> Finder</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Newsfeed</a></li>
            <li><a href="search.php">Search Tutor</a></li>
            <li><a href="add-post.php">Post</a></li>
            <li><a href="connect.php">Connect</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<!--Main Body Of Page-->
<div class="container">

    <div class="card float-left">
        <div class="row ">
            <form class="form-horizontal" action="add-post.php" method="POST">
                <div class="form-group ">
                    <h1 class="text-center text-info">Post</h1>
                    <label class="control-label col-sm-3 groupForm" for="email">Subject :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="subject" name="subject">
                            <option value="English">English</option>
                            <option value="MathMath">Math</option>
                            <option value="Physics">Physics</option>
                            <option value="Biology">Biology</option>
                        </select>
                    </div>

                    <label class="control-label col-sm-3 groupForm" for="email">Class :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="class" name="classes">
                            <option value="five">five</option>
                            <option value="six">six</option>
                            <option value="seven">seven</option>
                            <option value="eight">eight</option>
                            <option value="nine">nine</option>
                            <option value="ten">ten</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Medium :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control " id="medium" name="medium">
                            <option value="Bangla">Bangla</option>
                            <option value="English">English</option>

                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Salary Range :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="sRange" name="sRange">
                            <option value="1k-5k">1k-5k</option>
                            <option value="5k-10k">5k-10k</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Location :</label>
                    <div class="col-sm-8">
                        <select class="form-control groupForm" id="location" name="location">
                            <option value="Gazipur">Gazipur</option>
                            <option value="Mirpur-1">Mirpur-1</option>
                            <option value="mirpur-10">mirpur-10</option>
                            <option value="Saver">Saver</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3" for="email">University :</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="university" name="university">
                            <option value="DIU">DIU</option>
                            <option value="DU">DU</option>
                            <option value="JU">JU</option>
                            <option value="JNU">JNU</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3" for="email">As :</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="as" name="as">
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>

                        </select>
                    </div>
                </div>

        </div>
        <div class="col-sm-12">
            <input type="submit" name="submit" value="Post now" class="btn btn-primary srcBut"/>
        </div>
    </div>
    </form>
</div>
</div>


<!--Footer-->
<div class="fixedPositionInBelow">
    <footer>
        <div class="footer bg-info" id="footer">


            <div class="footer-bottom text-center">
                <div class="container">
                    <p class=" copyright"> Copyright © <span style="color: red">Tutor</span> Finder- 2020. All right
                        reserved. </p>

                </div>
            </div>
            <!--/.footer-bottom-->

    </footer>
</div>

</body>
</html>
<?php
include 'config.php';
include 'connect.php';

if (isset($_POST['submit'])) {
    $class = $_POST['classes'];
    $subject = $_POST['subject'];
    $medium= $_POST['medium'];
    $sRange= $_POST['sRange'];
    $location= $_POST['location'];
    $university= $_POST['university'];
    $as= $_POST['as'];
    $currentTime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO post (userid,class, medium, srange,location,university,type,subject,timedate)
VALUES ('13','$class','$medium','$sRange','$location','$university','$as','$subject','$currentTime')";

if ($conn->query($sql) === TRUE) {?>
    <script> location.replace("index.php"); </script>
   <?php
} else {
    echo 'Something is wrong';
}

$conn->close();

}

?>