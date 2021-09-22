<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/header&footer.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        header {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(20, 20, 20, 0.9640231092436975) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
        }
    </style>
</head>

<body>
    <?php include "../assets/data/connection.php";
    $database  = new Database();
 $query = "SELECT B.id AS id, B.name AS `name`, B.image AS image,U.name AS U_name, B.price AS price, A.name AS 'A_name',C.name AS `C_name`, O.total_amount AS total_amount, OI.quantity AS quantity 
    FROM orders O JOIN order_item OI ON O.id = OI.order_id 
    JOIN books B ON OI.book_id = B.id
    JOIN category C ON B.category_id = C.id
    JOIN author A ON A.id = B.author_id
    JOIN users U ON O.user_id = U.id
    ";
    if (!empty($_GET['search']))
        $query = $query . " WHERE B.name LIKE '{$_GET['search']}%'";
    $books = $database->query($query);
    $database->close();
    ?>
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
    <a class="nav-link active text-dark fs-5" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="author.php">AUTHORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="category.php">CATEGORIES</a>
  </li>
  <?php if(empty($_SESSION['user'])){?>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../logout.php">LOGOUT</a>
  </li>
 <?php } ?>
</ul>
</div>
<!-- nav End -->
    <h1 class="text-center my-5">ADMIN</h1>
    <form action="" method="get">
        <div class="row">
        <div class="col-6">
        <input type="text" class="form-control bordered ms-5" name="search" value="<?php echo !empty($_GET['search']) ? $_GET['search'] : '' ?>">
        </div>
        <div class="col-4">
        <button class="btn btn-success rounded">search</button>
        </div>
        </div>
    </form>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered text-center table-hover">
                    <tr class="bg-success text-light">
                        <th>#</th>
                        <th>User Name</th>
                        <th>B-Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Total Amount</th>
                        <th>Total Qty</th>
                        <th>Price</th>
                        <th colspan="2">Action</th>
                        <!-- <th colspan="2">Action</th> -->
                    </tr>
                    <?php foreach ($books as $book) {
                    ?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td><?= $book['U_name']?></td>
                            <td><?= $book['name'] ?></td>
                            <td class="text-center"><img src="<?php echo $book['image'] ?>" height="30px" width="30px" alt=""></td>
                            <td><?= $book['C_name'] ?></td>
                            <td><?= $book['A_name'] ?></td>
                            <td><?= $book['total_amount']?></td>
                            <td><?= $book['quantity']?></td>
                            <td class="ps-4"><?= $book['price'] ?></td>
                            <td> <a href="update.php?id=<?= $book['id'] ?>"> <button class="btn btn-primary">Update</button> </a></td>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $book['id'] ?>">
                                <td><button class="btn btn-dark">Delete</button></td>
                            </form>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="create.php"> <button class="btn btn-success btn-lg  mb-5">Create</button></a>
    </div>
</body>

</html>