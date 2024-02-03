<?php
date_default_timezone_set('Africa/lagos');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "firetwo";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Connection failed: ");
//     // die("Connection failed: " . mysqli_connect_error());
// } else {
// 	echo "successfully connected! <br>";
// }
 


?>
