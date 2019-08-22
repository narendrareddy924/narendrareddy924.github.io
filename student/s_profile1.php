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
    <link rel="stylesheet" href="../styles.css">
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
            $email=$_SESSION['email'];
            $query = "SELECT * FROM student_registration where email='".$email."'";
            $result = mysqli_query($conn, $query);

        ?>

    </div>
    

<div class="container"><hr>    
<div class="row">
    <div class="col-md-3">
        <nav class="sidebar">
            <ul>
                <li><a href="internships.php" class="active">Internships</a></li>
                <li><a href="s_profile1.php" class="active">Profile</a></li>
                <li><a href="s_applications.php">Applications</a></li>
                <li><a href="s_changes.php">Change Details</a></li>
                <li><a href="s_change_password.php">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <div>
            <h4 class="float-left">Profile Details:</h4>
            <h6 class="float-right"><a href="s_changes.php"><i class="far fa-edit"></i>Change</a></h6>
        </div><br><br>
        <h5 class="animated fadeIn infinite slow"><a class="text-danger" href="s_profile.php"><b style="color:blue;background-color:yellow;padding:4px;border-radius:10px"> Note :</b> If Any Field is Empty, Please Click On Me...</a></h5><br>
        <div class="row">
            <div class="col-md-3">
                <h6>First Name</h6>
                <h6>Last Name</h6>
                <h6>Email</h6>
                <h6>Phone Number</h6>
                <h6>Gender</h6>
                <h6>Skills</h6>
                <h6>University</h6>
                <h6>College</h6>
                <h6>Branch</h6>
                <h6>Graduation Year</h6>
            </div>
            <div class="col-md-9 text-primary font-italic">
                <?php
                    if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                echo "<h6>".$row["firstname"]."</h6>
                              <h6>".$row["surname"]."</h6>
                              <h6>".$row["email"]."</h6>
                              <h6>".$row["ph_no"]."</h6>
                              <h6>".$row["Gender"]."</h6>
                              <h6>".$row["Skills"]."</h6>
                              <h6>".$row["University"]."</h6>
                              <h6>".$row["ClgName"]."</h6>
                              <h6>".$row["Branch"]."</h6>
                              <h6>".$row["Grad_year"]."</h6>";
                        }
                    }else {
	                   echo "<h2 style='color:green;margin-left:10px'>whoops! no result found</h2>";
                    }

                    mysqli_close($conn);
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