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
    <div class="container">
        <h1>Books</h1>
    <button class="btn btn-success float-end mt-5">Create</button>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
        <table class="table table-bordered text-center table-hover">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Category</th>
                <th>Author</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
            <td>1</td>
            <td>Book1</td>
            <td><img src="" alt="not found"></td>
            <td>Crime</td>
            <td>Sajid</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <td>2</td>
            <td>Book2</td>
            <td><img src="" alt="not found"></td>
            <td>Buiseness</td>
            <td>Shahzad</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <td>3</td>
            <td>Book3</td>
            <td><img src="" alt="not found"></td>
            <td>Science</td>
            <td>Ahmed</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <td>4</td>
            <td>Book4</td>
            <td><img src="" alt="not found"></td>
            <td>Education</td>
            <td>Umair</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <td>5</td>
            <td>Book5</td>
            <td><img src="" alt="not found"></td>
            <td>Helthy</td>
            <td>Rehman</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
            <td>6</td>
            <td>Book6</td>
            <td><img src="" alt="not found"></td>
            <td>History</td>
            <td>Salman</td>
            <td><button class="btn btn-info">Edit</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
            </tr>
        </table>
            </div>
        </div>
    </div>
    <!-- header end -->
    <!-- nav start -->
    <!-- <div class="container my-3">
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
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark fs-5" href="../../signup.php">Sign Up</a>
  </li>
</ul>
</div> -->
    <!-- nav End -->

</body>

</html>