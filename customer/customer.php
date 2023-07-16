<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>


    <h1>Customer's Detail</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="phone" id="phone" name="phone">
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself"></textarea>

        </div>
       
        <input type="submit" id="submit" name="Hand">

        
    </form>
</body>
</html>


<?php

include '../include/connect.php';
if(isset($_POST['Hand'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $insertquery="insert into customers(name,description,email,phone) values('$name','$description','$email','$phone')" ;

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