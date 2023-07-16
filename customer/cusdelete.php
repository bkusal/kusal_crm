<?php
session_start();
if(!isset($_SESSION['email'])){
 echo "Access denied!";
}else{
include '../include/connect.php';

if(isset($_GET['cusdeleteid'])){
    $id=$_GET['cusdeleteid'];

    $sql="delete from customers where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert("data deleted");
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("data not deleted");
        </script>
          header('location:cusdisplay.php');
        <?php
      
    }
}
}
?> 