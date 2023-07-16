<?php
include '../include/connect.php';

if(isset($_GET['pdeleteid'])){
    $id=$_GET['pdeleteid'];

    $sql="delete from products where id=$id";
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
          header('location:pdisplay.php');
        <?php
      
    }
}