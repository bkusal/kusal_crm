<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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


    <h1>Product</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="product_name">Name</label>
             <input type="text" id="product_name" name="product_name">
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself"></textarea>

        </div>

        
       
        <input type="submit" id="submit" name="ok">

        
    </form><br><br>
    <a href="productdis.php">Product List</a>
</body>
</html>


<?php

include '../include/connect.php';
if(isset($_POST['ok'])){
    $name = $_POST['product_name'];
    $description= $_POST['description'];
    

    $insertquery="insert into products(product_name,description) values('$name','$description')" ;

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