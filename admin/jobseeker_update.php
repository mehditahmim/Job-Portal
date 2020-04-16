<?php
ob_start();
session_start();

if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();

    }

$conn = mysqli_connect("localhost", "root", "", "jobportal");

		if(isset($_POST['update_btn']))
		{
			$id = $_POST['edit_id'];
			$name = $_POST['edit_name'];
			$skill = $_POST['edit_skill'];
			$exp = $_POST['edit_exp'];
      $bsc = $_POST['edit_bsc'];
			$msc = $_POST['edit_msc'];

			//$query = "UPDATE newposts SET title='$title', company='$comp', location='$locat' WHERE id='$id'";
      $query = "UPDATE jobseeker SET user_id='$id', name='$name', skills='$skill', experience='$exp', basic_edu='$bsc', master_edu='$msc' WHERE name='$name'";
			$query_run = mysqli_query($conn, $query);

			if($query_run){
				$_SESSION['success'] = "DATA UPDATED";
				header('location:jobseeker_list.php?success');
			}else {
				$_SESSION['status'] = "DATA NOT UPDATED";
				header('location:jobseeker_list.php?no_success');
			}
		}


      	if(isset($_POST['delete_btn']))
		{
			$id = $_POST['delete_id'];
			$query = "DELETE FROM newposts WHERE id='$id'";
			$query_run = mysqli_query($conn, $query);

			if($query_run){
				$_SESSION['success'] = "DATA DELETED";
				header('location: editmodify.php');
			}else {
				$_SESSION['status'] = "DATA NOT DELETED";
				header('location: editmodify.php');
			}
		}

ob_end_flush();
?>
