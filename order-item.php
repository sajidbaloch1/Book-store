<?php include "assets/layouts/header.php";
include "assets/data/connection.php";
$database = new Database();
$query = "SELECT B.id AS id, B.name AS `name`, B.image AS image, B.price AS price, A.name AS 'A_name',C.name AS `C_name`, O.total_amount AS total_amount, OI.quantity AS quantity 
FROM orders O JOIN order_item OI ON O.id = OI.order_id 
JOIN books B ON OI.book_id = B.id
JOIN category C ON B.category_id = C.id
JOIN author A ON A.id = B.author_id WHERE O.user_id = {$_SESSION['user']['id']}";
if(isset($_GET['order_id']) && !empty($_GET['order_id'])){
    $query = $query . " AND O.id = {$_GET['order_id']}";
}
$orders = $database->query($query);
$database->close();
?>

<div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered text-center table-hover">
                    <tr class="bg-success text-light">
                        <th>#</th>
                        <th>Image</th>
                        <th>Book Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Unit Price</th>
                        <th>Total Qty</th>
                        <th>Total Amount</th>
                        <!-- <th colspan="2">Action</th> -->
                        <!-- <th colspan="2">Action</th> -->
                    </tr>
                    
                    <?php 
                    if(isset($_GET['order_id']) && !empty($_GET['order_id']) && !empty($orders)){
                    foreach ($orders as $book) {
                    ?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td class="text-center"><img src="<?php echo $book['image'] ?>" height="30px" width="30px" alt=""></td>
                            <td><?= $book['name'] ?></td>
                            <td><?= $book['C_name'] ?></td>
                            <td><?= $book['A_name'] ?></td>
                            <td class="ps-4"><?= $book['price'] ?></td>
                            <td><?= $book['quantity']?></td>
                            <td><?= $book['total_amount']?></td>
                        </tr>
                    <?php  } }else{
                        echo "this order is empty";
                    }?>
                </table>
            </div>
        </div>
    </div>


<?php include "assets/layouts/footer.php"?> 