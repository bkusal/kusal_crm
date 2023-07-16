<?php
session_start(); 

if(!isset($_SESSION['email'])){
    header('location:../admin/loginad.php');
    exit;
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
     <a class="navbar-brand" href="indexa.php">CRM System</a>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
        </li>
        
    </ul>
  </div>
</nav>
<div class="container mt-3">
  <h2>Customer's Queries</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>subject</th>
        <th>product_id</th>
        <th>customer_id</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
     <?php
     include '../include/connect.php';
    $sql = "select * from customer_queries";

        $result = mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
     if($result){
        $id=$row['id'];
        $subject=$row['subject'];
        $product_id=$row['product_id'];
        $customer_id=$row['customer_id'];
        $image= $row['image'];
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$subject.'</td>
        <td>'.$product_id.'</td>
        <td>'.$customer_id.'</td>
        <td>'.$image.'</td>

        </tr>';
     }
    }
     }
     ?>
    </tbody>
  </table>
</div>

</body>
</html>
