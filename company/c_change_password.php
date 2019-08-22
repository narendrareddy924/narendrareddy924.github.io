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
        include '../connection.php';
        include '../session.php';
        
        if($_POST){
            $opass = $_POST['opass'];
            $npass = $_POST['npass'];
            $cpass = $_POST['cpass'];
            
            $email = $_SESSION['email'];
            
            $qry = "select password from company_registration where email='".$email."'";
            $res = mysqli_query($conn, $qry);
            
            $data = mysqli_fetch_row($res);
            
            if($data[0] == $opass){
                if($npass == $cpass){
                    $q = "update company_registration set password='".$cpass."' where email='".$email."'";
                    $r = mysqli_query($conn, $q);
                    if($q){
                        echo '<h5 class="alert alert-danger">Password Changed Successfully!</h5>';
                    }
                }else{
                    echo '<h5 class="alert alert-danger">New & Confirm passwords are not matched!</h5>';
                }
            }else{
                echo '<h5 class="alert alert-danger">Old password is not matched!</h5>';
            }
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
                    <a class="nav-link px-3" href="c_profile.php">Company Profile</a>
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
                <li><a href="c_profile.php">Profile</a></li>
                <li><a href="c_your_internships.php">Your Internships</a></li>
                <li><a href="c_applications.php">Applications</a></li>
                <li><a href="c_changes.php">Change Details</a></li>
                <li><a href="c_change_password.php" class="active"  >Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-8">
        <h3>Change Password:</h3>
    <form action="c_change_password.php" method="post" class="md-form w-75 mx-auto">
        <input type="text" name="opass" class="form-control" placeholder="Old Password" required>
        <input type="text" name="npass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New Password" required>
        <input type="text" name="cpass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required>
        <br>
        <input type="submit" class="btn btn-outline-danger" name="save" value="Save">
    </form>
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