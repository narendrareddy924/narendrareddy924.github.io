<?php
include '../connection.php';
include '../session.php';

if(isset($_GET["id"])){
    $email=$_SESSION['email'];
    $id = $_GET["CompanySno"];
   // $qry = "update senddata set companySno='".$id."' where ";
    //$res1 = mysqli_query($conn, $qry);
    $query = "update senddata set status=1 where CompanySno='".$s_no."' and email='".$email."'";
    $res = mysqli_query($conn, $query);
    header('Location:c_applications.php');
}


?>