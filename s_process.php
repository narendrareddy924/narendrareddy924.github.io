<?php
session_start();
require_once('connection.php');
    if(isset($_POST['login'])){
        //echo "its working";
        if(empty($_POST['email']) || empty($_POST['password'])){
            header("location:s_loginForm.php?Empty= Plz Enter the fields");
        }else{
            $query= "select * from student_registration where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result= mysqli_query($conn, $query);
            if($res=mysqli_fetch_assoc($result)){
                $_SESSION['name']=$res["firstname"];
                $_SESSION['surname']=$res["surname"];
                $_SESSION['s_no']=$res["s_no"];
                $_SESSION['email']=$_POST['email'];
                header("location:student/s_profile.php");
            }else{
                header("location:s_loginForm.php?Invalid= Plz Enter Correct UserName And Password");
            }
        }
    }else{
        echo "Not working";
    }
?>