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
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>BATCH</th>
            <th>BUTTON</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "config.php";
            $query="SELECT * FROM stdtable";
            $result=mysqli_query($connection,$query);
            $rows=mysqli_num_rows($result);
            if($rows>0){
                while($data=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['name']."</td>";
                    echo "<td>".$data['age']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['batch']."</td>";
                    echo "<td><a href='update.php?id=".$data['id']."'><button>EDIT</button></a></td>";
                    echo "<td><a'><button>DELETE</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>