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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    $query = "SELECT * FROM category";
    if (!empty($_GET['search']))
        $query = $query . " WHERE name LIKE '{$_GET['search']}%'";
    $category = $database->query($query);

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $query = "SELECT * FROM category WHERE id = {$_GET['id']}";
        $result = $database->query($query);
    }

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

        </ul>
    </div>
    <!-- nav End -->
    <h1 class="text-center">CATEGORIES</h1>
    <form action="" method="GET">
        <div class="row mt-5">
            <div class="col-6">
                <input type="text" name="search" class="form-control ms-5" value="<?php echo !empty($_GET['search']) ? $_GET['search'] : '' ?>">
            </div>
            <div class="col-4">
                <button class="btn btn-success">Search</button>
            </div>
        </div>
    </form>
    <button onclick="create()" class="btn btn-success mt-5">Create</button>
    <div class="container my-5">
        <div class="row">
            <table class="table table-bordered text-center table-hover">
            <tr id="create" style="display: none;">
                        <form action="cat-crepos.php" method="POST">
                            <td></td>
                            <td><input type="text" name="name" class="form-control"></td>
                            <td><input type="submit" class="btn btn-primary" value="Submit"></td>
                        </form>
                    </tr>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php foreach ($category as $cat) {
                ?>
                    <tr>
                        <td><?php echo $cat['id'] ?></td>
                        <td><?php echo $cat['name'] ?></td>
                        <td>
                            <form action="" method="GET">
                                <input type="hidden" name="id" value="<?= $cat['id'] ?>">
                                <button class="btn btn-primary">Update</button>
                            </form>
                        </td>
                        <form action="del-cat.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
                            <td><button class="btn btn-dark">Delete</button></td>
                        </form>
                    </tr>
                <?php } ?>
               

                </table>
            
        </div>
    </div>
    <?php if (isset($_GET['id']) && !empty($_GET['id'])) {
    ?>
        <script>
            $(document).ready(function() {
                $("#exampleModal").modal("show")
            })
        </script>
    <?php } ?>
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="upd-catpos.php" method="POST">
                        <?php foreach ($result as $res) : ?>
                            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                            <input type="text" name="name" class="form-control" placeholder="enter your name" value="<?= $res['name'] ?>">
                        <?php endforeach ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function create() {
            document.getElementById('create').style.display = '';
        }
    </script>
</body>

</html>