<?php
 include "config.php";
 if(isset($_POST['submit']))
 {

    $Name =$_POST['name'];
    $City =$_POST['city'];
 }

 $q="insert into 'php' ('name','city') values('$Name','$City'))";
 $result = $conn->query($q);
 if($result == true)
 {
    echo "inserted value";
 }else {
    echo "Error: " . $q . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
<html >
    <body>
        <h2>Form</h2>
<form action ="" method="POST">
    <fieldset>
        <legend> personal info</legend>
  <label >First name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="lname">City:</label><br>
  <input type="text" id="city" name="city">
    </fieldset>
</form>
</body>
</html>
