<?php
    require "data.php";
    $query="SELECT * FROM `stdtable` ";
    $result=mysqli_query($connection,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
           <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Batch</th>
           </tr>
        </thead>
        <tbody>
            <?php 
                foreach($result as $record){

                    ?>
            <tr>
                <td><?php echo $record['id'] ;?></td>
                <td><?php echo $record['name'] ;?></td>
                <td><?php echo $record['age'] ;?></td>
                <td><?php echo $record['email'] ;?></td>
                <td><?php echo $record['batch'] ;?></td>
            </tr>
        <?php
        }
        ?>    
        </tbody>
    </table>
</body>
</html>