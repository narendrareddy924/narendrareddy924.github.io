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
            font-family: serif;
            background: white url("img/bg1.jpeg") fixed;
        }
        #crescentImg{
            border: 2px solid orangered;
            border-radius: 10px;
        }
        #crescentImg:hover{
            box-shadow: 0 0 15px blue;
        }
        #bg{
            background-color: rgba(0, 0, 0, 0.6);
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="animated bounce delay-2s p-1">
        <a style="margin:0 300px 0 300px" href="index.php"><img id="crescentImg" src="img/crescent.jpg" width="180" height="70"></a>
        <button class="btn btn-primary" type="button"><a class="text-dark" href="#">Trainings</a></button>
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
                <li class="nav-item">
                    <a class="nav-link px-3" href="index.php">Global_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="search.php">Search_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="about.php">About_Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="contact.php">Contact_Us</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link px-2 text-success" href="feedback.php">Feedback</a>
                </li>
            </ul>    
    </div>
    
</nav>
<div  id="bg">   
<div class="container">
    <h4 class="text-primary">Trainings Offered By Crescent Technosoft:</h4>
    <ul type="square">
        <li>WEB Development / UI Development</li>
        <li>PHP & MySQL</li>
        <li>ASP.NET & C#</li>
    </ul>
    <h5 class="text-secondary">WEB Development / UI Development:</h5>
    <p>Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.</p>
    <p>Responsive Web Design is used in all types of modern web development.</p>
    <h5 class="text-secondary">PHP & MySQL:</h5>
    <p>PHP is a SERVER side Scripting Language.</p>
    <p>MySQL is a Database, Used to Access the Data, Manipulate the Data & Delete the Data.</p>
    <p>It is a Free & Open Source.So that, many programers are using the PHP & MySQL.</p>
    <h5 class="text-secondary">ASP.NET:</h5>
    <p>.NET is a developer platform made up of tools, programming languages, and libraries for building many different types of applications</p>
    <p>ASP.NET performs faster than any popular web framework in the independent TechEmpower benchmarks.</p>
    <p>ASP.NET supports industry standard authentication protocols. Built-in features help protect your apps against cross-site scripting (XSS) and cross-site request forgery (CSRF).</p>
    <p>ASP.NET provides a built-in user database with support for multi-factor authentication and external authentication with Google, Twitter, and more.</p>
</div>

<!--  -------------------    Register form & Login Form --  Both student & Company  -----------------  -->

<?php
include 'student_company_reg_form.php';    
?>
    
    
<?php
include 'student_company_login_form.php';    
?>




    

<?php
include 'footer.php';    
?>    
</div>

<!-- BODY ENDS -->
<script src="../bootstrap/js/fontawesome-all.js"></script>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/mdb.min.js"></script>
</body>
</html>