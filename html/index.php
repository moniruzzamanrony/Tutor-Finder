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
<div class="container">
<?php

include 'connect.php';



$sql = "SELECT * FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

    <div class="card float-left">
      <?php while($row = $result->fetch_assoc())
              {?>
        <div class="row ">
            <div class="col-sm-9">

<!--                Tutor Post Card-->
             
                <div class="card-block m">
                    <h4 class="card-title font-weight-bold"><?php  echo "" . $row["name"]. " ";?></h4>
                    <small class="text-info"><?php  echo "" . $row["timedate"]. " ";?></small> | <small class="text-info text-danger"><?php   echo "As a " . $row["type"]. "";?></small>
                     
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>Subject</td>
                            <td><?php  echo "" . $row["subject"]. " ";?></td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td><?php  echo "" . $row["class"]. " ";?></td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td><?php  echo "" . $row["medium"]. " ";?></td>
                        </tr>
                        <tr>
                            <td>salary</td>
                            <td><?php  echo "" . $row["srange"]. " ";?></td>

                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><?php  echo "" . $row["location"]. " ";?></td>
                        </tr>
                        <tr>
                            <td>Preferred University</td>
                            <td><?php  echo "" . $row["university"]. " ";?></td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="check-logged.php?page=index.php" class="btn btn-success btn-sm">Apply Now</a>
                </div>
         
            </div>

            <div class="col-sm-3">
                <img class="avatar" src="../images/profile-avater.png" alt="">
            </div>
        </div>
           <?php }
} else {
    echo "No Post Found Now";
}
$conn->close();
?>
    </div>


</div>

<br>
<br>

<!--Footer-->
<div class="fixedPositionInBelow">
    <footer>
        <div class="footer bg-info" id="footer">


            <div class="footer-bottom text-center">
                <div class="container">
                    <p class=" copyright"> Copyright © <span style="color: red">Tutor</span> Finder- 2020. All right reserved. </p>

                </div>
            </div>
            <!--/.footer-bottom-->

    </footer>
</div>

</body>
</html>
