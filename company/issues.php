<?php
    include '../connection.php';
    $qry = "select * from issues";
    $res = mysqli_query($conn, $qry);
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
    <link rel="stylesheet" href="../s_styles.css">
    <title>Crescent Internships</title>
    <link rel="icon" href="../img/iocn.jpg">
</head>
<body>
    <h3 class="text-center text-danger">Queries From Users <a href="c_profile.php" class="btn btn-success p-2">Home</a></h3>
    <?php

    if (mysqli_num_rows($res) > 0 ) {
	   echo "<table class='table w-75 mx-auto'>
                <tr class='bg-info'>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Issues</th>
                </tr>";

	   while($row = mysqli_fetch_assoc($res)){
		  echo "<tr><td>".$row["s_no"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["comments"]."</td></tr>";
	   }

	   echo "</table>";
    } else {
	   echo "whoops! no result found";
    }

?>
    

    
    

<!-- BODY ENDS -->
<script src="../../bootstrap/js/fontawesome-all.js"></script>
<script src="../../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../../bootstrap/js/popper.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/mdb.min.js"></script>

</body>
</html>