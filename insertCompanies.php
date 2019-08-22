<?php 
include('connection.php');

$query = "INSERT INTO company_registration (firstname, surname, email, password, companyName, companyAddress, ph_no)

VALUES

('$_POST[firstname]','$_POST[surname]','$_POST[email]','$_POST[password]','$_POST[companyName]','$_POST[companyAddress]','$_POST[ph_no]')";

?>

<?php
    if(mysqli_query($conn, $query)){
        header('Location:c_loginForm.php');
    } else{
	    echo "Error: ".$query. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
