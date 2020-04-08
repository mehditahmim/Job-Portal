<?php 

include_once('config.php');

if(isset($_GET['vkey']))
  {
    $vkey = $_GET['vkey'];
    
    $match_key = "SELECT status, vkey FROM login WHERE status = 0 AND vkey = '$vkey' LIMIT 1";
    $resultSet = mysqli_query($db1,$match_key);
   
    
    //$resultSet = mysqli_query(mysqli, "SELECT status, vkey FROM login WHERE status = 0 AND vkey = $vkey LIMIT 1");
    if ($resultSet) {
      $update = "UPDATE login set status =  1  WHERE vkey = '$vkey'  LIMIT 1" ; 
      mysqli_query($db1,$update);
      if($update)
        header("Location: login.php");
       
    }

    else{
      die("something went wrong");
    }


  }

 ?>