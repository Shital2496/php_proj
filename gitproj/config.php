<!-- <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="phpcrud";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 
  die("Connection failed: " );
}
else {
  echo "Connected successfully";
  
}
?> -->





<?php
$con=mysqli_connect("localhost", "root", "", "phpcrud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
else{
  echo "connection successful";
}
?>