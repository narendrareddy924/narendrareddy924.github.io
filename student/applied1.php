<?php  
include '../connection.php';
include '../session.php';

if(isset($_GET["id"]))
    {
    
    //It is just for Example you just use it and Expand it is it permanently stored or not
    //Yes it will store in application table you just need to update it from company whether they selected or rejected
    //Then the status will gets updated from the company hmm
    //Did you understood the Process ha 1sec
    // how to update it i clck on apply then only i have to store in companies dashboard
    //You dont have to store it in companies dashboard
    //The Companies will get data from application table by their ID's kk
    //You just have to access data from application
    
    
$id=$_GET["id"];
//query Example
    /*
$email=$_SESSION['email'];
$query = "select * from student_registration where email='$email'";
$res = mysqli_query($conn, $query);
    
    //Second query
    //$studentdata= data Fetched from first query
    $studentdata = "select firstname, skills from student_registration where email='$email'";
    $sql = "insert into tblapplication(CompanySno,StudentName,StudentEmail,Status) values (c_id,$studentdata,'Pending')";
*/
    
$email=$_SESSION['email'];
$query = "select * from student_registration where email='$email'";
$res = mysqli_query($conn, $query);
    
$studentdata = "select firstname, Skills from student_registration where email='$email'";
$sql = "insert into tblapplication(CompanySno,firstname,Skills,Status) values (CompanySno, $studentdata, 'Pending')";

  
}
?>

<?php
    if(mysqli_query($conn, $sql)){
      //  header('Location:c_loginForm.php');
    } else{
	    echo "Error: ".$sql. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
