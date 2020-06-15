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


  <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">



   <a href="admin.php"><button type = "" name="" class="btn-primary py-2 btn-block">  Job Posts</button></a>


</div>
<div class="col-auto">
  <i class="fas fa-calendar fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

  <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">


 <a href="editmodify.php"><button type = "" name="" class="btn-primary py-2 btn-block">Admins</button></a>

</div>
<div class="col-auto">
  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-info shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">


  <a href="jobseeker_list.php"><button type = "" name="" class="btn-primary py-2 btn-block">Jobseekers</button></a>

</div>
<div class="col-auto">
  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">


  <a href="company_list.php"><button type = "" name="" class="btn-primary py-2 btn-block">Companies</button></a>

</div>
<div class="col-auto">
  <i class="fas fa-comments fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>

    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="editdelete.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
        </form>

      </div>
      </div>
    </div>


    <div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><br><br>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
            Add New Admin
          </button>
      </h6>
      </div>

      <div class="card-body col-md-12" >

      <div class="table-responsive job-post-item bg-white p-4 d-block d-md-flex align-items-center">
       <?php


        $query = "SELECT * FROM jobs";
        $query_run = mysqli_query($db1, $query);
       ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> Jobid </th>
          <th> Comid </th>
          <th> Title </th>
          <th>Job Desc</th>
          <th>vacno</th>
          <th>experience</th>
          <th>basicpay</th>
          <th>fnarea</th>
          <th>postdate</th>
          <th>EDIT </th>
          <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
          while($row = mysqli_fetch_assoc($query_run))
          {
                   $id=$row['jobid'];
                   $compid=$row['eid'];
                   $title=$row['title'];
                   $desc=$row['jobdesc'];
                   $vac=$row['vacno'];
                   $exp=$row['experience'];
                   $bspay=$row['basicpay'];
                   $fna=$row['fnarea'];
                   $date=$row['postdate'];
            ?>


          <tr class>

          <td><?php echo $id ?> </td>
          <td><?php echo $compid ?> </td>
          <td><?php echo $title ?> </td>
          <td><?php echo $desc ?> </td>
          <td><?php echo $vac ?> </td>
          <td><?php echo $exp ?> </td>
          <td><?php echo $bspay ?> </td>
          <td><?php echo $fna ?> </td>
          <td><?php echo $date ?> </td>
            <td>
          <form action="post_edit.php" method="post">
          <input type="hidden" name="jobid" value="<?php echo $row["jobid"]; ?>">
          <input type="hidden" name="title" value="<?php echo $row["title"]; ?>">
              <button type = "submit" name="edit_btn" class="btn btn-success"> EDIT</button>
            </form>
          </td>
          <td>
              <form action="editdelete.php" method="post">
              <input type="hidden" name="delete_id" value="<?php echo $row["id"]?>">
                <button type = "submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
              </form>
          </td>
          </tr>
          <?php
          }
        }
        else{
          echo "No records found!";
        }

        ?>

        </tbody>
        </table>

      </div>
      </div>
      </div>
    </div>


    <!-- /.container-fluid -->



   </div>  <!---row ends--->

   <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
             <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
                <form action="code.php" method="POST">

                   <div class="modal-body">
          <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
                </form>
              </div>
          </div>
      </div>


    </div>

</div> <!-- main content div -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
