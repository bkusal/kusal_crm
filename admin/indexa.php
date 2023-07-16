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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- bootstrap CSS link -->
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
    <div class="">
        <h3 class="text-center">Manage Admin</h3>
    </div>
<div class="row">
    <div class="button text-center">
        <button><a href="../products/pdis.php" class="nav-link text-light bg-info my-1">Product</a></button>
        <button><a href="../customer/cdis.php" class="nav-link text-light bg-info my-1">Customer</a></button>
        <button><a href="../queries/qdis.php" class="nav-link text-light bg-info my-1">Queries</a></button>
        <button><a href="# " class="nav-link text-light bg-info my-1">Email</a></button>
        
</div>


</body>
</html>