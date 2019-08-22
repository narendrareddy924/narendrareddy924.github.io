<?php
include '../connection.php';
include '../session.php';

if(isset($_GET["id"])){
    $email=$_SESSION['email'];
    $id = $_GET["studentSno"];
   // $qry = "update senddata set companySno='".$id."' where ";
    //$res1 = mysqli_query($conn, $qry);
    $query = "update companydata set status=1 where studentSno='".$s_no."' and email='".$email."'";
    $res = mysqli_query($conn, $query);
    header('Location:s_applications.php');
}


?>