<?php
require_once ("constants.php");
// Create connection
$conn = new mysqli ($servername, $username, $password , $db);// ,$table);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else{
	//echo "Connected successfully";
}


?>