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
    
    
<form class="md-form container animated flipInY mt-5" action="s_process.php" method="post">
    <div class="card w-50 m-auto">
        <div class="card-header">
            <h3 class="text-primary text-center">Student Login Form</h3>
        </div>
        <div class="card-body">
            
            <?php
                if(@$_GET['Empty'] == true){
            ?>
                <div class="alert text-danger text-center border-info p-1"><?php echo $_GET['Empty'] ?></div>
            <?php
                }
            ?>
            
            <?php
                if(@$_GET['Invalid'] == true){
            ?>
                <div class="alert text-danger text-center border-info p-1"><?php echo $_GET['Invalid'] ?></div>
            <?php
                }
            ?>
        
            <div class="md-form">
                <input type="email" id="email" name="email" class="form-control" autofocus>
                <label for="email">Email</label>
            </div>
            <div class="md-form">
                <input type="password" id="password" name="password" class="form-control">
                <label for="password">Password</label>
            </div>
            <input class="btn btn-success rounded" type="submit" value="Login" name="login"><span class="ml-5"><a href="sendcode.php">Forgot Password?</a></span><hr>
            <button class="btn btn-warning"><a href="studentRegistration.php">Sign Up</a></button>
            <span class="text-danger">Not Yet Registered Sign Up Here</span><hr>
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