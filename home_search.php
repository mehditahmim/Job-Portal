<?php
include_once("config.php");
$keyword= $_GET['key'];
if($keyword==""){
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Oops!</strong> Please enter a search term</p>
        </div>";

}
else{
$query = "select * from jobs  join company  on jobs.eid = company.eid  where title LIKE '%" . $keyword . "%' or company.ename LIKE '%".$keyword."%'" ;
$result = mysqli_query($db1, $query);

if (mysqli_num_rows($result) == 0)
{
    echo " <div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
        </div>";
}
else {
?>

<html>
<div class="table-responsive">
<table class="table table-striped">
    <th>Company</th>
    <th>Position</th>
    <th>Post Date</th>
    <th>Candidate Profile</th>
    <?php
    echo "<h3 style='color:green'> Search Results Matching :" . $keyword . "</h3> ";

    while ($row = mysqli_fetch_array($result)) {
       
        echo " <tr> ";
        echo "<td>" . $row['ename'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['postdate'] . "</td>";
        echo "<td>" . substr($row['profile'],0,120) . "......</td>";  
        echo "</tr>";
    }
    echo "<h4> <a href='login.php'>Login to view more</a> </h4>";
    }

    }     ?>
</table>
 </div>
</html>
