<?php
require "config.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM stdtable WHERE id = $id ";
    $result=mysqli_query($connection,$query);
    if($result==true){
        $data=mysqli_fetch_assoc($result);
        print_r($result);
        $id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $age=$data['age'];
        $batch=$data['batch'];
    }

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $batch=$_POST['batch'];

        $query="UPDATE my_db SET name='$name',email='$email',age='$age',batch='$batch' ";
        $result=mysqli_query($connection,$query);
        if($result==true){
           echo  "<script> alert('Data Updated Successfully')</script>";
        }else{
            echo  "<script> alert('Something Went Wrong')</script>";

        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="id"  value="<?php echo $id ?>"    hidden placeholder="Name" required></br></br>
    <input type="text" name="name" value="<?php echo $name?>"   placeholder="Name" required></br></br>
    <input type="email" name="email" value="<?php echo $email ?>"   placeholder="Email" required></br></br>
    <input type="number" name="age" value="<?php echo $age ?>" placeholder="Age" required></br></br>
    <input type="text" name="batch" value="<?php echo $batch?>" placeholder="Batch" required></br></br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>