<!DOCTYPE html>
<html>
<head>
    <title>Sign up for jobseekers </title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form>
                <div class="form-group row">
                    <div class="col-sm-12">
                       <h1 align="center">Sign up </h1>
                       <hr>
                  </div> 
                    <div class="col-sm-6">
                        <label for = "inputFirstname">First name</label>
                        <input type = "text" class="form-control" id="inputFirstname" placeholder="First name">
                    </div>
                    <div class="col-sm-6">
                        <label for = "inputLastname">Last name</label>
                        <input type="text" class="form-control" id="inputLastname" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputPassword1">Password</label>
                        <input type="Password" class="form-control" id="inputPassword1" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputeducation">Education</label>
                        <input type="text" class="form-control" id="inputEducation" placeholder="Education" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                    <label for="inputpassword2">Re-enter Password</label>
                    <input type="password" class="form-control" id="inputpassword2" placeholder="Re-enter password"required>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputSkills">Skills</label>
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputExperience">Experience</label>
                        <input type="text" class="form-control" id="inputExperience" placeholder="Experience">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Contact Number</label>
                        <input type="number" class="form-control" id="inputContactNumber" placeholder="Contact Number">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                    </div>
                    <div class="col-sm-6">
                        <BR>
                        <label for="img">Select image:</label>
                        <input type="file" id="img" name="img" accept="image/*" >
                        <BR>
                        <label for="file">Upload your cv:</label>
                        <input type="file" id="cv" name="cv">
                          

                    </div>
                </div>
                
                <button type="button" class="btn btn-primary px-4 float-right">Sign up</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>



