<?php
include_once('../config.php');
session_start();

if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();

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

<title>Admin Panel - Jobportal</title>

</head>
<body>

<div id="nav">
    <nav class="navbar">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="admin.php">Admin<span></span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="addAdmin.php">Add New Admin</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="updateProfile.php">Update Profile</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<!------------------------------------------------------------------------------- -->
<div class="container-fluid" id="content">
  <div class="container">
  <div class="row">


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">CUSTOMIZE</h6>
  </div>

  <div class="card-body col-md-12">
    <div class="table-responsive job-post-item bg-white p-4 d-block d-md-flex align-items-center">
<?php


      if(isset($_POST['edit_btn']))
       {
		    $id = $_POST['id'];


        $query = "SELECT * FROM jobseeker WHERE user_id = '$id' ";
        $query_run = mysqli_query($db1, $query);

        foreach ($query_run as $row)
         {
          ?>
		       <form action="jobseeker_update.php" method="POST">
             <label> ID </label>
  					 <input type="text" name="edit_id" value="<?php echo $row["user_id"] ?>">
  						<div class="form-group">
  							<label> Name </label>
  							<input type="text" name="edit_name" value="<?php echo $row["name"] ?>" class="form-control" placeholder="Enter new Title">
  						</div>
  						<div class="form-group">
  							<label>Skills</label>
  							<input type="text" name="edit_skill" value="<?php echo $row["skills"] ?>" class="form-control" placeholder="Enter new Skill">
  						</div>
  						<div class="form-group">
  							<label>Experience</label>
  							<input type="text" name="edit_exp" value="<?php echo $row["experience"] ?>" class="form-control" placeholder="Enter new Experience">
  						</div>
              <div class="form-group">
  							<label>Basic Education</label>
  							<input type="text" name="edit_bsc" value="<?php echo $row["basic_edu"] ?>" class="form-control" placeholder="Enter new BSC Education">
  						</div>
              <div class="form-group">
  							<label>Masters Education</label>
  							<input type="text" name="edit_msc" value="<?php echo $row["master_edu"] ?>" class="form-control" placeholder="Enter new MSC Education">
  						</div>

  						<button type="submit" name="update_btn" class="btn btn-primary">UPDATE</button>
  						<a href="admin.php" class="btn btn-danger" >CANCEL</a>
				</form>
            <?php
          }
        }
        ?>

     </div>

  </div>
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->



</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
