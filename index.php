<?php include "assets/layouts/header.php";
include "assets/data/connection.php";
$query = "SELECT B.id AS id, C.id AS C_id , B.name AS `name`, B.image AS image, B.price AS price, A.name AS 'A_name',C.name AS `C_name` FROM books B JOIN author A ON B.author_id = A.id JOIN category C ON B.category_id = C.id";
$database = new Database();
$books = $database->query($query);
$query = "SELECT * FROM category";
$category = $database->query($query);
$database->close();
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

<!-- slider End -->
<?php foreach ($category as $cat) {
  $count = 0; ?>
  <h1 class="text-center text-uppercase my-5"><?= $cat['name'] ?></h1>

  <div class="container my-5">
    <div class="row">

      <?php
      foreach ($books as $book) {
        if ($cat['id'] === $book['C_id']) {
          $count++;  ?>

          <div class="col-lg-3 col-md-3 col-sm-6 col-6 my-2 ps-5">
            <a href="Product1.php?id=<?php echo $book['id'] ?>" style="text-decoration: none; color: black ;">
              <img src="<?= $book['image'] ?>" class="card-img-top p-3" style="height: 300px; width: 200px;" alt="...">
              <!-- <div class="card-body"> -->
              <h6 class="card-title ms-3"><?= $book['name'] ?></h6>
              <p class="card-text ms-3">Category: <?= $cat['name'] ?>
                <br>Price:<span class="text-danger ms-5"><?= $book['price'] ?></span>
              </p>
            </a>
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
          </div>
      <?php
        }
        if ($count == 4) {
          $count = 0;
          break;
        }
      } ?>
    </div>
  </div>
<?php } ?>
</section>

<section class="section text-center">
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-lg-12 mt-5">
        <button class="btn btn-lg btn-dark mt-5">Testimonial</button>
        <p class="text-light mt-5">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, tempora rerum. Magnam quod natus atque iste aspernatur ratione culpa, placeat incidunt illum debitis consequatur asperiores accusamus dolorem explicabo consectetur similique cupiditate, nemo neque deserunt modi obcaecati iusto sed illo quasi. Minus unde tempora, repudiandae a dignissimos dolorum quae at dolore."</p>
      </div>
    </div>
  </div>
</section>



<section class="text-gray-400  body-font my-5">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author1.png">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
          <h2 class="text-dark font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
          <p class="text-gray-500">Armado Kilano</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author2.png">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
          <h2 class="text-dark font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
          <p class="text-gray-500">Ama Aipama</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-800 bg-gray-800 bg-opacity-10" src="assets/img/author3.png">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
          <h2 class="text-dark font-medium title-font tracking-wider text-sm">Ani Solahudin</h2>
          <p class="text-gray-500">CTO</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include "assets/layouts/footer.php" ?>