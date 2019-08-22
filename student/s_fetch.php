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
    $query = "SELECT * FROM company_registration WHERE internship_field LIKE '%".$search."%' OR companyName LIKE '%".$search."%' OR companyAddress LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM company_registration order by s_no desc";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <table class="table table-hover text-center">
            <thead class="text-success">
                <tr>
                    <th><h6>Company Name</h6></th>
                    <th><h6>Internship Field</h6></th>
                    <th><h6>Avail. Internships</h6></th>
                    <th><h6>Company Address</h6></th>
                    <th><h6>Action</h6></th>
                    <th><h6>Status</h6></th>
                </tr>
            </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
     $status='';
     $query="select IFNULL(status,'Applied') as stat from senddata where CompanySno=".$row['s_no']." and email='".$_SESSION['email']."'";
     if(!$res=mysqli_query($conn,$query))
         die(mysqli_error($conn));
     if($r=mysqli_fetch_array($res))
         $status=$r["stat"];
  $output .= '
   <tr class="text-primary">
    <td>'.$row["companyName"].'</td>
    <td>'.$row["internship_field"].'</td>
    <td>'.$row["no_of_internships"].'</td>
    <td>'.$row["companyAddress"].'</td>
    <td>'."<a class='btn btn-info p-2' href='applied.php?id=".$row["s_no"]."'>Apply</a>".'</td>    
    <td class="text-danger"><b>'.$status.'</b></td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<h5 class="alert alert-warning">Company Data Not Found</h5>';
}

?>