
<?php

        include '../include/connect.php';

        $id=$_GET['pupdateid'];
        $sql="select * from products where id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['product_name'];
        $description=$row['description'];

                if(isset($_POST['Hand'])){
                    $name = $_POST['product_name'];
                    $description= $_POST['description'];
                    
                    $uquery = "update products set id=$id, product_name='$name', description='$description' where id=$id";

                    $result = mysqli_query($con,$uquery);

                    if($result){
                        
                        ?>
                        <script>
                            alert("data updated");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("data not updated");
                        </script>
                        <?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>


    <h1>Product</h1>
    <form action="" method="POST" novalidate>
        <div>
            <label for="product_name">Name</label>
             <input type="text" id="product_name" name="product_name" value=<?php echo $name; ?>>
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself" value=<?php echo $description;?>></textarea>

        </div>

        
       
        <input type="submit" id="submit" name="ok">

        
    </form><br><br>
    <a href="productdis.php">Product List</a>
</body>
</html>




