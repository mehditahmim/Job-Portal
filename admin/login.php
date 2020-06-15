<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
 <head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin</title>

  </head>

<nav class="navbar" id="insidenav">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Login</a></li>
      <li><a href="admin/login.php">Admin</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="company/register_emp.php">Company</a></li>
        </ul>
      </li>
      </ul>
  </div>
</nav>
  <body>
  <div class="row">
   <div class="col-sm-4"></div>
    <div class="col-sm-3">
        <form class="form-signin" action="process_login.php" method="post" name="login">
            <h2 class="form-signin-heading">Admin sign in</h2>
			 <div class="page-header" style="background: #f4511e"></div>

             <input type="text" name="userName" class="form-control" placeholder="Enter username" required autofocus name="email">

             <input type="password" name="password" class="form-control" placeholder="Password" required name="password">
             <div class="checkbox">
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>

        </form>
    </div>
  </div>
  </body>

<!--<link href="css/signin.css" rel="stylesheet">-->
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">

</html>

<?php
ob_end_flush();
?>
