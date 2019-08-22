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
    <!--  jquery ui  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
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
        .box{
            width: 50%;
            border: 2px solid red;
            text-decoration: underline;
            
        }
    </style>
</head>
<body>
    <div class="animated bounce delay-2s p-1">
        <a style="margin:0 300px 0 300px" href="../index.php"><img id="crescentImg" src="../img/crescent.jpg" width="180" height="70"></a>
        <?php
            include '../connection.php';
            include '../session.php';
            
            if(isset($_POST["save"]))
            {
                $email=$_SESSION['email'];
                $sql = "update student_registration set Dob='".$_POST['dob']."', Gender='".$_POST['gender']."', University='".$_POST['university']."', ClgName='".$_POST['clgName']."', Branch='".$_POST['branch']."', Skills='".$_POST['skills']."', Grad_year='".$_POST['grad_year']."' where email ='".$email."'";
                
                header("location:internships.php");
                
                mysqli_query($conn,$sql);
            }
        ?>

    </div>

<div class="container">
    <h5 class="text-success mt-4 border-bottom">Student Profile :</h5>
    <h4 class="p-1 w-75 mx-auto bg-info text-center text-white rounded">Please Comlete Your Profile To Apply Internships:</h4>
    
    <h5 class="mt-4 border rounded p-2 text-info"><i class="fas fa-info-circle text-primary"></i><mark> Note: </mark>Complete your profile to get the job opportunities based on your skills</h5>
    
    <div class="row">
        <div class="col-md-3">
            <nav class="sidebar">
            <ul>
                <li><a href="internships.php">Internships</a></li>
                <li><a href="s_profile1.php">Profile</a></li>
                <li><a href="s_applications.php">Applications</a></li>
                <li><a href="s_changes.php">Change Details</a></li>
                <li><a href="s_change_password.php">Change Password</a></li>
            </ul>
        </nav>
        </div>
        <div class="col-md-9">
                    <?php
                        $email=$_SESSION['email'];
                        $query = "select * from student_registration where email='".$email."'";
                        $res = mysqli_query($conn, $query);
                        while($row=mysqli_fetch_array($res)){
                    ?>
            <form action="" method="post" class="md-form w-75 mx-auto">
        <div class="md-form">
            <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" id="firstname" class="form-control" required>
            <label for="firstname">Name</label>
        </div>
        <div class="row">
            <div class="col-md-4"><h6 class="text-primary">Date of Birth:</h6></div>
            <div class="col-md-8">
                <input type="date" name="dob" value="<?php echo $row['Dob'] ?>" placeholder="Date Of Birth" class="form-control" required>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"><h6 class="text-warning">Gender:</h6></div>
            <div class="col-md-8">
                <select class="form-control" value="<?php echo $row['Gender'] ?>" name="gender" required>
                    <option disabled>--Select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="n/a">N/A</option>
                </select>
            </div>
        </div>
        <!--   
        <div class="md-form">
            <input type="text" id="tags" class="form-control" placeholder="Enter College (Eg for other : Other - collegename )">
        </div>
        -->
        <div class="md-form">
            <input type="text" name="university" value="<?php echo $row['University'] ?>" id="university" class="form-control" required>
            <label for="university">University</label>
        </div>
        <div class="md-form">
            <input type="text" name="clgName" value="<?php echo $row['ClgName'] ?>" id="ClgName" class="form-control" required>
            <label for="clgName">College Name</label>
        </div>
        <div class="md-form">
            <input type="text" name="branch" value="<?php echo $row['Branch'] ?>" id="branch" class="form-control" required>
            <label for="branch">Branch</label>
        </div>
        <div class="md-form">
            <input type="text" name="skills" value="<?php echo $row['Skills'] ?>" id="skills" class="form-control" title="Please Enter Your Technical Skills" required>
            <label for="skills">Skills</label>
        </div>
        <div class="md-form">
            <input type="number" name="grad_year" value="<?php echo $row['Grad_year'] ?>" id="grad_year" class="form-control" pattern="[0-9]{4}" required title="Please Enter Correct Year (Eg: 2018)">
            <label for="g_year">Graduation Year</label>
        </div>
        <input type="submit" class="btn btn-outline-danger" name="save" value="Save">
    <?php
        }
    ?>
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
    
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="autoCom.js"></script>
    

    
</body>
</html>