<!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Seeker Registration</title>
 
    </head>
    <body>       
        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registration</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">

        <div class="jumbotron">             
            <h1>Register & find Jobs</h1>  
            <p>
                Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.<br/>
                Apply to jobs in just one click. Apply to thousands of jobs posted daily.
            </p>
            <div class="page-header" style="background: #f4511e"></div>
        </div>
        

    <form id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="jobseeker_registrationp.php" enctype="multipart/form-data" class="form-horizontal">
    <h3 class="h3style"> Your Login Detials </h3>
    

     <div class="form-group">
        <label class="control-label col-sm-2" for="email" >Enter your Email ID:</label>
        <div class="col-sm-4">
             <input type="email" name="useremail" placeholder="Your E-mail" class="form-control" id="email" 
                        required onblur="validate('email','emailerror',this.value)">
        </div>
        <label id="emailerror" class="error" ></label>
     </div>  

     <div class="form-group"> 
         <label class="control-label col-sm-2 " for="pass1" > Create new Password:</label>
         <div class="col-sm-4">  <input type="password" id="pass1" placeholder="New Password" name="pass1" class="form-control" 
                      required onblur="validate('password','passerror',this.value)">
         </div>
        <label id="passerror" class="error"></label>
    </div>

    <div class="form-group">
            <label class="control-label col-sm-2 for="passconf">Confirm the Password:</label>
               <div class="col-sm-4">        
                <input type="password" id="pass2" placeholder="Confirm Password" name="pass2" class="form-control" required>
                   </div>
                   <label class="error" id="passerror2"></label>
            </div> 


    <div class="page-header"></div>
    <h3 class="h3style">Your Contact Information</h3>
    


   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Mention your Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="name" placeholder="Your Name" name="uname" class="form-control" 
                    required onblur="validate('username','nameerror',this.value)"> 
                </div>
         <label id="nameerror" class="error"></label>
    </div>


 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required onblur="validate('mobilenum','mobnoerror',this.value)">
                 </div>
                  <label id="mobnoerror" class="error"></label>
      </div>

<div class="page-header"></div>    
<h3 class="h3style"> Your Current Employment Details </h3> 


<div class="form-group"> 
    <label for="experience" class="control-label col-sm-4"> How much work experience do you have:</label>
        <div class="col-sm-4">
            <select name="experience" class="form-control" id="experience" required>
                <option value="">select </option>
                <option value="1">1 year </option>
                <option value="2">2 year </option>
                <option value="3">3 year </option>
                <option value="4">4 year </option>
                <option value="5">5 year </option>
                <option value="6">6 year </option>
                <option value="7">7 year </option>
                <option value="8">8 year </option>
                <option value="9+">9+ year </option>
         </select>
    </div>
</div>

<div class="form-group"> 
    <label class="control-label col-sm-4" for="skills"> What are your Key Skills:</label>
        <div class="col-sm-4"><input type="text" name="skills" placeholder="skills" class="form-control" name="skills" id="skills"
                                     required onblur="validate('text','skillerror',this.value)">
        </div>
        <label id="skillerror" class="error"></label>
</div>


<div class="page-header"></div>
<h3 class="h3style"> Your Educational Qualifications </h3>


<div class="form-group"> 
    <label class="control-label col-sm-2" for="ugcourse"> Your Basic Education: </label>
     <div class="col-sm-4">
                <select name="ugcourse" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
                <option value="B.A">B.A</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BDS">BDS</option>
                <option value="BHM">BHM</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="MBBS">MBBS</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select>
        </div>
 </div>
 <div class="form-group"> 
    <label class="control-label col-sm-2" for="pgcourse"> Your Masters Education:</label>
        <div class="col-sm-4"> <select name="pgcourse" id="pgcourse"  class="form-control" required>
                                <option value="">Select</option>
                                <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
                                <option value="CA">CA</option>
                                <option value="CS">CS</option>
                                <option value="ICWA (CMA)">ICWA (CMA)</option>
                                <option value="Integrated PG">Integrated PG</option>
                                <option value="LLM">LLM</option>
                                <option value="M.A">M.A</option>
                                <option value="M.Arch">M.Arch</option>
                                <option value="M.Com">M.Com</option>
                                <option value="M.Ed">M.Ed</option>
                                <option value="M.Pharma">M.Pharma</option>
                                <option value="M.Sc">M.Sc</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="MBA/PGDM">MBA/PGDM</option>
                                <option value="MCA">MCA</option>
                                <option value="MS">MS</option>
                                <option value="PG Diploma">PG Diploma</option>
                                <option value="MVSC">MVSC</option>
                                <option value="MCM">MCM</option>
                                <option value="Other">Other</option>
                            </select>
          </div>
</div>

</div>

        <div class="form-group form-inline col-sm-10">

        <button class="btn btn-success" type="submit" name = 'create'  id="reg" value="submit">Register</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>

</div>

    </form>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
     
    </body>
    </html>
