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
    $datbase = new Database();

    $query = "SELECT * FROM author";
    $authors = $datbase->query($query);
    $query = "SELECT * FROM  category";
    $category = $datbase->query($query);
$datbase->close()
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
    <h1 class="text-center my-5">Create Books</h1>
        <div class="container-fluid cont">
            <div class="row">
                <div class="col-lg-12">
                <form action="create-post.php" class="border p-5 text-dark" method="post">
<div class="row">
    <div class="col-6">
     Name:   <input type="text" name="name" class="form-control bordered">
    </div>
    <div class="col-6">
        Image:
        <input type="text" name="image" class="form-control bordered">
    </div>
</div>
<div class="row my-5">
    <div class="col-6">
        Select Category:
        <select name="category" id="" class="form-control">
            <option value="">----------select--------- category</option>
<?php foreach($category as $category){
    ?>
        <option value="<?= $category['id']?>"><?= $category['name']?></option>
        <?php }?>
        </select>
    </div>
    <div class="col-6">
        Select Author:
<select name="author" class="form-control">
    <option value="">----------select--------- author</option>
    <?php foreach($authors as $author){

    ?>
    <option value="<?= $author['id']?>"><?= $author['name']?></option>
    <?php }?>
</select>
    </div>
</div>
<div class="row">
    <div class="col-6">
        Price:
        <input type="text" name="price" class="form-control bordered">
    </div>
    <div class="col-6">
        Input Some Text:
        <textarea name="description" class="form-control" cols="4" rows="3"></textarea>
</div>
<div class="row">
    <div class="col-lg-12 text-center">
        <input type="submit" value="Submit" class="btn btn-success my-5">
    </div>
</div>
</div>



                </form>
                </div>
        </div>
    </div>
   
</body>

</html>