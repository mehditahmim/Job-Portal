<?php
include_once('../config.php');
session_start();
$id = $_SESSION['id'];
//echo $id;
if(isset($_SESSION['id'])&& ($_SESSION['type']="jobseeker"))
{
    $q = "select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE login.log_id = $id";
//echo $q;
    $result = mysqli_query($db1, $q);// or die("Selecting user profile failed");
    $row = mysqli_fetch_array($result);
  //  echo $row['log_id'];
    $_SESSION['jsname']=$row['name'];
    $_SESSION['jsid']=$row['user_id'];
}
else
{
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Profile - <?php echo $row['name']; ?></title>
    
</head>
<body>

<div id="nav">
    <nav class="navbar">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="profile.php">Profile<span class="sr-only">(current)</span></a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="view_applied.php">View Applied Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="view_selected.php">View Selected Jobs</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Jobs">
                </div>
                <button type="button" class="btn btn-default" onclick="search();">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="update.php">Update profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="change_pass.php">Change Password</a></li>
                   </ul>
                </li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<!------------------------------------------------------------------------------- -->
<div class="container-fluid" id="content">

<aside class="col-sm-3" role="complementary">
    <div class="region region-sidebar-first well" id="sidebar">
     <h3 style="color: green" class="text-center" > Welcome <?php echo $row['name']; ?> </h3>
     </div>

  <!-- profile pic -->
    <div class="thumbnail text-center">
        <div class="img thumbnail">

           <?php if($row['photo']!="") {
              echo "<img src = '../uploads/images/".$row['photo']."' class='img-circle' >";
             }else echo" <img src='../images/user_fallback.png'>";
           ?>

        </div>
         <strong><?php echo $row['name']; ?> </strong>
          <!-- Button trigger modal -->
          <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeimg">Change Image </button></a></div>
<!--------------------------- profile pic --------------------------------------- -->
<div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or upload your profile image</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=image" enctype="multipart/form-data">
	   <?php if($row['photo']!="") {
              echo "<img src = '../uploads/images/".$row['photo']."' class='img-circle' >";
             }else echo" <img src='../images/user_fallback.png'>";
           ?>
            <div class="form-group form-inline">
                <label for="file" class="control-label">Select your photo:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- profile pic -->

</aside>

    <!------------------------------------------------------------------------------- -->
<section class="col-sm-7">
<div id="searchcontent">
<!-- Search content overlay div starts here ------------------------------------ --- -->
<div id="header">
<h3 style="color: red"> Find jobs, edit your profile or update your current resume for better jobs!</h3>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#details">Your Profile</a></li>
    <li><a data-toggle="tab" href="#resume">Update Resume</a></li>

    
</ul>

<!------------------------------------------------------------------------------- -->

    <div class="tab-content">

<!------------------------------------------------------------------------------- -->

        <div id="details" class="tab-pane fade in active" style="margin-top: 50px;">
        <h3> Your Profile</h3>
        <table class="table" >
        <tr>
            <td class="tbold">Full Name:</td>
            <td><?php echo $row['name']; ?></td>

        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Phone:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Location:</td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Experience (Years):</td>
            <td><?php echo $row['experience']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Skills:</td>
            <td><?php echo $row['skills']; ?></td>
        </tr>
        <tr>
           <td class="tbold">UG Qualification:</td>
            <td><?php echo $row['basic_edu']; ?></td>
        </tr>
        <tr>
            <td class="tbold">PG Qualification:</td>
            <td><?php echo $row['master_edu']; ?></td>
        </tr>
    </table>
</div> <!-- profile -->
   

<!--------------------------------- Resume ---------------------------------------------- -->

<!-- resume -->

     <!------------------------------------------------------------------------------- -->

</div> <!-- tab contents -->

</div><!-- closing searchcontent -->
</section> <!-- section 2 ends here -->

</div> <!-- main content div -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
