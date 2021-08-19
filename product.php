<?php include "assets/layouts/header.php" ?>
<?php include "assets/data/connection.php";

$query = "SELECT B.id AS id, C.id AS C_id , B.name AS `name`, B.image AS image, B.price AS price, A.name AS 'A_name',C.name AS `C_name` FROM books B JOIN author A ON B.author_id = A.id JOIN category C ON B.category_id = C.id";
$database = new Database();
if (!empty($_GET['category']) && !empty($_GET['author'])) {

  $query = $query . " WHERE B.category_id = {$_GET['category']} AND B.author_id = {$_GET['author']} ";
} else {
  if (isset($_GET['category']) && !empty($_GET['category']))
  $query = $query . " WHERE B.category_id = {$_GET['category']}";
  if (isset($_GET['author']) && !empty($_GET['author']))
    $query = $query . " WHERE B.author_id = {$_GET['author']}";
}
$books = $database->query($query);
$query = "SELECT * FROM category";
$category = $database->query($query);
$query = "SELECT * FROM author";
$author = $database->query($query);
?>
<!-- slider Start -->
<!-- 
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="/assets/img/slider3.jpg" style="width: 100%; height: 600px;" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="/assets/img/slider1.jpg" style="width: 100%; height: 600px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/img/slider2.jpg" style="width: 100%; height: 600px;" alt="...">
        </div>
    </div>
</div> -->
<!-- slider end -->
<h1 class="text-center my-5">PRODUCTS</h1>

<div class="container-fluid my-5">
  <form action="" method="get" id="filter_form">
    <div class="row">
      <div class="col-lg-6 mt-5">
        <select class="form-select" id="category" name="category" aria-label="form-select-lg example">
          <option value="">Open this select Book Categoty</option>
          <?php foreach ($category as $cat) { ?>
            <option value="<?= $cat['id'] ?>" <?php echo isset($_GET['category']) && $_GET['category'] == $cat['id'] ? 'selected' : '' ?>><?= $cat['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-lg-6 mt-5">
        <select class="form-select" id="author" name="author" aria-label="form-select-lg example">
          <option value="">Open this select Author</option>
          <?php foreach ($author as $aut) { ?>
            <option value="<?= $aut['id'] ?>" <?php echo isset($_GET['author']) && $_GET['author'] == $aut['id'] ? 'selected' : '' ?>><?= $aut['name'] ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </form>
</div>
<div class="container my-5">
  <div class="row">
    
    <?php
    foreach ($books as $book) { ?>

<div class="col-lg-3 col-sm-4 col-6 my-2 ps-5">
        <a href="Product1.php?id=<?php echo $book['id']?>" style="text-decoration: none; color: black ;">
        <img src="<?= $book['image'] ?>" class="card-img-top p-3" style="height: 300px; width: 200px;" alt="...">
        <!-- <div class="card-body"> -->
        <h6 class="card-title ms-3"><?= $book['name'] ?></h6>
        <p class="card-text ms-3">Category: <?= $book['C_name'] ?>
          <br>Price:<span class="text-danger ms-5"><?= $book['price'] ?></span>
        </p>
        <form action="cart-post.php" method="POST">
                <input type="number" name="quantity" class="text-center input-outline-dark form-control-sm" value="1">
                <button class="btn btn-primary ms-3">ADD TO CART</button>
                <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
                <input type="hidden" name="image" value="<?php echo $book['image'] ?>">
                <input type="hidden" name="name" value="<?php echo $book['name'] ?>">
                <input type="hidden" name="category" value="<?php echo $book['C_name'] ?>">
                <input type="hidden" name="author" value="<?php echo $book['A_name'] ?>">
                <input type="hidden" name="price" value="<?php echo $book['price'] ?>">
              </form>
        <!-- </div> -->
      </a> 
      </div>
    <?php

    } ?>
  </div>
</div>

<script>
  $('#category').change(function() {
    $('#filter_form').submit();
  })
  $('#author').change(function() {
    $('#filter_form').submit();
  })
</script>
<?php include "assets/layouts/footer.php" ?>