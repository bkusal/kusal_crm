<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<h1>Customer Relationship Management</h1>
<h3>Admin Login panel</h3>
    <form action="" method="POST" >
        <div class="input-field">
            <i class="fas fa-lock"></i>
            Email:<input type="email" name="email" id="email">
    </div>
        
        Password: <input type="password" name="password" id="password"><br>
       <input type="submit" name="Login" value="login">
        <p>Don't have an account?<a href="regisad.php">Register</a></p>
    </form>

<br><br><br>
    
</body>
</html>



<?php
session_start();
include '../include/connect.php';
if(isset($_POST['Login'])){
    if($_POST){
$_SESSION['email']= $_POST['email'];
$_SESSION['password']= $_POST['password'];


if($_SESSION['email'] && $_SESSION['password']){

    $query = ("select * from admin where email='".$_SESSION['email']."'");
    $final= mysqli_query($con,$query);
    $numrows= mysqli_num_rows($final);

    if($numrows != 0){
        while($row= mysqli_fetch_assoc($final)){
            $dbemail=$row['email'];
            $pass_check= password_verify($_SESSION['password'], $row['password']);
        }
        if($_SESSION['email']==$dbemail){
            if($_SESSION['password']==$pass_check){
                header("location: ../admin/indexa.php");
            }else{
                echo "Your password is incorrect!";
            }
        }else{
            echo "Your email is incorrect!";
        }
    }else{
        echo "This name is not registered!";
    }
}else{
    echo "You have to type name and password";
}
}else{
    echo "Access Denied";
    exit;
}
}
?> 