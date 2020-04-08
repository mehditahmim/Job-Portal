  <?php 
     
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start();
    }
?>
   


  <?php 
         include_once('config.php');

         if(isset($_POST['create'])){


            $_SESSION['email'] = $_POST['useremail'];
            $email = $_POST['useremail'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            $name  = $_POST['uname'];
            $_SESSION['name'] = $_POST['uname'];
            $mobile=$_POST['mobno'];
            $experience=$_POST['experience'];
            $skills=$_POST['skills'];
            $ug=$_POST['ugcourse'];
            $pg=$_POST['pgcourse'];
            $vkey = md5(time().$name);  //generating key for email verification.
            $hashedpass = md5($pass1);
            $type = 'jobseeker';
            

            if($pass1 != $pass2){
        echo " 
        <div class = 'alert alert-danger'>
        <strong>Danger!  </strong> Passwords don't match <a href = '' class = 'close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div>

        ";

        }
        else{
            $query4 ="INSERT INTO login (email,password,usertype,status,vkey) VALUES ('$email','$hashedpass','$type',0,'$vkey')";
            $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");

            $query5 =  "INSERT INTO jobseeker (log_id,name,phone,experience,skills,basic_edu,master_edu) VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$mobile','$experience','$skills','$ug','$pg')";
            $result2 = mysqli_query($db1,$query5);

            if($result1 == 1 && $result2 == 1){

              sendEmail($vkey);
         
             } 
   }

 }
 function sendEmail($key = '0') {


            require 'PHPMailerAutoload.php';

            $vemail = 'laughter.buddy327@gmail.com';
            $vpass =  '12as34df56gh';
 
           $mail = new PHPMailer;
           //$mail->SMTPDebug = 4;
           $emailfor =  'laughter.buddy327@gmail.com';
         
           $mail->isSMTP();                                      // Set mailer to use SMTP
           $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
           $mail->SMTPAuth = true;                               // Enable SMTP authentication
           $mail->Username = $vemail;                              // SMTP username
           $mail->Password = $vpass;                           // SMTP password
           $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
           $mail->Port = 587;                                    // TCP port to connect to

           $mail->setFrom($vemail, 'JOB-PORTAL');
           $mail->addAddress($_POST['useremail']);     // Add a recipient
                                                     
           $mail->addReplyTo($vemail);
           //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
           $mail->isHTML(true);                                  // Set email format to HTML

           $mail->Subject = 'Email Verification';
           $mail->Body    = "<a href = 'http://localhost/cse327_project/Job-Portal/jobseeker/verify.php?vkey=$key'>Register here</a>";
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

           if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        
           }

           else {
           header("Location: verificationpage.php");
                     
            }
    } 

   

   
?>






   

