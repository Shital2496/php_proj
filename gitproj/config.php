<?php
ini_set("display errors","1");
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="phpcrud";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  echo "hi";die;
  die("Connection failed: " );
}
else {
  echo "Connected successfully";
  
}


?>