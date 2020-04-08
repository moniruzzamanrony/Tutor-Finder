<?php


if (isset($_POST['submit'])) {

    $mail = $_POST['mail'];
    $password= $_POST['password'];  

      if ($mail == "admin" && $password == "admin") {
      
         ?><script> location.replace("deshboard.php"); </script><?php
         $conn->close();
      }
      else
      {
       echo "<script type='text/javascript'>alert('Wrong Email or password');</script>";
                ?><script> location.replace("admin.html"); </script><?php
      }
  }
  else{
  	
  }
?>