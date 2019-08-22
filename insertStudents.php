<?php 
include('connection.php');

$query = "INSERT INTO student_registration (firstname, surname, ph_no, email, password)

VALUES

('$_POST[firstname]','$_POST[surname]','$_POST[ph_no]','$_POST[email]','$_POST[password]')";

?>

<?php
    if(mysqli_query($conn, $query)){
	  // echo '<h6 class="text-danger animated hinge">new record in data base</h6>';
        header('Location:s_loginForm.php');
    } else{
	    echo "Error: ".$query. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
