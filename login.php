<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
<?php include "assets/layouts/header.php"?>

<div class="container">
<h1 class="text-center" style="background: rgb(2, 0, 36);
background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(20, 20, 20, 0.9640231092436975) 35%, rgba(0, 212, 255, 1) 100%); color: white;">LOGIN</h1>
    <div class="row">
        <div class="col-lg-12">
            <form action="login-post.php" method="POST">
            <div class="form-floating mb-3">
  <input type="email" name="email" class="form-control my-5" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" name="password" class="form-control my-5" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
  <input type="submit" value="Submit" class="btn btn-success float-end">
</div>
            </form>
        </div>
    </div>
</div>

<?php include "assets/layouts/footer.php"?>
    
</body>
</html>
