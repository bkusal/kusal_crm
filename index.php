<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CRM System</a>
    </div>
</nav>

<div class="container">
    <div class="row align-items-start mb-2">
        <div class="col">
            <h4>Customer's Queries</h4>
            <p>Please post your queries</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject</label>
                    <input type="text" class="form-control" placeholder="Please enter subject" name="subject">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Product</label>
                    <select class="form-control" name="product_id" id="product_id">
                        <?php
                        include './include/connect.php';
                        $sql="select id, product_name from products";
                        $result = mysqli_query($con,$sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<option value=" . $row["id"] . ">" . $row["product_name"] . "</option>";
                            }
                          }
                        
                         ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Customer</label>
                    <select class="form-control" name="customer_id" id="customer_id">
                        <?php
                        include './include/connect.php';
                        $sql="select id, name from customers";
                        $result = mysqli_query($con,$sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<option value=" . $row["id"] . ">" . $row["name"] . "</option>";
                            }
                          }
                        
                         ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter your queries" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Screen shot</label>
                    <input type="file" id="photo" name="image" accept="image/*">
                </div>

                <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php
session_start(); // Start the session

include './include/connect.php';
if (isset($_POST['Submit'])) {
   
    $subject = $_POST['subject'];
    $product_id=$_POST['product_id'];
    $customer_id=$_POST['customer_id'];
    $image = $_POST['image'];
   
   
   
        $insertdata="insert into customer_queries(subject, product_id, customer_id, image) values('$subject','$product_id','$customer_id', '$image')" ;
        $result= mysqli_query($con,$insertdata);

        
        if($result){
            $_SESSION['success'] = "Data submitted" ;
            
        }else{
            $_SESSION['success'] = "Data not submitted" ;
           
        }
    }    


?>
