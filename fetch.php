<?php
//fetch.php
include 'connection.php';
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
 $query = "SELECT * FROM company_registration";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr class="bg-dark text-info">
     <th>Company Name</th>
     <th>Company Address</th>
     <th>Internship Field</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["companyName"].'</td>
    <td>'.$row["companyAddress"].'</td>
    <td>'.$row["internship_field"].'</td>
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
<?php
//fetch.php
include 'connection.php';
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
 $query = "SELECT * FROM student_registration";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr class="bg-dark text-info">
     <th>First Name</th>
     <th>Last Name</th>
     <th>College</th>
     <th>Branch</th>
     <th>Skills</th>
     <th>Graduation Year</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["firstname"].'</td>
    <td>'.$row["surname"].'</td>
    <td>'.$row["ClgName"].'</td>
    <td>'.$row["Branch"].'</td>
    <td>'.$row["Skills"].'</td>
    <td>'.$row["Grad_year"].'</td>
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