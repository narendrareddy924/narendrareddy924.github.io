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
                <li><a href="s_profile1.php">Profile</a></li>
                <li><a href="s_applications.php">Applications</a></li>
                <li><a href="s_changes.php">Change Details</a></li>
                <li><a href="s_change_password.php" class="active">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <h2>Change Password:</h2>
    <?php
        if($_POST){
            $opass = $_POST['opass'];
            $npass = $_POST['npass'];
            $cpass = $_POST['cpass'];
            
            $email = $_SESSION['email'];
            
            $qry = "select password from student_registration where email='".$email."'";
            $res = mysqli_query($conn, $qry);
            
            $data = mysqli_fetch_row($res);
            
            if($data[0] == $opass){
                if($npass == $cpass){
                    $q = "update student_registration set password='".$cpass."' where email='".$email."'";
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
    <form action="s_change_password.php" method="post" class="md-form w-75 mx-auto">
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