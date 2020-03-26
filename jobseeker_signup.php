<!DOCTYPE html>
<html>
<head>
    <title>Sign up for jobseekers </title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>Sign up for jobseekers </title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<style >
    .wrapper {
    text-align: center;
}

.btn btn-primary {
    position: absolute;
    top: 50%;
}


</style>
<body>
    <div>
    <?php
    session_start();
    if (isset($_POST["create"])){

     $fname = $_POST["fname"];
     $lname = $_POST["lname"];
     $pass1 = $_POST["pass1"];
     $pass2 = $_POST["pass2"];
     $education = $_POST["education"];
     $skills = $_POST["skills"];
     $experience = $_POST["experience"];
     $contact = $_POST["contact"];
     $address = $_POST["address"];
     $img = $_POST["img"];
     $cv = $_POST["cv"];

     
    if(empty($fname) || empty($lname) || empty($pass) || empty($education) || empty($contact)|| empty($address) || empty($img) || empty($cv)) {

        echo " 
        <div class = 'alert alert-danger'>
        <strong>Danger!  </strong> please fill up the required fields <a href = '' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div>

        ";
      
    }

    if($pass1 != $pass2){
        echo " 
        <div class = 'alert alert-danger'>
        <strong>Danger!  </strong> Passwords don't match <a href = '' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div>

        ";
    }

}
     ?>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action="jobseeker_signup.php" method="post">
                <div class="form-group row">
                    <div class="col-sm-12">
                       <h1 align="center">Sign up </h1>
                       <hr>
                  </div> 
                    <div class="col-sm-6">
                        <label for = "inputFirstname">First name</label>
                        <input type = "text" class="form-control" name = 'fname' id="inputFirstname" placeholder="First name">
                    </div>
                    <div class="col-sm-6">
                        <label for = "inputLastname">Last name</label>
                        <input type="text" class="form-control" name = "lname" id="inputLastname" placeholder="Last name">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputPassword1">Password</label>
                        <input type="Password" class="form-control" name="pass1" id="inputPassword1" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputEmail">Email</label>
                        <input type="text" class="form-control" "email" name = "email" id="inputEmail" placeholder="Email" >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                    <label for="inputpassword2">Re-enter Password</label>
                    <input type="password" class="form-control" name = "pass2" id="inputpassword2" placeholder="Re-enter password">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputSkills">Skills</label>
                        <input type="text" class="form-control" name = "skills" id="inputSkills" placeholder="Skills">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputExperience">Experience</label>
                        <input type="text" class="form-control" name = "experience" id="inputExperience" placeholder="Experience">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" name = "contact" id="inputContactNumber" placeholder="Contact Number">
                    </div>    
                    <div class="col-sm-6">
                        <label for="inputeducation">Education</label>
                        <input type="text" class="form-control" name= "education" id="inputEducation" placeholder="Education">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" name = "address" id="inputAddress" placeholder="Address">
                    </div>
                </div>


                    <div class="form-group row">   
                    <div class="col-sm-3">
                        <BR>
                        <label for="img">Select image:</label>
                        <input type="file" id="img" name="img" accept="image/*" >
                    </div> 
                     <div class="col-sm-3"> 
                        <BR>  
                        <label for="file">Upload your cv:</label>
                        <input type="file" id="cv" name="cv">
                     </div>   
                          
                </div>
                
                  <div class="wrapper">
                  <input class = "btn btn-primary"   type="submit" id="register"  name = "create" value = "Sign up" style="float:middle;">
              </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>



