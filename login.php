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
        <form class="form-signin" action="process_login.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
			 <div class="page-header" style="background: #f4511e"></div>
             <label for="inputEmail" class="sr-only">Email address</label>
             <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
             <label for="inputPassword" class="sr-only">Password</label>
             <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
             <div class="checkbox">
             <label><input type="checkbox" value="remember-me"> Remember me </label>
             <a href="forget.php">/Forgot Password</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			
        </form>
    </div>
  </div>
  </body>

<!--<link href="css/signin.css" rel="stylesheet">-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

</html>