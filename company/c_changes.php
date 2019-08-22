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
            
            if(isset($_POST["save"]))
            {
                $email=$_SESSION['email'];
                $sql = "update company_registration set firstname='".$_POST['firstname']."', surname='".$_POST['surname']."', ph_no='".$_POST['ph_no']."', email='".$_POST['email']."', companyName='".$_POST['companyName']."', companyAddress='".$_POST['companyAddress']."', internship_category='".$_POST['internship_category']."', internship_field='".$_POST['internship_field']."', no_of_internships='".$_POST['no_of_internships']."', start_date='".$_POST['start_date']."', end_date='".$_POST['end_date']."', amount='".$_POST['amount']."', internship_category2='".$_POST['internship_category2']."', internship_field2='".$_POST['internship_field2']."', no_of_internships2='".$_POST['no_of_internships2']."', start_date2='".$_POST['start_date2']."', end_date2='".$_POST['end_date2']."', amount2='".$_POST['amount2']."', internship_category3='".$_POST['internship_category3']."', internship_field3='".$_POST['internship_field3']."', no_of_internships3='".$_POST['no_of_internships3']."', start_date3='".$_POST['start_date3']."', end_date3='".$_POST['end_date3']."', amount3='".$_POST['amount3']."' where email ='".$email."'";
                
                header("location:c_profile.php");
                
                mysqli_query($conn,$sql);
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
                <li><a href="c_profile.php">Profile</a></li>
                <li><a href="c_your_internships.php">Your Internships</a></li>
                <li><a href="c_applications.php">Applications</a></li>
                <li><a href="c_changes.php" class="active">Change Details</a></li>
                <li><a href="c_change_password.php">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9">
            <form action="" method="post" class="md-form w-75 mx-auto">
                    <?php
                        $email=$_SESSION['email'];
                        $query = "select * from company_registration where email='".$email."'";
                        $res = mysqli_query($conn, $query);
                        while($row=mysqli_fetch_array($res)){
                    ?>
                <div class="md-form">
                <input type="text" class="form-control" id="fname" value="<?php echo $row['firstname'] ?>" name="firstname" required>
            <label for="fname">First Name</label>
        </div>
                <div class="md-form">
                <input type="text" class="form-control" id="lname" value="<?php echo $row['surname'] ?>" name="surname" required>
            <label for="lname">Sur Name</label>
        </div>
        <div class="md-form">
            <input type="tel" class="form-control" id="ph_no" value="<?php echo $row['ph_no'] ?>" name="ph_no" maxlength="10" required>
            <label for="ph_no">Phone Number</label>
        </div>
        <div class="md-form">
            <input type="email" class="form-control" id="email" value="<?php echo $row['email'] ?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <label for="email">Email</label>
        </div>
        <div class="md-form">
            <input type="text" name="companyName" id="companyName" value="<?php echo $row['companyName'] ?>" class="form-control" required>
            <label for="companyName">Company Name</label>
        </div>
        <div class="md-form">
            <input type="text" name="companyAddress" id="companyAddress" value="<?php echo $row['companyAddress'] ?>" class="form-control" required>
            <label for="companyAddress">Company Address</label>
        </div>
        <div class="md-form">
            <input type="text" name="internship_category" id="internship_category" value="<?php echo $row['internship_category'] ?>" class="form-control" required>
            <label for="internship_category">Internship Category</label>
        </div>
        <div class="md-form">
            <input type="text" name="internship_field" value="<?php echo $row['internship_field'] ?>" id="internship_field" class="form-control" required>
            <label for="internship_field">Internship Field</label>
        </div>
        <div class="md-form">
            <input type="number" name="no_of_internships" value="<?php echo $row['no_of_internships'] ?>" id="no_of_internships" class="form-control" required>
            <label for="no_of_internships">Number of Internships</label>
        </div>
        <div class="md-form">
            <input type="text" name="start_date" id="start_date" value="<?php echo $row['start_date'] ?>" class="form-control" required>
            <label for="start_date">Start Date</label>
        </div>
        <div class="md-form">
            <input type="text" name="end_date" id="end_date" value="<?php echo $row['end_date'] ?>" class="form-control" required>
            <label for="end_date">End Date</label>
        </div>
        <div class="md-form">
            <input type="text" name="amount" id="amount" value="<?php echo $row['amount'] ?>" class="form-control" required>
            <label for="amount">Amount</label>
        </div><!--
        <div class="md-form">
            <input type="text" name="internship_category2" id="internship_category2" value="<?php echo $row['internship_category2'] ?>" class="form-control">
            <label for="internship_category2">Internship Category II</label>
        </div>
        <div class="md-form">
            <input type="text" name="internship_field2" value="<?php echo $row['internship_field2'] ?>" id="internship_field2" class="form-control">
            <label for="internship_field2">Internship Field II</label>
        </div>
        <div class="md-form">
            <input type="number" name="no_of_internships2" value="<?php echo $row['no_of_internships2'] ?>" id="no_of_internships2" class="form-control">
            <label for="no_of_internships2">Number of Internships II</label>
        </div>
        <div class="md-form">
            <input type="text" name="start_date2" id="start_date2" value="<?php echo $row['start_date2'] ?>" class="form-control">
            <label for="start_date2">Start Date II</label>
        </div>
        <div class="md-form">
            <input type="text" name="end_date2" id="end_date2" value="<?php echo $row['end_date2'] ?>" class="form-control">
            <label for="end_date2">End Date II</label>
        </div>
        <div class="md-form">
            <input type="text" name="amount2" id="amount2" value="<?php echo $row['amount2'] ?>" class="form-control">
            <label for="amount2">Amount II</label>
        </div>
        <div class="md-form">
            <input type="text" name="internship_category3" id="internship_category3" value="<?php echo $row['internship_category3'] ?>" class="form-control">
            <label for="internship_category3">Internship Category III</label>
        </div>
        <div class="md-form">
            <input type="text" name="internship_field3" value="<?php echo $row['internship_field3'] ?>" id="internship_field3" class="form-control">
            <label for="internship_field3">Internship Field III</label>
        </div>
        <div class="md-form">
            <input type="number" name="no_of_internships3" value="<?php echo $row['no_of_internships3'] ?>" id="no_of_internships3" class="form-control">
            <label for="no_of_internships3">Number of Internships III</label>
        </div>
        <div class="md-form">
            <input type="text" name="start_date3" id="start_date3" value="<?php echo $row['start_date3'] ?>" class="form-control">
            <label for="start_date3">Start Date III</label>
        </div>
        <div class="md-form">
            <input type="text" name="end_date3" id="end_date3" value="<?php echo $row['end_date3'] ?>" class="form-control">
            <label for="end_date3">End Date III</label>
        </div>
        <div class="md-form">
            <input type="text" name="amount3" id="amount3" value="<?php echo $row['amount3'] ?>" class="form-control">
            <label for="amount3">Amount III</label>
        </div> -->
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
</body>
</html>