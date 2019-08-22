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
    $sql = "update company_registration set internship_category='".$_POST['internship_category']."', internship_field='".$_POST['internship_field']."', no_of_internships='".$_POST['no_of_internships']."', start_date='".$_POST['start_date']."', end_date='".$_POST['end_date']."', amount='".$_POST['amount']."' where email ='".$email."'";
    
    mysqli_query($conn,$sql);
    header("location:c_dashboard.php");
    /*
    if(mysqli_query($conn,$sql))
        echo "Success";
    else
        echo mysqli_error($conn); */
   /* var_dump($_POST);  */
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
                <li class="nav-item">
                    <a class="nav-link px-3" href="c_profile.php">Company Profile</a>
                </li>
                <li class="nav-item active">
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
                <li><a href="c_change_password.php">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-8">
        <?php
            $email = $_SESSION['email'];
            $query = "select * from company_registration where email='".$email."'";
            $res = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($res)){
        ?>
    <form action="c_create_internship.php" method="post" class="md-form">
        <input type="text" name="internship_category" value="<?php echo $row['internship_category'] ?>" class="form-control" placeholder="Inteship Category (Eg: Software Development)" required>
        <input type="text" name="internship_field" value="<?php echo $row['internship_field'] ?>" class="form-control" placeholder="Inteship Field (Eg: PHP Developement, Java Development)" required>
        <input type="number" name="no_of_internships" value="<?php echo $row['no_of_internships'] ?>" class="form-control" placeholder="Number Of Internships Available" required>
        <input type="date" name="start_date" value="<?php echo $row['start_date'] ?>" class="form-control" placeholder="Start Date" required>
        <input type="date" name="end_date" value="<?php echo $row['end_date'] ?>" class="form-control" placeholder="End Date" required>
        <div class="row">
            <div class="col-md-3">
                    <div class="form-check">
                        <label class="form-check-label ml-5">
                            <input type="radio" name="amount" value="<?php echo $row['amount'] ?>" class="form-check-input" value="paid">Paid
                        </label>
                    </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" name="amount" value="<?php echo $row['amount'] ?>" class="form-check-input" value="unpaid">Unpaid
                    </label>
                </div>
            </div>
        </div>
        <br><br>
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