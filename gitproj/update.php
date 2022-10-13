<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['firstname'];

        $user_id = $_POST['id'];

        $dob= $_POST['dob'];

        $designation = $_POST['designation'];

         $sql = "UPDATE `users` SET `name`='$name',`dob`='$dob',`designation`='$designation' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_POST['id'])) {

    $user_id = $_POST['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $dob = $row['dob'];

            $designation = $row['designation'];

             $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="POST">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            DOB:<br>

            <input type="text" name="dob" value="<?php echo $dob; ?>">

            <br>

            Designation:<br>

            <input type="text" name="designation" value="<?php echo $designation; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 