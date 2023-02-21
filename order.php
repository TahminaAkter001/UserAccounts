<?php
include("connection.php");
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql ="SELECT * FROM products where id = '$id'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);

  $p_name        = $row['product_name'];
  $p_price       = $row['product_price'];
  $del_charge    = 50;
  $total_price   = $p_price + $del_charge;
  $p_image       = $row['product_image'];
}
else{
  echo "no product found!";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Order</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h4>Rayhan Electronics</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">iPhone</a></li>
            <li><a class="dropdown-item" href="#">Xiaomi</a></li>
            <li><a class="dropdown-item" href="#">Symphony</a></li>
            <li><a class="dropdown-item" href="#">Vivo</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 mb-5">
      <h2 class="text-center p-2 text-success">Fill the details to complete your order</h2>
      <h3>Product Details : </h3>
      <table class="table-bordered table" width="500px">
        <tr>
          <th>Product Name :</th>
          <td><?= $p_name; ?></td>
          <td rowspan="4" class="text-center"><img src="<?= $p_image; ?>" width="230" alt=""></td>
        </tr>
        <tr>
          <th>Product Price :</th>
          <td><?= number_format($p_price); ?> /-</td>
        </tr>
        <tr>
          <th>Product Charge :</th>
          <td><?= number_format($del_charge); ?> /-</td>
        </tr>
        <tr>
          <th>Total Price :</th>
          <td><?= number_format($total_price); ?> /-</td>
        </tr>
      </table>
      <h4>Enter your details :</h4>
      <form action="pay.php" method="post" accept-charset="utf-8">
        <input type="hidden" name="product_name" value="<?= $p_name; ?>">
        <input type="hidden" name="product_price" value="<?= $p_price; ?>">
        <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter your Name" required><br>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter your Email" required><br>
        </div>
        <div class="form-group">
          <input type="tel" name="phone" class="form-control" placeholder="Enter your Phone" required><br>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-danger btn-lg" value="Click to pay : <?= number_format($total_price) ;?> /- ">
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>