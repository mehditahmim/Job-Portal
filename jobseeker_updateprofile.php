<!DOCTYPE html>
<html>
<style >body{text-align:center}</style>
<head>
	<title>Update Profile</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>	
</head>
<body>
	<?php 
     session_start();
     
    include_once('config.php');
    $jid = $_SESSION['id'];
    //echo $_SESSION['jsname'];
    

    if(isset($_POST['updatenow'])) {
       $name = $_POST['name'];
       
       
     
       $email =$_POST['email'];
       $phone =$_POST['phone'];
       $skills =$_POST['skills'];
       $experience =$_POST['experience'];
       $basic_edu = $_POST['basic_edu'];
       $master_edu = $_POST['master_edu'];
       
      $update_login = "UPDATE login SET email = '$email' WHERE log_id = '$jid' ";
      $update_jobseeker = "UPDATE jobseeker SET name = '$name',phone = $phone, experience = $experience, skills = '$skills' , basic_edu = '$basic_edu' , master_edu =  '$master_edu' WHERE log_id = '$jid' ";
      $result_1 = mysqli_query($db1,$update_login);
      $result_2 = mysqli_query($db1,$update_jobseeker);
      if($result_1 == 1 && $result_2 == 1 ) {
      	header('Location: jobseeker_profile.php');
      	
      	
      }
      else{
      	echo "Failed, there was an error";
      } 

    }
     

	 ?>
<div class="col-sm-12">
    <h1 align="center">Edit your profile </h1>
     <hr>
    </div> 

<div class="container">
  <form action="jobseeker_updateprofile.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-75">
    	
      <input type="text" class="form-control"  name = "name"  id="jname" size="50"  required value= "<?php echo $_SESSION['jsname'];  ?>" />
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="given_email">Email</label>
    </div>
    <div class="col-75">
    <input type="text" class="form-control" name = "email" id="jemail" required value= "<?php echo $_SESSION['jsemail'];  ?>" />
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
     <label for="given_phone">Phone</label>
    </div>
    <div class="col-75">
    <input type="tel" class="form-control" name = "phone" id="jphone" required value=<?php echo  $_SESSION['js_phone'];  ?> >
    
  </div>
</div>
<div class="row">
    <div class="col-25">
     <label for="given_skills">Skills  </label>
    </div>
    <div class="col-75">
      <input type="text" class="form-control" name = "skills" id="jskills" required value= "<?php echo $_SESSION['js_skills'] ;  ?>" />     
    
  </div>
</div>

 <div class="row">
    <div class="col-25">
     <label for="given_experinece">Experience </label>
    </div>
    <div class="col-75">
     <input type="text" class="form-control" name = "experience" required id="jexperience" value= "<?php echo  $_SESSION['js_experience'];  ?>" /> 
    
  </div>
</div>

<div class="row">
    <div class="col-25">
     <label for="given_basic_education">Basic Education </label>
    </div>
    <div class="col-75">
     <input type="text" class="form-control" name = "basic_edu" required id="jbedu" value= "<?php echo  $_SESSION['js_basic_edu'];  ?>" />
    
  </div>
</div>

<div class="row">
    <div class="col-25">
     <label for="given_master_education">Master Education </label>
    </div>
    <div class="col-75">
     <input type="text" class="form-control" name = "master_edu" id="jbedu" required value= "<?php echo  $_SESSION['js_master_edu'];  ?>" />
    
  </div>
</div>



  <div class="row">
    <input type="submit" value="Update" name="updatenow">
  </div>
  </form>
</div>


</body>
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
 <script src="search.js"></script>
 <script src="js/jquery-1.12.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>