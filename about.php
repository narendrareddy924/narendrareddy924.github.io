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
                <li class="nav-item">
                    <a class="nav-link px-3" href="index.php">Global_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="search.php">Search_Internship</a>
                </li>
                <li class="nav-item active">
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
    
<div class="container-fluid mt-2">
<div class="row">
    <div class="col-md-7 text-justify">
    <h3 class="text-primary">About Us:</h3>
      <p>Crescent Technosoft is a rapidly growing customized software development and outsourcing company with headquarters in Chennai, India.We specialize in the development of customized software applications and offshore software outsourcing services. Specifically, our company carries out customized programming, database design, client-server and internet/intranet software applications development.</p>
        
      <p>Over the years we have managed to build a solid team of software outsourcing professionals that come from various backgrounds and expand the creative potential of the company. The expertise that we posses embraces a wide range of customized programming skills involving the latest and most effective development technologies, such as Data Warehousing, Software Testing Tools, J2EE, .NET (ASP.NET, C#, VB.NET), XML and many more.</p>
        
      <p>This defines to a great extent, the quality and reliability of the customized software applications that we develop.</p>
    </div>
    <div class="col-md-5">
      <img src="https://www.crescenttechnosoft.com/Images/Abount%20us%201.png">
    </div>
</div><hr>
<h3 class="text-primary">Technologies We Used:</h3>
<h4 class="text-secondary text-center">C# / ASP.NET / PHP / HTML / CSS /BOOTSTRAP</h4>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>
    


<!--  -------------------    Register form & Login Form --  Both student & Company  -----------------  -->

<?php
include 'student_company_reg_form.php';    
?>
    
    
<?php
include 'student_company_login_form.php';    
?>



















    

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
    <script>
    $('.carousel').carousel({
        interval:2000,
        pause:'hover'
    });
    </script>
    
</body>
</html>