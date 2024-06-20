<?php
// $name = "";
// $email = "";
// $password = "";
// $phone = "";

// $nameErr = "";
// $emailErr = "";
// $passwordErr = "";
// $phoneErr = "";

// if (isset($_POST['submit'])) {

//     if (empty($_POST['name'])) {
//         $nameErr = "Name is required";
//     } else {
//         $name = $_POST['name'];
//     }
//     if (empty($_POST['email'])) {
//         $emailErr = "Email is required";
//     } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Enter Valid Email Address";
//     } else {
//         $email = $_POST['email'];
//     }
//     if (empty($_POST['password'])) {
//         $passwordErr = "Password is required";
//     } else if (strlen($_POST['password']) < 6) {
//         $passwordErr = "Password should be greater than 6";
//     } else {
//         $password = $_POST['password'];
//     }
//     if (empty($_POST['phone'])) {
//         $phoneErr = "Phone Number is required";
//     } 
//     else if(!preg_match("sdfa", $_POST["phone"])) {
//         $passwordErr="P";
//     } else {
//         $phone = $_POST['phone'];
//     }

//     if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($phoneErr)) {
//         header('location:form.php');
//     }
// }
?>

<?php
    $connection=mysqli_connect("localhost","root","","my_db")
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <style>
    span {
        color: red;
    }

    #submitBtn {
        color: white;
        background-color: teal;
        padding: 5px 10px;
        letter-spacing: 3px;
        border: none;
        border-radius: 6px;
        transition: 1s;
    }

    #submitBtn:hover {
        background-color: darkcyan;
    }

    h2 {
        font-family: 'Trebuchet MS';
        letter-spacing: 5px;
        text-align: center;
        transition: 1s;
        cursor: pointer;
        color: firebrick
    }

    form {
        padding: 3pc;
    }
</style> -->

<body>
    <!-- <form method="post">
        <h2>Login Form</h2>
        <input type="text" placeholder="Name" name="name"><span><?php echo $nameErr; ?></span><br><br>
        <input type="email" placeholder="Email" name="email" ><span><?php echo $emailErr; ?></span><br><br>
        <input type="password" placeholder="Password" name="password"><span><?php echo $passwordErr; ?></span><br><br>
        <input type="text" placeholder="Phone Number" name="phone"><span><?php echo $phoneErr; ?></span><br><br>
        <input type="submit" name="submit" id="submitBtn">

    </form> -->



    <!-- // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";
    
    // if (isset($_POST["submission"])) {
    //     $name = $_POST["name"];
    //     $email = $_POST["email"];
    //     $password= $_POST["password"];
    //     $gender = $_POST["gender"];
    //     $city = $_POST["city"];
    //     $lang = $_POST["lang"];
    //     echo "<h1>Form Data</h1>
    //     <br>  Name : $name <br>
    //     <br>  Email : $email <br>
    //     <br>  password : $password <br>
    //     <br>  Gender : $gender <br>
    //     <br>  City : $city  <br>";
    //     echo "<br>Languages :</br> ";
    //     foreach($lang as $a){
    //         echo "<li> $a</li>";
    //     }

    // } else {
    //     echo "<h1>No data Found</h1>";
    // }
  -->
</body>

</html>