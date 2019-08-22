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
        <h4>Companies Send the Requests For You</h4>
        <table class="table table-hover text-center">
            <thead class="text-success">
                <tr>
                    <th><h6>Company Name</h6></th>
                    <th><h6>Internship Field</h6></th>
                    <th><h6>Company Address</h6></th>
                    <th><h6>Status</h6></th>
                </tr>
            </thead>
            <tbody>
                    <?php /*
                            $email = $_SESSION['email'];
                            $s_no = $_SESSION['s_no'];
                            $query = "select distinct * from senddata where status='NULL' OR";
                            $res = mysqli_query($conn, $query);
                            while($row=mysqli_fetch_array($res)){
                                echo "<tr>
                                <td>".$row["companyName"]."</td>
                                <td>".$row["companyAddress"]."</td>
                                <td>".$row["internshipField"]."</td>
                                <td class='text-danger'><b>".$row["status"]."</b></td>
                                </tr>";
                            }
                   //     } */
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