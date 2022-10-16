<?php

$host ="localhost";
$user ="root";
$pass="root";
$db="phpcrud";

$con= mysqli_connect($host,$user,$pass,$db);

if($con )
{
	echo "";
}
else
{
	echo "not connected";
}

?>