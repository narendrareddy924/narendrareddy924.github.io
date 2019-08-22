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
    <link rel="stylesheet" href="styles.css">
    <title>Crescent Internships</title>
    <link rel="icon" href="img/iocn.jpg">
    <style>
        body{
            background-color: aliceblue;
        }
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
        <a style="margin:0 300px 0 300px" href="index.php"><img id="crescentImg" src="img/crescent.jpg" width="180" height="70"></a>
        <button class="btn btn-primary" type="button"><a class="text-dark" href="trainings.php"s>Trainings</a></button>
        <button class="btn btn-pink" data-toggle="modal" data-target="#register-modal" type="button"><a class="text-info" href="#">Register</a></button>
        <button class="btn btn-dark" data-toggle="modal" data-target="#login-modal" type="button"><a class="text-primary" href="#">Login</a></button>
        
      
        
    </div>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark animated slideInLeft sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="mr-5">Crescent TechnoSoft</span>
            <span class="navbar-toggler-icon ml-5"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="index.php">Global_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="search.php">Search_Internship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="about.php">About_Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="contact.php">Contact_Us</a>
                </li>
                <li class="nav-item ml-5 active">
                    <a class="nav-link px-2 text-success" href="#">Feedback</a>
                </li>
            </ul>    
    </div>
    
</nav>
    <div class="container">
        <?php 
include('connection.php');
if(isset($_GET['submit'])){
$query = "INSERT INTO comments (uname, clg_name, comments)

VALUES

('$_GET[uname]', '$_GET[clg_name]', '$_GET[comments]')";


if(mysqli_query($conn, $query)){
    echo '<p class="alert alert-danger">Thanks For Your Feedback...</p>';
    header( "Refresh:2; url=feedback.php", true, 303);
        //header('Location:index.php');
    } else{
	    echo "Error: ".$query. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
    <form action="" method="get" class="md-form w-75 m-auto">
        <h5 class="bg-success my-2 text-white p-2 text-center">Hi <strong>Students...</strong> Please Comment Your Feedback, That Will Help to Other Students... <i class="fa fa-smile text-secondary"></i></h5>
        <input type="text" name="uname" placeholder="Name of the User" class="form-control" required>
        <input type="text" name="clg_name" placeholder="Name of the College" class="form-control" required>
        <textarea rows="4" name="comments" cols="100" placeholder="Write Your Feedback" required class="form-control"></textarea>
        <input class="btn btn-primary" type="submit" value="Submit" name="submit">
        <span style="color:white;cursor:context-menu">D.V.Narendra Reddy</span>
    </form><hr>
</div>
    <h4 class="text-center text-secondary w-25 p-2 m-auto">Happy Users... <i class="fa fa-smile text-info"></i></h4>
<?php 

$query = "SELECT * FROM comments order by s_no desc";
$result = @mysqli_query($conn, $query);

if (@mysqli_num_rows($result) > 0 ) {
	 
	echo "<table class='w-75 table table-hover m-auto'>
        <tr class='bg-dark text-info'>
            <th>ID</th>
            <th>User Name</th>
            <th>College Name</th>
            <th>Comments</th>
        </tr>";

	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["s_no"]."</td><td class='text-danger'>".$row["uname"]."</td><td>".$row["clg_name"]."</td><td>".$row["comments"]."</td></tr>";
	}

	echo "</table>";
} else {
	//echo "whoops! no result found";
}

@mysqli_close($conn);

?>
    


<!--  -------------------    Register form & Login Form --  Both student & Company  -----------------  -->

<?php
include 'student_company_reg_form.php';    
?>
    
    
<?php
include 'student_company_login_form.php';    
?>


    
    
    
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