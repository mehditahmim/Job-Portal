<?php

require('../config.php');
session_start();

if (isset($_POST['submit'])){

		$userName = stripslashes($_REQUEST['userName']); // removes backslashes
		$userName = mysqli_real_escape_string($db1,$userName); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($db1,$password);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE adm_name='$userName' and adm_pass='$password'";
		$result = mysqli_query($db1,$query) or die("Invalid user name or password! Please signup first if you didn't yet.");
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['userName'] = $userName;
			header("Location: admin.php");
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }
else
{
    header('location:login.php?msg=failed');
    }
?>
