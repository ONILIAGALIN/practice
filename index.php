<?php 
    $con = mysqli_connect('127.0.0.1', 'root', '', 'ihw_practice');
    $query = mysqli_query($con, "SELECT * FROM employees");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
        background-image: linear-gradient( #323232,white);
         background-repeat:no-repeat;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align="center">
    <tr>
        <th bgcolor="green">firstname</th>
        <th  bgcolor="green">lastname</th>
        <th  bgcolor="green">birthdate</th>
        <th  bgcolor="green">salary</th>
        <th  bgcolor="green">manager_id</th>
    </tr>

    <?php

        while($fetch = mysqli_fetch_assoc($query))
        {
    ?>
        <tr>
            <td><?php echo $fetch['firstname']; ?></td>
            <td><?php echo $fetch['lastname']; ?></td>
            <td><?=$fetch['birthdate']?></td>
            <td><?=$fetch['salary']?></td>
            <td><?=$fetch['manager_id']?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>