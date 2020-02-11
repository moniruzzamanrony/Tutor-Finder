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
            <a class="navbar-brand web_logo" href="#"><span style="color: red">Tutor</span> Finder</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Newsfeed</a></li>
            <li><a href="#">Search Tutor</a></li>
            <li><a href="#">Post</a></li>
            <li><a href="#">Connect</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<!--Main Body Of Page-->
<div class="container">

    <div class="card float-left">
        <div class="row ">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group ">
                    <h1 class="text-center text-info">Search Tutor</h1>
                    <label class="control-label col-sm-3 groupForm" for="email">Subject :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <label class="control-label col-sm-3 groupForm" for="email">Class :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Medium :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control " id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Salary Range :</label>
                    <div class="col-sm-8 groupForm">
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3 groupForm" for="email">Location :</label>
                    <div class="col-sm-8">
                        <select class="form-control groupForm" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <label class="control-label col-sm-3" for="email">University :</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary srcBut">Search</button>
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
