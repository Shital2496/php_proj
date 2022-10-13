<?php
include_once"config.php";

if (isset($_POST['submit'])) 
  {
    $user_id = $_POST['id'];

    $name = $_POST['name'];

    $dob = $_POST['dob'];

    $designation = $_POST['designation'];

    $sql = "INSERT INTO `users`('id',`name`, `dob`, `designation`) VALUES ('$user_id','$name','$dob','$designation')";

	//$result=mysqli_query($conn, $sql);
   // $result = $conn->query($sql);

    if ($result == True) {
		

    echo "New record created successfully.";
	
    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

else{

  echo "Error:". $sql . "<br>". $conn->error;

} 
?>
<html>
<head>
	<title>crud php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Dob</label>
			<input type="date" name="dob" value="">
		</div>
        <div class="input-group">
			<label>Designation</label>
			<input type="text" name="designation" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="submit" >Submit</button>
		</div>
	</form>
</body>
</html>