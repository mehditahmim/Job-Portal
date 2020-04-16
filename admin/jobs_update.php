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
      $cid = $_POST['edit_compid'];
			$title = $_POST['edit_title'];
			$desc = $_POST['edit_desc'];
      $vac = $_POST['edit_vacno'];
			$exp = $_POST['edit_exp'];
			$bsp = $_POST['edit_bsp'];
			$fna = $_POST['edit_fna'];
      $pdate = $_POST['edit_pdate'];


			//$query = "UPDATE newposts SET title='$title', company='$comp', location='$locat' WHERE id='$id'";
      $query = "UPDATE jobs SET jobid='$id', eid='$cid', title='$title', jobdesc='$desc', vacno='$vac', experience='$exp', basicpay='$bsp', fnarea='$fna', postdate='$pdate' WHERE ename='$name'";
			$query_run = mysqli_query($conn, $query);

			if($query_run){
				$_SESSION['success'] = "DATA UPDATED";
				header('location:admin.php?success');
			}else {
				$_SESSION['status'] = "DATA NOT UPDATED";
				header('location:admin.php?no_success');
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
