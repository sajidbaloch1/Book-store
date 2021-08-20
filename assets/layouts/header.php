<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/header&footer.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- header start -->

    <header>
<div class="container-fluid cont">
    <div class="row">
        <div class="col-lg-8 col-8">
            <h1 class="text-light">Book<span class="fw-light text-danger">Store</span></h1>
        </div>
        <div class="col-lg-4 col-4">
        <a href="../../cart.php"><i class="fas fa-shopping-cart float-end mt-3 fs-4 text-warning"> <span class="total-item badge rounded-pill position-absolute top-0 start-100 translate-middle" style="background-color: #f4a56d;"></span></i></a>
        </div>
    </div>
</div>
    </header>
    <!-- header end -->
    <!-- nav start -->
    <div class="container my-3">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active text-dark fs-5" aria-current="page" href="../../index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../product.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../about-us.php">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../contact-us.php">Contact Us</a>
  </li>
  <?php if(empty($_SESSION['user'])){ ?>

  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../signup.php">Sign Up</a>
  </li>
    <?php }else{?>
    <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../logout.php">LOG OUT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../my-orders.php">MY ORDERS</a>
  </li>
  <?php }?>
</ul>
</div>
<!-- nav End -->

