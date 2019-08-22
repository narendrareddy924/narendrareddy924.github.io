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
        #crescentImg{
            border: 2px solid orangered;
            border-radius: 10px;
        }
        #crescentImg:hover{
            box-shadow: 0 0 15px blue;
        }
    </style>
</head>
<body>
    <div class="animated bounce delay-2s p-1">
        <a style="margin:0 300px 0 300px" href="index.php"><img id="crescentImg" src="img/crescent.jpg" width="180" height="70"></a>
        <button class="btn btn-primary" type="button"><a class="text-dark" href="trainings.php">Trainings</a></button>
        <button class="btn btn-pink" data-toggle="modal" data-target="#register-modal" type="button"><a class="text-info" href="#">Register</a></button>
        <button class="btn btn-dark" data-toggle="modal" data-target="#login-modal" type="button"><a class="text-primary" href="#">Login</a></button>
    </div>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark animated slideInLeft sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="mr-5">Crescent TechnoSoft</span>
            <span class="navbar-toggler-icon ml-5"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link px-3" href="index.php">Global_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="search.php">Search_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Partnerships</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="about.php">About_Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="contact.php">Contact_Us</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link px-2 text-success" href="feedback.php">Interns Feedback</a>
                </li>
            </ul>    
    </div>
</nav>
    

<!--  -------------------    Register form & Login Form --  Both student & Company  -----------------  -->

<?php
include 'student_company_reg_form.php';    
?>
    
    
<?php
include 'student_company_login_form.php';    
?>

    <!--  -------------------  Student Register form   -----------------  -->


<div class="container"><br>
    <h4 style="color: green;text-decoration:underline" class="font-weight-bold">Student Registraction Form :</h4>
    <div class="row">
        <div class="col-md-6" style="border-right:1px solid rgba(0, 0, 0, 0.3)"><br>
            <h4 style="color:blue">Why Join With Us:</h4>
            <ul>
                <li>Apply to Top Companies worldwide</li>
                <li>Liable Internships</li>
                <li>Free & Paid Internships</li>
                <li>High Job Conversion Internships</li>
                <li>Certified Internships</li>
                <li>Access to International Industry Experts</li>
            </ul>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h5 class="text-danger text-center">Register Here: <small style="color:blue;background-color:yellow;padding:4px;border-radius:5px">Find The Best Company Here</small></h5>
            
            <form action="insertStudents.php" method="post" class="md-form was-validated">
                <input type="text" class="form-control" name="firstname" placeholder="First Name *" required>
                <input type="text" class="form-control" name="surname" placeholder="SurName *" required>
                <input type="tel" class="form-control" name="ph_no" placeholder="Phone Number *" maxlength="10" required>
             <!--   <input type="text" class="form-control" name="username" pattern=".{6,}" title="Atkeast 6 or more charcters" placeholder="User Name" required>    6 or more chars   -->
                <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Your Email *" required>
                <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password *" required>
                <input type="checkbox" checked required><small>I agree the <a href="#">Terms & Conditions</a></small><br>
                <input class="btn btn-secondary" type="submit" value="Register">
                <span style="font-size:15px;color:orangered">If Already Registered Login Here</span>
                <button class="btn btn-warning px-3"><a href="s_loginForm.php">Login</a></button>

            </form>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <br><br><br><br><br>
<?php
include 'footer.php';    
?> 
    


<!-- BODY ENDS -->
<script src="../bootstrap/js/fontawesome-all.js"></script>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/mdb.min.js"></script>
</body>
</html>