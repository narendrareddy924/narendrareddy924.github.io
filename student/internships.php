<?php 

include('../connection.php');
$query = "SELECT * FROM company_registration order by s_no desc";
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
        
        if(isset($_POST['apply'])){
            
        }
     
   ?>


    </div>

<div class="container"><br>
        
<!--  -------------------    Search   -----------------  -->
<p class="text-center text-danger animated shake infinite slower">Search by <i class="text-secondary">Company Name, Company Address, Internship Field </i>(ie., web development, Java Development)</p>
<div class="container">
   <div class="form-group">
    <div class="input-group">
     <i class="fab fa-searchengin fa-2x"></i>
     <input type="text" name="search_text" id="search_text" placeholder="Search Here..." class="form-control mb-1">
    </div>
   </div>
  </div>
    <!------------------------------------------>
    
<div class="row">
    <div class="col-md-3 mt-3">
        <nav class="sidebar">
            <ul>
                <li><a href="internships.php" class="active">Internships</a></li>
                <li><a href="s_profile1.php">Profile</a></li>
                <li><a href="s_applications.php">Applications</a></li>
                <li><a href="s_changes.php">Change Details</a></li>
                <li><a href="s_change_password.php">Change Password</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9"><br>
        <div id="result"></div> <!--
        <table class="table table-hover text-center">
            <thead class="text-success">
                <tr>
                    <th><h6>Company Name</h6></th>
                    <th><h6>Internship Field</h6></th>
                    <th><h6>Avail. Internships</h6></th>
                    <th><h6>Company Address</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody class="text-primary font-italic">
                <?php /*
                    if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                      echo "<tr><td>".$row["companyName"]."</td><td>".$row["internship_field"]."</td><td>".$row["no_of_internships"]."</td><td>".$row["companyAddress"]."</td><td>"."<a class='btn btn-info p-2' href='../company/c_applications.php?id=".$row["s_no"]."'>Apply</a>"."</td></tr>";
                        }
                    }else {
	                   echo "<h2 style='color:green;margin-left:10px'>whoops! no result found</h2>";
                    }

                    mysqli_close($conn); */
                /*
                if (mysqli_num_rows($result) > 0 ) {
                        while($row = mysqli_fetch_assoc($result)){
		                      echo "<tr><td>".$row["companyName"]."</td><td>".$row["internship_field"]."</td><td>".$row["no_of_internships"]."</td><td>".$row["companyAddress"]."</td><td>"."<form method='post'><input class='btn btn-primary p-2' type='submit' name='apply' value='Apply'></form>"."</td></tr>";
                        }
                    }else {
	                   echo "<h2 style='color:green;margin-left:10px'>whoops! no result found</h2>";
                    }

                    mysqli_close($conn);
*/
                ?>
            </tbody>
        </table>-->
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
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"s_fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});    
</script>
</body>
</html>