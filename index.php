<?php 
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div>
		<form action="" method="POST">
		<label>First Name</label>	
		<input type="text" name="firstname" placeholder="enter first name"><br><br>
         <label>Last Name</label>    
		<input type="text" name="lastname" placeholder="enter last name"><br><br>
         <label>Age</label>    
		<input type="number" name="age" placeholder="enter age"><br><br>

		<input type="submit" name="save_btn" value="Save">

		<button><a href="view.php">View</a></button>
        </form>
     </div>


     <?php
     if(isset($_POST['save_btn']))
     {
     	$fname =$_POST['firstname'];
     	$lname =$_POST['lastname'];
     	$age =$_POST['age'];


     	$query ="INSERT INTO  student (firstname,lastname,age) values('$fname','$lname','$age')";

         $data =mysqli_query($con ,$query);
         //$data =mysqli_query($con,$query);

         if ($data) 
         {
         	?>
         	<script type="text/javascript">
         		alert("data save successfully");
         	</script>
         	echo "data save";
         }
         else
         {
         ?>
         	<script type="text/javascript">
         		alert("please try again");
         	</script>
         	<?php
         }

     }
     ?>

</body>
</html>