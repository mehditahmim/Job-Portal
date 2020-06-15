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
	    	$id = $_POST['jobid'];


        $query = "SELECT * FROM jobs WHERE jobid = '$id' ";
        $query_run = mysqli_query($db1, $query);

        foreach ($query_run as $row)
         {
          ?>
		       <form action="jobs_update.php" method="POST">
             <label> ID </label>
					 <input type="text" name="edit_id" value="<?php echo $row["jobid"] ?>">
           <div class="form-group">
             <label>Company ID</label>
             <input type="text" name="edit_compid" value="<?php echo $row["eid"] ?>" class="form-control" placeholder="Enter new Company">
           </div>
						<div class="form-group">
							<label> Title </label>
							<input type="text" name="edit_title" value="<?php echo $row["title"] ?>" class="form-control" placeholder="Enter new Title">
						</div>
						<div class="form-group">
							<label>Job Description</label>
							<input type="text" name="edit_desc" value="<?php echo $row["jobdesc"] ?>" class="form-control" placeholder="Enter new Location">
						</div>
            <div class="form-group">
							<label> Vacno </label>
							<input type="text" name="edit_vacno" value="<?php echo $row["vacno"] ?>" class="form-control" placeholder="Enter new Title">
						</div>
						<div class="form-group">
							<label>Experience</label>
							<input type="text" name="edit_exp" value="<?php echo $row["experience"] ?>" class="form-control" placeholder="Enter new Company">
						</div>
						<div class="form-group">
							<label>Basicpay</label>
							<input type="text" name="edit_bsp" value="<?php echo $row["basicpay"] ?>" class="form-control" placeholder="Enter new Location">
						</div>
            <div class="form-group">
							<label> Functional Area </label>
							<input type="text" name="edit_fna" value="<?php echo $row["fnarea"] ?>" class="form-control" placeholder="Enter new Title">
						</div>
						<div class="form-group">
							<label>Postdate</label>
							<input type="text" name="edit_pdate" value="<?php echo $row["postdate"] ?>" class="form-control" placeholder="Enter new Company">
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
