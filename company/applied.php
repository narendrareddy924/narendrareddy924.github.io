<?php
include '../connection.php';
include '../session.php'; /*
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $email=$_SESSION['email'];
    $query = "select * from student_registration where email='".$email."'";
    $res = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($res)){
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["Skills"]."</td><td>"."<a class='btn btn-info p-2' href='#'>Accept</a>"." OR "."<a class='btn btn-danger p-2' href='#'>Reject</a>"."</td></tr>";  

    }
} */

if(isset($_GET["id"])){
    $email=$_SESSION['email'];
    $id = $_GET["id"];
   // $qry = "update senddata set companySno='".$id."' where ";
    //$res1 = mysqli_query($conn, $qry);
    $query = "insert into companydata (studentSno, companyId, companyName, email, companyAddress, internshipField, status) select $id, s_no, companyName, email, companyAddress, internship_field, 'applied' from company_registration where email='".$email."'";
    $res = mysqli_query($conn, $query);
    header('Location:c_dashboard.php');
}
?>
<?php /*
if(isset($_GET["id"])){
    $email=$_SESSION['email'];
    $id = $_GET["id"];
    $qry = "update student_registration set status1 = 'Applied' where s_no='".$id."'";
    $r = mysqli_query($conn, $qry);
    header('Location:c_dashboard.php');
}
*/
?>