<?php include "assets/layouts/header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h5 class="mb-3">Cart</h5>
            <div class="row">
                <?php

                $totalItems = 0;
                $totalPrice = 0;

                if (empty($_SESSION['cartItems']))
                    echo "your cart is empty";
                if (!empty($_SESSION['cartItems'])) {

                    foreach ($_SESSION['cartItems'] as  $index => $cartItem) {
                        $totalItems += $cartItem['quantity'];
                        $totalPrice += $cartItem['price'] * $cartItem['quantity'];
                ?>
                        <div class="col-12 show-cart">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9"></div>
                                    </div>
                                    <form action="cart-delete.php" method="POST">
                                        <input type="hidden" name="index" value="<?= $index ?>">
                                        <button>Delete</button>
                                    </form>
                                    <h5 class="card-title"><?php echo $cartItem['name'] ?></h5>
                                    <p class="card-text"><?php echo $cartItem['price'] ?></p>
                                    <img src="<?php echo $cartItem['image'] ?>" alt="">
                                   
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="mb-3" style="color: white;">The total amount</h5>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">The total amount</h5>
                    <p class="card-text">Total Items : <span class="total-item"><?= $totalItems ?></span></p>
                    <p class="card-text">Total Price : Rs <span class="total-cart"><?= $totalPrice ?></span>.00 </p>
                    <p class="card-text"></p>
                    <form action="order.php" method="POST">
                        <a ><input type="submit" class="btn btn-success rounded" value="Order Now"></a>
                        <input type="hidden" name="total_Amount" value="<?= $totalPrice?>">
                        <input type="hidden" name="total_item" value="<?= $totalItems?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>
<?php include "assets/layouts/footer.php" ?>