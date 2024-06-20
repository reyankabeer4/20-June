<?php 


require "data.php";


    if(isset($_POST['submit'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $age=$_POST['Age'];
        $batch=$_POST['Batch'];

        $query="INSERT INTO stdtable (name,email,age,batch)  VALUES ('$name','$email','$age','$batch')";

        $result=mysqli_query($connection,$query);

        if($result){
            echo "<script>alert('Insert Data Successfully')</script>";
        }else{
            echo "<script>alert('Error')</script>";
        }


    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        h1 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            letter-spacing: 5px;
            text-align: center;
            transition: 1s;
            cursor: pointer;
            color:#00ada4
        }

        h1:hover {
            transform: translateY(10px);
            color: #ad0000;
        }
    </style> -->
</head>
<body>

<form action="" method="post">
    <input type="text" name="Name" placeholder="Name" required><br><br>
    <input type="email" name="Email" placeholder="Email" required><br><br>
    <input type="number" name="Age" placeholder="Age" required><br><br>
    <input type="text" name="Batch" placeholder="Batch" required><br><br>
    <input type="submit" name="submit">
</form>
    <!-- <h1> Login Successful !</h1> -->
    <!-- <h1 style="text-align:center;font-family:segio-UI">PHP FORM</h1>
    <form action="data.php" method="post">
        <input style="color:navy" name="name" type="text" placeholder="Enter Your Name">
        <br><br> <input style="color:navy" name="email" type="email" placeholder="Email or Phone number">
        <br><br> <input style="color:navy" name="password" type="password" placeholder="Password">
        <br><br> <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="Male">
        <br><br><label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        <br> <br><b>City</b>
        <select name="city" id="">
            <option value="Karachi">Karachi</option>
            <option value="Lahore">Lahore</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Quetta">Quetta</option>
        </select>

        <br><br><b>Languages</b><br>

        <label for="english" >English</label>
        <input type="checkbox" value="English" name="lang[]" id="english">
        <label for="urdu">Urdu</label>
        <input type="checkbox" name="lang[]"  value="Urdu" id="urdu">
        <label for="arabic">Arabic</label>
        <input type="checkbox" name="lang[]"  value="Arabic" id="arabic"> -->




    <!-- <select name="lang">
            <option value="Arabic">Arabic</option>
            <option value="English">English</option>
            <option value="Urdu">Urdu</option>
            <option value="Persian">Persian</option>
        </select>  -->
    <!-- <br><br><input
            style="background-color:teal ;color:#fff;padding:8px;cursor:pointer;border-radius:5px;border:none;outline:none"
            name="submission" value="Submit" type="submit">

    </form> -->
</body>

</html>