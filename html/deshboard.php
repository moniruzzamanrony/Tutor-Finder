
<head>
	<title>Online Tutor Finder</title>
    <link rel="icon" href="../images/teacher.png" type="image/icon type">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/deshboard.css">	
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                   <a  class="logo" href="deshboard.php"><span style="color: red">Tutor</span> Finder</a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>                
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
            
                <div class="user-dashboard text-info">
                    <h1>Panding Post List</h1>
            <div class="container">
<?php
session_start();
session_destroy();
include 'connect.php';
$sql = "SELECT * FROM post WHERE isApprove = false";
$result = $conn->query($sql);
if ($result->num_rows > 0) {?>
  <div class="card float-left">
    <?php while($row = $result->fetch_assoc())
    {?>

      <div class="row ">
        <div class="col-sm-9">         
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

            <a href="approve-post.php?postId=<?php  echo "" . $row["userId"]. " ";?>" class="btn btn-success btn-sm">Approve Now</a>
          </div>       
        </div>
      
      </div>

    <?php }
  } 
  else {
    echo "No Post Found Now";
  }
  $conn->close();
  ?>
</div>
</div>
                </div>
            </div>
        </div>

    </div>

</body>