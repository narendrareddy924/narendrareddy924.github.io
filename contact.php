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
        h4{
            color: orangered;
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
                <li class="nav-item">
                    <a class="nav-link px-3" href="index.php">Global_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="search.php">Search_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="about.php">About_Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link px-3" href="contact.php">Contact_Us</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link px-2 text-success" href="feedback.php">Feedback</a>
                </li>
            </ul>    
    </div>
    
</nav>
    
<div class="container mt-2">
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 border-right">
                <h3 style="color:orange">Branches:</h3>
                <h4>Main Office</h4>
                    <p>Crescent Technosoft</p>
                    <p>725-C,W-Block,</p>
                    <p>East Gate Road</p>
                    <p>Anna Nagar West</p>
                    <p>Chennai - 600 101</p>
                    <p>Tamil Nadu, India.</p>
                    <p>Contact No :+91 8870532269</p>
                    <p>CustomerCare No:91-4443556696.</p><hr>
                <h4>Qatar:</h4>
                    <p>Cell :+974 31514679</p><hr>
                <h4>Email</h4>
                    <p>info@crescenttechnosoft.com</p>
                    <p>crescentonline@gmail.com</p>
            </div>
            <div class="col-md-6 mt-5">
                <h4>BRANCHES:</h4>
                    <p><strong>Novel Tech Park (3rd floor):</strong></p>
                    <p>Kudlu Gate,Hosur Road</p>
                    <p>Bangalore-68</p>
                    <p>Karnataka</p>
                    <p>Contact No :+91 9944992460</p><hr>
                    <p><strong>Krishnagiri Branch:</strong><p>
                    <p>M- 137,TNHB,Rayakottai Road<p>
                    <p>Krishnagiri-635001<p><hr>
                    <p><strong>Gulbarga</strong><p>
                    <p>Shop no G6,Bharat Complex<p>
                    <p>M.G Road Adarsh Nagar Colony<p>
                    <p>Kalaburagi-58510<p>
                    <p>Contact No: 8147391361<p>
                    <p>Email-ID: brmedisys@gmail.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <?php
        include 'connection.php';
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
            $qry = "insert into issues (username, email, subject, comments)
                values
                ('$username', '$email', '$subject', '$message')";
            $res = mysqli_query($conn, $qry);
        echo '<h4 class="alert alert-warning">Submitted Successfully</h4>';
        }
        ?>
        <h3 style="color:orange">Any Queries : <small>Write Here</small></h3>
        <form class="md-form w-75 mx-auto" action="contact.php" method="post">
            <div class="md-form">
                <input type="text" name="username" id="username" class="form-control" required>
                <label for="username">User Name</label>
            </div>
            <div class="md-form">
                <input type="text" name="email" id="email" class="form-control" required>
                <label for="email">Email</label>
            </div>
            <div class="md-form">
                <input type="text" name="subject" id="subject" class="form-control" required>
                <label for="subject">Subject</label>
            </div>
            <div class="md-form">
                <textarea type="text" name="message" id="message" class="form-control"></textarea>
                <label for="message">Your Message</label>
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>
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