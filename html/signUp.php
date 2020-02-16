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
    <script src="../js/script.js"></script>
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
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<!--Main Body Of Page-->
<div class="container">

    <h1 class="well">Registration Form</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="Enter City Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>State</label>
                            <input type="text" placeholder="Enter State Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Zip</label>
                            <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Title</label>
                            <input type="text" placeholder="Enter Designation Here.." class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Company</label>
                            <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                    </div>
                    <button type="button" class="btn btn-lg btn-info">Submit</button>
                </div>
            </form>
        </div>
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
