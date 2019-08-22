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
                <li><a href="c_changes.php">Change Details</a></li>
                <li><a href="#">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <div>
            <h4 class="float-left">Your Internships <!--<small>We are Providing 3 Internships For You</small> --></h4>
            <h6 class="float-right"><a href="c_changes.php"><i class="far fa-edit"></i>Change</a></h6>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
                <h6>Internship Category</h6>
                <h6>Internship Field</h6>
                <h6>Start Date</h6>
                <h6>End Date</h6>
                <h6>Number Of Internships</h6>
                <h6>Amount</h6><br><hr>
            <!--    <h6>Internship Category II</h6>
                <h6>Internship Field II</h6>
                <h6>Start Date II</h6>
                <h6>End Date II</h6>
                <h6>Number Of Internships II</h6>
                <h6>Amount II</h6><br><hr>
                <h6>Internship Category III</h6>
                <h6>Internship Field III</h6>
                <h6>Start Date III</h6>
                <h6>End Date III</h6>
                <h6>Number Of Internships III</h6>
                <h6>Amount III</h6>  -->
            </div>
            <div class="col-md-9 text-danger">
                <?php /*
                    if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                      echo "<h6>".$row["internship_category"]."</h6><h6>".$row["internship_field"]."</h6><h6>".$row["start_date"]."</h6><h6>".$row["end_date"]."</h6><h6>".$row["no_of_internships"]."</h6><h6>".$row["amount"]."</h6><br><hr><h6>".$row["internship_category2"]."</h6><h6>".$row["internship_field2"]."</h6><h6>".$row["start_date2"]."</h6><h6>".$row["end_date2"]."</h6><h6>".$row["no_of_internships2"]."</h6><h6>".$row["amount2"]."</h6><br><hr><h6>".$row["internship_category3"]."</h6><h6>".$row["internship_field3"]."</h6><h6>".$row["start_date3"]."</h6><h6>".$row["end_date3"]."</h6><h6>".$row["no_of_internships3"]."</h6><h6>".$row["amount3"]."</h6>";
                        }
                    }else {
	                   echo "<h2 style='color:green;margin-left:10px'>whoops! no result found</h2>";
                    }  */
                if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                      echo "<h6>".$row["internship_category"]."</h6><h6>".$row["internship_field"]."</h6><h6>".$row["start_date"]."</h6><h6>".$row["end_date"]."</h6><h6>".$row["no_of_internships"]."</h6><h6>".$row["amount"]."</h6>";
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