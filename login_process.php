<?php 
include_once('config.php');

$email = $_POST['email'];
$pass  = $_POST['password'];
$hash_pass = md5($pass);
$get_user = "SELECT * FROM login WHERE email = '$email'";
$result_set = mysqli_query($db1,$get_user);
$result=mysqli_fetch_array($result_set,MYSQLI_ASSOC);

if(($result>0) && ($hash_pass == $result['password'] )){
 
  if (($result['usertype'] == 'jobseeker') && ($result['status'] == 1)) {
    session_start();
    $_SESSION['id'] = $result['log_id'];
    $_SESSION["type"] = $result['usertype'];
    header("Location:jobseeker_profile.php?msg=success");
  }
   if (($result['usertype'] == 'jobseeker') && ($result['status'] == 0))
     header("Location: verificationpage.php");
   
    if (($result['usertype'] == 'company') && ($result['status'] == 0))
     header("Location: verificationpage.php");
  

}
  else{
    header('location:login.php?msg=failed');
  }
  




 ?>