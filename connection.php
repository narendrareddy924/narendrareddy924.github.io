<?php
$server    = "localhost";
$username  = "root";
$password  = "";
$db        = "c_internship"; 

//create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

//check connection
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error() );
}

//echo "Connected Successfully";

?>