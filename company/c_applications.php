<?php 

include('../connection.php');
$query = "SELECT * FROM student_registration order by s_no desc";
$result = mysqli_query($conn, $query);

?>

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
            include '../session.php';
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
    <h5 class="text-success mt-4 border-bottom">Company Dashboard :</h5>    
<div class="row">
    <div class="col-md-3">
        <nav class="sidebar">
            <ul>
                <li><a href="c_profile.php">Profile</a></li>
                <li><a href="c_your_internships.php">Your Internships</a></li>
                <li><a href="c_applications.php" class="active">Applications</a></li>
                <li><a href="c_changes.php">Change Details</a></li>
                <li><a href="c_change_password.php">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <h5 class="text-warning">Applied Interns</h5>
        <table class="table table-hover text-center">
            <thead class="text-success">
                <tr>
                    <th><h6>Student Name</h6></th>
                    <th><h6>Email</h6></th>
                    <th><h6>Skills Of a Student</h6></th>
                    <th colspan="3"><h6>Action</h6></th>
                    <th><h6>Status</h6></th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        //if(isset($_GET["id"])){
                        //    $id=$_GET["id"];
                            $email = $_SESSION['email'];
                            $s_no = $_SESSION['s_no'];
                            $query = "select distinct * from senddata where companySno='".$s_no."'";
                            $res = mysqli_query($conn, $query);
                if(isset($_POST['acc'])){
                 //   var_dump($_POST);
                    $sql = "update senddata set status=3 where CompanySno='$s_no' and email='".$_POST['email']."'";
                    $r = mysqli_query($conn, $sql);
                    header("location:c_applications.php");
                }
                if(isset($_POST['rej'])){
                    $sql = "update senddata set status=1 where CompanySno='$s_no' and email='".$_POST['email']."'";
                    $r = mysqli_query($conn, $sql);
                    header("location:c_applications.php");
                }
                            while($row=mysqli_fetch_array($res)){
                                echo "<tr>
                                <td>".$row["firstname"]."</td>
                                <td>".$row["email"]."</td>
                                <td>".$row["Skills"]."</td>
                                <td class='py-1 p-0'>".'<form action="" method="post"><input type="hidden" value="'.$row["email"].'" name="email"><input class="btn btn-info p-2" type="submit" name="acc" value="Accept"></form>'."</td>
                                <td>".'OR'."</td>
                                <td class='py-1 p-0'>".'<form action="" method="post"><input type="hidden" value="'.$row["email"].'" name="email"><input type="submit" class="btn btn-danger p-2" name="rej" value="Reject"></form>'."</td>
                                <td class='text-danger'><b>".$row["status"]."</b></td>
                                </tr>";

                            }
                      //  }
                    ?>
            </tbody>
        </table>
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