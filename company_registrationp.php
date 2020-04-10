<?php 
 include_once('config.php');
include 'jobseeker_registrationp.php';
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start();
    }



if(isset($_POST['register'])){

	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$compname = $_POST['compname'];
	$comtype = $_POST['comtype'];
	$indtype = $_POST['indtype'];
	$addr = $_POST['addr'];
	$pin_code = $_POST['pin_code'];
	$person = $_POST['person'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $vkey = md5(time().$compname);  //generating key for email verification.
    $hashedpass = md5($pass1);

    if($pass1 != $pass2){
        echo " 
        <div class = 'alert alert-danger'>
        <strong>Danger!  </strong> Passwords don't match <a href = '' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div>

        ";

        }

        else{
        	$add_company = "INSERT INTO login (email,password,usertype,status,vkey) VALUES ('$email','$hashedpass','company',0,'$vkey')";
        	$result1 = mysqli_query($db1,$add_company) or die("Cant Register , The user email may be already existing");
        	$add_details =  "INSERT INTO company (log_id,ename,etype,address,phone,description) VALUES ((SELECT log_id FROM login WHERE email='$email'),'$compname','$comtype','$addr','$phone','$description')";
            $result2 = mysqli_query($db1,$add_details);

            if ($result1 ==1 && $result2 ==1) {
            	sendEmail($vkey,$email);
            	
            }

        }


}




 ?>