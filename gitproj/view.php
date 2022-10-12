<?php
 include "config.php";

 $q="select * from php ";
 $result = $conn->query($q);

?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
   <div class="container">
    <h2>Users</h2>
    <table class="table">
        <thead>
        <tr>
        <th>name</th>
        <th>city</th>
        </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows>0)
            {
                while($row =$result->fetch_assoc())
                {
                    ?>
                   <tr>
                   <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['city'];?></td>
                   
                    <td><a class="btn-btn-info" href="update.php?id= <?php echo $row['id'];?>"> edit </a>
                &nbsp;<a class="btn-btn-danger" href="delete.php?id =<?php echo $row['id'];?>"> Delete </a></td></tr>







                

                }
            }
        </tbody>


    </table>

   </div> 
</body>

</html>