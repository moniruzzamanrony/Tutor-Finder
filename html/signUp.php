<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
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

<div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign Up</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form action="signUp.php" method="POST">
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="email" name="mail" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password" required>
          </div>
          <div class="form-group">
            <input type="submit"  name="submit" value="Sign Up" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          have an account?<a href="login.php">Sign In</a>
        </div>
      </div>
    </div>
  </div>
</div>
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

<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password= md5($_POST['password']);  
    $uid= uniqid(); 

     $sql="select * from user where email='$mail';";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {

        $row = mysqli_fetch_assoc($res);
        if($mail==$row['email'])
        {
            echo 
            "<script type='text/javascript'>alert('Email already exists');</script>";
          
       } 
    

}
else{ 

         $sql = "INSERT INTO user (userId,name, email, password)
        VALUES ('$uid','$name','$mail','$password')";

        if ($conn->query($sql) === TRUE) {?>
            <script> location.replace("login.php"); </script>
           <?php
        } else {
              echo "<script type='text/javascript'>alert('Something is worng');</script>";
        }
        }
}
 $conn->close();
?>
