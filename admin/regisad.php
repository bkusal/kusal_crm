<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Admin Registration</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name" required> 
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="phone" id="phone" name="phone" required>
        </div>
        <div>
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
       
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

        </div>
       
        <input type="submit" name="up">

        
        
    </form>
    <p>Have an account?<a href="loginad.php">Login</a></p>
</body>
</html>

<?php

include('../include/connect.php');

if(isset($_POST['up'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password']; 
    $hash_password=password_hash($password,PASSWORD_BCRYPT);
    
    $errors= array();
    if(empty($name) OR empty($phone) OR empty($email) OR empty($password)  ){
        array_push($errors,"All fields are required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    if (strlen($password)<8){
        array_push($errors,"Passwords must be at leasr 8 characters long");
    }
    $sql = "select * from admin where email = '$email';";
    $final= mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($final);
    if($rowcount>0){
        array_push($errors,"Email already exists!");
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
            
    
    

    $insertquery= "insert into admin(name,phone,email,password) values('$name','$phone','$email','$hash_password')";

    $result = mysqli_query($con,$insertquery);

    if($result){
        ?>
        <script>
            alert("data inserted");
        </script> 
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
        
    } 
}
?>