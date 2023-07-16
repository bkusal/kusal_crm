
<?php
session_start();
if(!isset($_SESSION['email'])){
 echo "Access denied!";
}else{
        include '../include/connect.php';
       

        $id=$_GET['customerupid'];
        $sql="select * from customers where id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['name'];
        $description=$row['description'];
        $email= $row['email'];
        $phone= $row['phone'];

                if(isset($_POST['Hand'])){
                    $name = $_POST['name'];
                    $description= $_POST['description'];
                    $email= $_POST['email'];
                    $phone= $_POST['phone'];
                    
                    $uquer= "update customers set id='$id', name='$name', description='$description', email='$email', phone='$phone' where id=$id";
                    
                    $result = mysqli_query($con,$uquer);

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
}
?>


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
    <form action="" method="POST">
        <div>
            <label for="name">Name</label>
             <input type="text" id="name" name="name" value=<?php echo $name; ?>>
        </div>
        <div>
            <label for="eamil">Email</label>
            <input type="email" id="email" name="email" value=<?php echo $email; ?>>
        </div>
        <div>
            <label for="tel">Phone</label>
            <input type="phone" id="phone" name="phone" value=<?php echo $phone; ?>>
        </div>
        <div>
            <label for="textarea">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="About Yourself" value=<?php echo $description; ?>></textarea>

        </div>
       
        <input type="submit" id="submit" name="Hand">

        
    </form>
</body>
</html>


