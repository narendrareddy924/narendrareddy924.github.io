<?php
session_start();
if(isset($_POST['sendcode'])){
    $email = $_POST['email'];
    $randomCode = mt_rand(0, 999999);
    $_SESSION['random'] = $randomCode;
    $message = 'Your Reset Code is: '.$randomCode;
    $subject = "RESET CODE";
    $to = $email;
    $result = mail($to, $subject, $message);
    echo "The Code has been send to ".$to;
    $_SESSION['email'] = $email;
}
if(isset($_POST['verify'])){
    $code = $_POST['verifycode'];
    if($code == $_SESSION['random']){
        header('location: resetpass.php');
    }else{
        echo "Wrong Code!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/mdb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Crescent Internships</title>
    <link rel="icon" href="img/iocn.jpg">
    <style>
        body{
        background: black url("img/bg1.jpeg");
            background-size: cover;
        }
    </style>
</head>
<body>    
    
    
<form class="md-form container animated flipInY mt-5" action="" method="post">
    <div class="card w-50 m-auto">
        <div class="card-header">
            <h3 class="text-primary text-center">Request Code</h3>
        </div>
        <div class="card-body">
            <div class="md-form">
                <input type="email" id="email" name="email" class="form-control" autofocus>
                <label for="email">Email</label>
            </div>
            <input class="btn btn-success rounded" type="submit" value="SEND" name="sendcode"><br>
            <div class="md-form">
                <input type="text" id="ver" name="verifycode" class="form-control">
                <label for="ver">Verify Code</label>
            </div>
            <input class="btn btn-info rounded" type="submit" value="Verify Code" name="verify"><hr>
            
            <span class="text-danger">Not Yet Registered Sign Up Here</span>
            <button class="btn btn-warning"><a href="studentRegistration.php">Sign Up</a></button><hr>
            <span class="text-info mx-4">Want to go Home Page, Click Here </span>
            <button class="btn btn-outline-dark p-1"><a href="index.php">Home</a></button>
        </div>
    </div>
</form>
 
    
    
    
    <!-- BODY ENDS -->
<script src="../bootstrap/js/fontawesome-all.js"></script>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/mdb.min.js"></script>
</body>
</html>