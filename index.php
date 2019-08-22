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
            font-family: monospace;
        }
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
    
<div class="container">
<div class="row">
    <div class="col-md-12 p-2">
        
                    <!-- SLIDER WITH INDICATORS -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">  </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active animated rotateIn">
                 <img src="img/slide1.png" height="380" class="d-block w-100" alt="...">
                 <div class="carousel-caption">
                    <p class="text-danger lead bg-white">We are Offering All Types of Internships</p>
                </div>
            </div>
            <div class="carousel-item animated slideInUp">
                <img src="img/slide2.png" height="380" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item animated slideInDown">
                <img src="img/slide3.jpeg" height="380" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <p class="text-danger lead bg-white">We Got Much <strong>Applause</strong> From Interns..</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</div>
    
<!--  Content --><br>
    <h1 style="color:white;text-shadow:0 0 10px red;text-align:center"><i>“REAL GROWTH COMES FROM REAL EXPERIENCE”</i></h1>
    <div class="row">
        <div class="col-sm-9">
            <h3 style="color:green;font-family:serif">So, We are offering in Crescent Internshipz... is :</h3>
            <ul type="circle" style="font-size:20px;color:blue">
                <li>Free Internships</li>
                <li>Best reputed Companies across the India</li>
                <li>Core domain Internships</li>
                <li>Certified Internships</li>
                <li>High job conversion Internships</li>
                <li>All Types Of Summer Internships</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <img src="img/disney.jpg" width="350" height="350">
        </div>
    </div>
    
</div>
    
<!--  -------------------    Search   -----------------  

<div class="bg-dark p-1">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <p class="text-info mt-3">Search Your <b class="text-danger">Interests</b>... Here</p>
        </div>
        <div class="col-md-8">
            <form class="form-inline mx-auto my-lg-0">
                <input class="form-control m-1" type="search" placeholder="Key Words, Skills, Job Title" aria-label="Search" size="30">
                <input class="form-control m-1" type="search" placeholder="City or Location" aria-label="Search">
                <button class="btn bg-success m-0 p-2" type="submit">Search Internship</button>
            </form>
        </div>
    </div>    
</div>
    
-->
 
    
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