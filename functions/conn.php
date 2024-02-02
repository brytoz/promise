<?php
date_default_timezone_set('Africa/lagos');
$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "firetwo";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	echo "successfully connected! <br>";
}
 


?>
