<?php
include_once('config.php');

session_start();

$id = $_SESSION['com_id'];

if(isset($_SESSION['com_id'])) {
$q = "select * from login join company on login.log_id=company.log_id WHERE login.log_id = $id";
//echo $q;
$result = mysqli_query($db1, $q)or die("Selecting user profile failed");
$row = mysqli_fetch_array($result);
//  echo $row['log_id'];
    $_SESSION['eid']=$row['eid'];
    $_SESSION['cname'] = $row['ename'];
    $_SESSION['cemail'] = $row['email'];    
    $_SESSION['ctype'] = $row['etype'];
    $_SESSION['caddress'] = $row['address'];
    $_SESSION['cphone'] = $row['phone'];
    $_SESSION['cdescription'] = $row['description'];
  

}
else {
    header("location: login.php?msg=please_login");
}


?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $row['ename']; ?></title>
	

</head>
<body>

<div id="nav">
    <nav>
        <div class="navbar" id="insidenav">

            <ul class="nav navbar-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Job Portal</a>
                </div>
                <li class="active"><a href="profile.php">Profile<span class="sr-only">(current)</span></a></li>
				
				
			   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_jobs.php">Post Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="managejobs.php">Manage Jobs</a></li>

                    </ul>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="company_updateprofile.php">Update profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="change_pass.php">Change Password</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->
<div class="container-fluid" id="content">

    <aside class="col-sm-3 text-center" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 class="text-center" style="color: #dd4814"> Welcome <?php echo $row['ename']; ?> </h3> <hr>
        </div>
        <div class="thumbnail text-center">
            
            <strong><?php echo $row['ename']; ?></strong><br>
            <p><button class="btn btn-default" data-toggle="modal" data-target="#changelogo">Change Company Logo
        </div>
<!------------- logo ------------------------------------- -->
   <div class="modal fade" id="changelogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or Upload your Company Logo</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=logo" enctype="multipart/form-data">
            <div class="form-group form-inline">
                <label for="file" class="control-label">Select your Logo:</label>
                <input type="file" name="logo" id="logo" class="form-control">
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
<!-- ----------- change logo ends here ------------------------------------------------- -->
    </aside>
    <section class="col-sm-9">
    <div id="header">
        <h3> Post jobs and find the right candidates!</h3>
    </div>
<div class="container">
    <h3>Company Profile:</h3> <h4>The following informations are visible to job seekers.
        We reccomend you to always update these informations.</h4>
    <hr>
    <table class="table">
        <tr>
            <td class="tbold">Name:</td>
            <td><strong><?php echo $row['ename']; ?></strong></td>
        </tr>
        <tr>
            <td class="tbold">Type:</td>
            <td><?php echo $row['etype']; ?></td>
        </tr>
        
        <tr>
            <td class="tbold">Address:</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        
        <tr>
            <td class="tbold">Phone Number:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
       
        <tr>
            <td class="tbold">About Company:</td>
            <td><?php echo $row['description']; ?></td>
        </tr>
    </table>
    </div>
        </section>
</body>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
