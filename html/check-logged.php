<?php
include 'connect.php';
session_start();
$userIdOfPost = $_GET['postId']; 
$sql="select * from user where userId='$userIdOfPost' ";
$res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0) {

	 $row = mysqli_fetch_assoc($res);
	 $userEmailOfPost = $row['email'];
	 $userNameOfPost = $row['name']; 
}else
{
	echo "<script type='text/javascript'>alert('Wrong uemail or password');</script>";
}
 
if (isset($_SESSION['userId']) && $_SESSION['loggedin'] == true) {
	$loggedUserId = $_SESSION['userId'];
    $sql="select * from user where userId='$loggedUserId' ";
    $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {

	    $row = mysqli_fetch_assoc($res);
	    $userEmail = $row['email'];
	    $userName = $row['name'];
		date_default_timezone_set('Etc/UTC');
		require 'PHPMailer/PHPMailerAutoload.php';
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "personal22329@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "ITvillage428854@#";
		//Set who the message is to be sent from
		$mail->setFrom('personal22329@gmail.com', 'Tutor Finder');
		//Set an alternative reply-to address
		$mail->addReplyTo($userEmail, $userName);
		//Set who the message is to be sent to
		$mail->addAddress($userEmailOfPost, $userNameOfPost);
		//Set the subject line
		$mail->Subject = 'PHPMailer GMail SMTP test';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML('<html>
		<head>
		  <title></title>
		</head>
		<body>
		<p style="color: red">hello,</p>
		I am a user of tutorFinder.com .I am intarested about you post.I mention my email addess on reply section.please connect with me.<br>
		Thanks .
		</body>
		</html>');
		//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "<script type='text/javascript'>alert('Apply Successfull');</script>";
      ?><script> location.replace("home.php"); </script><?php
	}
     $conn->close();
  }
  else
  {
   echo "<script type='text/javascript'>alert('User not found');</script>";
    ?><script> location.replace("home.php"); </script><?php
  }
} else {
	?> <script> location.replace("login.php"); </script><?php
}
?>