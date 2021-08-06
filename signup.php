<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "assets/layouts/header.php" ?>

    <div class="container">
    <h1 class="text-center" style="background: rgb(2, 0, 36);
     background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(20, 20, 20, 0.9640231092436975) 35%, rgba(0, 212, 255, 1) 100%); color: white;">SIGN UP</h1>
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST" class="border p-5 mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">First Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Email</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Male
                                </label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success float-end">
                </form>
            </div>
        </div>
    </div>

    <?php include "assets/layouts/footer.php" ?>

</body>

</html>