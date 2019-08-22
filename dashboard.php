<?php
include 'connection.php';
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
        <a style="margin:0 200px 0 200px" href="index.php"><img id="crescentImg" src="img/crescent.jpg" width="180" height="70"></a>
        <span style="margin:0 10px;color:blue;font-size:27px;padding:5px;border-radius:15px;box-shadow:0 0 15px black;text-shadow:1px 0 0 red"><b class="animated fadeIn infinite slow font-weight-bold"><i class="fa fa-home"></i> Crescent InternShipz...</b></span>
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
                <li class="nav-item">
                    <a class="nav-link px-2 text-secondary" href="feedback.php">Feedback</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link px-2 text-info" href="#">Carrers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-warning" href="#">Experts Speak</a>
                </li>
            </ul>    
    </div>
    
</nav>

<!--  -------------------    login   -----------------  -->
    
    <div class="modal" id="login-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-dark">
                    <h3 class="animated bounce">login here</h3>
                    <button class="close" data-dismiss="modal">
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="userName">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn badge-danger" data-dismiss="modal">Close</a>
                        <input class="btn btn-info" type="submit" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--  -------------------    Register form   -----------------  -->

<div class="modal" id="register-modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-6 animated slideInRight">
                        <div class="modal-header text-danger">
                            <img src="img/girl.jpg" width="100" height="100">
                            <h4>Student Registration, <small class="bg-dark text-warning"><br>It's Free for All Students</small></h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning"><a href="studentRegistration.php">Click Here</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounce slideInLeft">
                        <div class="modal-header text-primary">
                            <img src="img/men.jpg" width="100" height="100">
                            <h4>Company Registration, <small class="bg-dark text-secondary"><br>It's Free for All Companies</small></h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning"><a href="#">Click Here</a></button>
                            </div>
                        </div>
                    </div>
                </div>
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


























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/mdb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../s_styles.css">
    <title>Crescent Internships</title>
    <link rel="icon" href="../img/iocn.jpg">
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
        <a style="margin:0 300px 0 300px" href="../index.php"><img id="crescentImg" src="../img/crescent.jpg" width="180" height="70"></a>
        
        <?php
            include('../connection.php');

            include '../session.php';
            $email=$_SESSION['email'];
            $query = "SELECT * FROM company_registration where email='".$email."'";
            $result = mysqli_query($conn, $query);
        ?>
        <?php
            $email=$_SESSION['email'];
            $qry = "SELECT * FROM company_registration";
            $r = mysqli_query($conn, $qry);
            if($email == 'gunjisrikanth4g3@gmail.com'){
                echo '<a class="btn btn-info p-2" href="issues.php">Issues</a>';
            }
        ?>

    </div>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark animated slideInLeft sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="mr-5">Crescent TechnoSoft</span>
            <span class="navbar-toggler-icon ml-5"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="c_dashboard.php">Company Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link px-3" href="#">Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="c_create_internship.php">Create_Internship</a>
                </li>
            </ul>    
    </div>
    
</nav>

<div class="container">
    <h5 class="text-success mt-4 border-bottom">Company Profile :</h5>
    <div class="row">
    <div class="col-md-3">
        <nav class="sidebar">
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#" class="active">Your Internships</a></li>
                <li><a href="c_applications.php">Applications</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="c_changes.php">Change Details</a></li>
                <li><a href="#">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <div>
            <h4 class="float-left">Internship I:</h4>
            <h6 class="float-right"><i class="far fa-edit"></i>Change</h6>
        </div>
        <br>
        <br>
            <div>
                <?php
                    if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                      echo "<h6>Internship Category :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["internship_category"]."</h6>
                              <h6>Internship Field : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["internship_field"]."</h6>
                              <h6>Start Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["start_date"]."</h6>
                              <h6>End Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["end_date"]."</h6>
                              <h6>Number Of Internships :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["no_of_internships"]."</h6>
                              <h6>Amount : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["amount"]."</h6>
                              <h6>Internship Category II :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["internship_category2"]."</h6>
                              <h6>Internship Field II :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["internship_field2"]."</h6>
                              <h6>Start Date II : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["start_date2"]."</h6>
                              <h6>End Date II :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["end_date2"]."</h6>
                              <h6>Number Of Internships II :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["no_of_internships2"]."</h6>
                              <h6>Amount II :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["amount2"]."</h6>
                              <h6>Internship Category III : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["internship_category3"]."</h6>
                              <h6>Internship Field III :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["internship_field3"]."</h6>
                              <h6>Start Date III :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["start_date3"]."</h6>
                              <h6>End Date III :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["end_date3"]."</h6>
                              <h6>Number Of Internships III :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["no_of_internships3"]."</h6>
                              <h6>Amount III : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["amount3"]."</h6>";
                        }
                    }else {
	                   echo "<h2 style='color:green;margin-left:10px'>whoops! no result found</h2>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>    
 
    
   
    
    
    

    
    
    
    
</div>    
    
<br><br><br><br><br>
<?php
include '../footer.php';    
?>    


<!-- BODY ENDS -->
<script src="../../bootstrap/js/fontawesome-all.js"></script>
<script src="../../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../../bootstrap/js/popper.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/mdb.min.js"></script>
</body>
</html>