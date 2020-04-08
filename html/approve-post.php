<?php
include 'connect.php';
$userIdOfPost = $_GET['postId']; 
 echo $userIdOfPost;

$sql = "UPDATE post SET isApprove=true WHERE userId= '$userIdOfPost'";

if ($conn->query($sql) === TRUE) {?>
    <script> location.replace("deshboard.php"); </script>
 <?php
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>