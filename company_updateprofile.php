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
    $cid = $_SESSION['com_id'];
    
    //echo $_SESSION['jsname'];
    

    if(isset($_POST['update'])) {
       $name = $_POST['name'];
     
       $email =$_POST['email'];
       $phone =$_POST['phone'];
       $address =$_POST['address'];
       $description = $_POST['description'];
       
       
      $update_login = "UPDATE login SET email = '$email' WHERE log_id = '$cid' ";
      $update_company = "UPDATE company SET ename = '$name', address = '$address',phone = $phone, description = '$description' WHERE log_id = '$cid' ";

      $result_1 = mysqli_query($db1,$update_login);
      $result_2 = mysqli_query($db1,$update_company);
       
      if($result_1 == 1 && $result_2 == 1 ) {
      	header('Location: company_profile.php');
        //echo "string";
      	
      	
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
  <form action="company_updateprofile.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-75">
    	
      <input type="text" class="form-control"  name = "name"  id="c_name" size="50"  required value= "<?php echo $_SESSION['cname'];  ?>" />
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="given_email">Email</label>
    </div>
    <div class="col-75">
    <input type="text" class="form-control" name = "email" id="c_email" required value= "<?php echo $_SESSION['cemail'];  ?>" />
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
     <label for="given_address">Address</label>
    </div>
    <div class="col-75">
    <input type="text" class="form-control" name = "address" id="c_address" required value=<?php echo  $_SESSION['caddress'];  ?> >
    
  </div>
</div>
<div class="row">
    <div class="col-25">
     <label for="given_skills">Phone  </label>
    </div>
    <div class="col-75">
      <input type="text" class="form-control" name = "phone" id="c_phone" required value= "<?php echo $_SESSION['cphone'] ;  ?>" />     
    
  </div>
</div>



  <div class="row">
    <div class="col-25">
      <label for="desc">Description</label>
    </div>
    <div class="col-75">
      <textarea id="c_desc" name="description"> <?php echo  $_SESSION['cdescription'];  ?> </textarea>
    </div>
  </div>
    
 



  <div class="row">
    <input type="submit" value="Update" name="update">
  </div>
  </form>
</div>


</body>
 <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
 <script src="search.js"></script>
 <script src="js/jquery-1.12.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>