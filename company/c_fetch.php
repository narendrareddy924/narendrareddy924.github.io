<?php
//fetch.php
include '../connection.php';
session_start();
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 /* $query = "
  SELECT * FROM student_registration 
  WHERE firstname LIKE '%".$search."%'
  OR surname LIKE '%".$search."%' 
  OR ClgName LIKE '%".$search."%' 
  OR Branch LIKE '%".$search."%' 
  OR Skills LIKE '%".$search."%'
 "; */
    $query = "SELECT * FROM student_registration WHERE Skills LIKE '%".$search."%' OR firstname LIKE '%".$search."%' OR surname LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM student_registration order by s_no desc";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
    <table class="table table-hover text-center">
            <thead class="text-success">
                <tr>
                    <th><h6>First Name</h6></th>
                    <th><h6>College</h6></th>
                    <th><h6>Branch</h6></th>
                    <th><h6>Skills</h6></th>
                    <th><h6>Graduation Year</h6></th>
                    <th><h6>Action</h6></th>
                    <th><h6>Status</h6></th>
                </tr>
            </thead>

 ';
 while($row = mysqli_fetch_array($result))
 {
     $status='';
     $query="select IFNULL(status,'Applied') as stat from companydata where studentSno=".$row['s_no']." and email='".$_SESSION['email']."'";
     if(!$res=mysqli_query($conn,$query))
         die(mysqli_error($conn));
     if($r=mysqli_fetch_array($res))
         $status=$r["stat"];
  $output .= '
   <tr class="text-primary">
    <td>'.$row["firstname"].'</td>
    <td>'.$row["ClgName"].'</td>
    <td>'.$row["Branch"].'</td>
    <td>'.$row["Skills"].'</td>
    <td>'.$row["Grad_year"].'</td>
    <td>'."<a class='btn btn-info p-2' href='applied.php?id=".$row["s_no"]."'>Apply</a>".'</td>
    <td class="text-danger"><b>'.$status.'</b></td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<h5 class="alert alert-danger">Student Data Not Found</h5>';
}

?>