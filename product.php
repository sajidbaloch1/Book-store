<?php include "assets/layouts/header.php"?>
<?php include "assets/data/connection.php";

$query = "SELECT B.id AS id, C.id AS C_id , B.name AS `name`, B.image AS image, B.price AS price, A.name AS 'A_name',C.name AS `C_name` FROM books B JOIN author A ON B.author_id = A.id JOIN category C ON B.category_id = C.id";
$database = new Database();
$books = $database->query($query);
$query = "SELECT * FROM category";
$category = $database->query($query);
$query = "SELECT * FROM author";
$author = $database->query($query);
?>
<!-- slider Start -->

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
</div>

<h1 class="text-center my-5">PRODUCTS</h1>
<div class="container-fluid my-5">
    <div class="row">
       <form action="" method="get" id="filter_form">
          <div  class="col-lg-6 mt-5">
        <select class="form-select" id="category" name="category" aria-label="form-select-lg example">
          <option>Open this select Book Categoty</option>
          <?php foreach($category as $cat){?>
  <option <?php $_GET['category'] == $cat['id'] ? 'Selected' : '' ?> value="<?= $cat['id']?>"><?= $cat['name']?></option>
  <?php }?>
</select>
        </div>
        <div  class="col-lg-6 mt-5">
        <select class="form-select" id="author" name="author" aria-label="form-select-lg example">
          <option>Open this select Author</option>
          <?php foreach($author as $aut){?>
  <option value="<?= $aut['id']?>"><?= $aut['name']?></option>
    <?php }?>
</select>
        </div>
        </form>
    </div>
</div>
<div class="container my-5">
    <div class="row">

      <?php
      foreach ($books as $book) { ?>

          <div class="col-lg-3 my-2 ps-5">
            <img src="<?= $book['image'] ?>" class="card-img-top p-3" style="height: 300px; width: 200px;" alt="...">
            <!-- <div class="card-body"> -->
            <h6 class="card-title ms-3"><?= $book['name'] ?></h6>
            <p class="card-text ms-3">Category: <?= $book['C_name']?>
              <br>Price:<span class="text-danger ms-5"><?= $book['price'] ?></span>
            </p>
            <button class="btn btn-primary ms-3">ADD TO CART</button>
            <!-- </div> -->
          </div>
      <?php
        
      } ?>
    </div>
  </div>

  <script>
    $('#category').change(function(){
      $('#filter_form').submit();
    })
    $('#author').change(function(){
      $('#filter_form').submit();
    })
  </script>
<?php include "assets/layouts/footer.php" ?>