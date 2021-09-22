<?php include "assets/layouts/header.php";
include "assets/data/connection.php";
$database = new Database();
$query = "SELECT * FROM orders";
$orders = $database->query($query);
$database->close();
?>


<div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered text-center table-hover">
                    <tr class="bg-success text-light">
                        <th>#</th>
                        <th>QUANTITY</th>
                        <th>TOTAL AMOUNT</th>
                        <th>DATE</th>
                        <th>ORDER ITEMS</th>
                        <!-- <th colspan="2">Action</th> -->
                        <!-- <th colspan="2">Action</th> -->
                    </tr>
                    <?php foreach ($orders as $order) {
                    ?>
                        <tr>
                           <td><?= $order['id']?></td>
                           <td><?= $order['quantity']?></td>
                           <td><?= $order['total_amount']?></td>
                           <td><?= $order['date']?></td>
                           <td> <a href="order-item.php?order_id=<?= $order['id']?>" class="btn btn-primary">ORDER-ITEMS</a></td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </div>



<?php include "assets/layouts/footer.php"?>