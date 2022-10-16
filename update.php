<!-- <?php
include "connection.php";

$id=$_GET['id'];

$select ="select * from student where id='$id'";
$data=mysqli_query($con,$select);
$row =mysqli_fetch_array($data);
?>

	<div>
		<form action="" method="POST">
			<input value="<?php echo $row ['firstname']?>" type="text" name="firstname" placeholder="enter first name" ><br><br>
            <input value="<?php echo $row ['lastname']?>" type="text" name="lastname" placeholder="enter last name"><br><br>
             
		     <input value="<?php echo $row ['age']?>" type="number" name="age" placeholder="enter age"><br><br>

		     <input type="submit" name="update_btn" value="Update">

		<button><a href="view.php">Back</a></button>
        </form>
     </div>

 -->
 <?php
 include "connection.php";
 $id=$_GET['id'];
 $select ="select * from student where id ='$id'";
 $data =mysqli_query($con,$select);
 $row=mysqli_fetch_array($data);
?>

	<div>
		<form action="" method="POST">
		<label>First Name</label>
		<input value="<?php echo $row['firstname']?>" type="text" name="firstname" placeholder="enter first name"></br></br>
        <label>Last Name</label>     
		<input value= "<?php echo $row['lastname']?>" type="text" name="lastname" placeholder="enter last name"></br></br>
          <label>Age</label>   
		<input value="<?php echo $row['age']?>" type="number" name="age" placeholder="enter age"></br></br>

		<input type="submit" name="update_btn" value="Update">

		<button><a href="view.php">Back</a></button>
        </form>
     </div>

          <?php
     if(isset($_POST['update_btn']))
     {
     	$fname =$_POST['firstname'];
     	$lname =$_POST['lastname'];
     	$age =$_POST['age'];


     	$update ="update  student set firstname='$fname',lastname='$lname',age='$age' where id ='$id'";

         $data =mysqli_query($con ,$update);
         //$data =mysqli_query($con,$query);

         if ($data) 
         {
         	?>
         	<script type="text/javascript">
         		alert("data updated successfully");
         		window.open("http://localhost:4433/phpproject/view.php","_self");
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
