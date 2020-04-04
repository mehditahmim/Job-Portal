<!DOCTYPE HTML>
<html>
    <!--- ------------------------------------------------head------------------------------------------------- -->
    <head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Post Jobs </title>     
    </head>
	
	<!--- ---------------------------------------------------nav------------------------------------------------ -->
		<div id="nav">
			<nav>
				<div class="navbar" id="insidenav">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Job Portal</a>
					</div>

					<ul class="nav navbar-nav">
						<li><a href="profile.php"><?php echo $_SESSION['name']; ?><span class="sr-only">(current)</span></a></li>
						<li class="active"><a href="#">Job Posting</a></li>
						
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
								<li><a href="#">Update profile</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Change Password</a></li>
						   </ul>
						</li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div> 
			</nav>
		</div>
		
	<!--- --------------------------------------------------body------------------------------------------------ -->
    <body>
        <div class="container">
        <br/>
			<center><h2>Post Jobs </h2></center>
			<div class="page-header" style="background: #f4511e"></div>
			<h3> Job Details: </h3>
			<div class="page-header" />
				<form id="job_post" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="process_postjob.php">
					<div class="form-group">
						<label for="desig" class="control-label col-sm-2">Job Title:</label>
						<div class="col-sm-4"> 
							<input type="text" class="form-control" name="desig" id="desig" required/>
						</div>
                        <label id="deser" class="error"></label>
			        </div>
            
					<div class="form-group">
						<label for="vac_no" class="control-label col-sm-2">Number of vacancies:</label>
						<div class="col-sm-2">  <input type="text" name="vacno" class="form-control" id="vac_no" required/> </div>
						<label id="vacer" class="error"></label>
					</div>
            
					<div class="form-group">
						<label for="job_desc" class="control-label col-sm-2">Job Description:</label>
						<div class="col-sm-5">  <textarea class="form-control" rows="5" id="job_desc" name="jobdesc" required></textarea> </div>
						<label class="error" id="jober"></label>
					</div>
            
					<div class="form-inline form-group">
						<label for="exp" class="control-label col-sm-2">Work Experiecne:</label>
						<div class="col-sm-4">
							<select class="form-control" name="exp" required name="exp" id="exp">
								<option value=""> -Select- </option>
								<option value="1">1 </option>
								<option value="2">2 </option>
								<option value="3">3 </option>
								<option value="4">4 </option>
								<option value="5"> 5</option>
								<option value="6">6 </option>
								<option value="7">7 </option>
							 	<option value="7 above"> above 7</option>
							</select> <span> Minimum Years </span>
						</div>
					</div>
             
					<div class="form-inline form-group">
					<label for="pay-div" class="control-label col-sm-2">Basic Pay:</label>
						<div class="col-sm-4" id="pay-div">
							<select class="form-control" id="money" name="money"> 
								<option value="BDT"> BDT </option>
								<option value="USD"> USD </option>
							</select>
							<input type="text" class="form-control" id="pay" name="pay" required"/>
						</div>
						<label class="error" id="payer"></label>
					</div>
          
					<h3> Desired Candidate Profile:</h3>
					<div class="page-header" />  
					<div class="form-group">
						<label for="profile" class="control-label col-sm-2">Desired Candidate Profile</label>
						<div class="col-sm-5"><textarea id="profile" rows="5" name="profile" class="form-control" required"></textarea></div>
						<label class="error" id="proer"></label>
					</div>
					<div class="page-header" />
                
					<div class="form-group col-sm-2">
						<button class="btn btn-lg btn-primary btn-block btn-success" type="submit" id="postbtn">Post Job</button>				
					</div>
				</form>
		 </div>
    </body>

 	<!--- --------------------------------------------------scrips----------------------------------------------- -->
	<script src="../js/jquery-1.12.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
    <!--- ---------------------------------------------------style---------------------------------------------- -->
	<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
</html>
