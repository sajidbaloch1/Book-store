<?php include "assets/layouts/header.php"?>
<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h5 class="mb-3">Cart</h5>
                <div class="row">
                    <div class="col-12 show-cart">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-9"></div>
                                </div>
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">1 Kg</p>
                                <div class="input-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-dark">+</button>
                                    <input type="number" class="text-center input-outline-dark" value="1">
                                    <button type="button" class="btn btn-outline-dark">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3" style="color: white;">The total amount</h5>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">The total amount</h5>
                        <p class="card-text">Total Items : <span class="total-item"></span></p>
                        <p class="card-text">Total Price : $<span class="total-cart"></span>.00 </p>
                        <p class="card-text"></p>
                        <a href="check-out.html" class="btn btn-success rounded">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "assets/layouts/footer.php" ?>