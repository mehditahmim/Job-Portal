<!DOCTYPE HTML>
<html>
    <!--- ------------------------------------------------head------------------------------------------------- -->
	<head>		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  
		<title> Job Portal </title>     
	</head>
	
	<!--- -------------------------------------------------nav------------------------------------------------- -->		
	<nav class="navbar" id="insidenav">
	  <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Job Portal</a>
		</div>

		<ul class="nav navbar-nav">
			<li><a href="#jobseeker">Job Seekers</a></li>
			<li><a href="#">Company List</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="jobseeker_signup.php">Jobseeker</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="company_signup.php">Company</a></li>
				</ul>
			</li>
			
			<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	  </div> 
	</nav>

	<!--- --------------------------------------------------body------------------------------------------------ -->
	<body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
		<div class="container-fluid" id="main1">
			<div class="jumbotron text-center" id="searchjum">
				<h1>Job Portal</h1>
				<p>Search for Jobs</p>
				<form class="form-inline" id="homesearch">
					<input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
					<button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
				</form>
				<div class="page-header" style="background: #f4511e"></div>
			</div>
		</div>

		<div class="container" id="subcontent" style="background: transparent">
			<!-- div for search contents -->
		</div>
	</body>
    
	<!--- --------------------------------------------------scrips----------------------------------------------- -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!--- ---------------------------------------------------style---------------------------------------------- -->
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
