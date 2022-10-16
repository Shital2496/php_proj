<?php
include "connection.php";
$id =$_GET['id'];
$query="delete from student where id='$id'";
$data=mysqli_query($con,$query);
if ($data) {
	?>
	<script type="text/javascript">
		alert("Data deleted")
		window.open("http://localhost:4433/phpproject/view.php","_self");
	</script>
	<?php
}
else
{
?>
<script type="text/javascript">
	alert("please try again")
</script>
<?php
}
?>