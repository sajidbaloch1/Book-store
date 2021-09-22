
<?php
session_start();
include "assets/data/connection.php";
if(!empty($_POST['total_Amount']) && !empty($_SESSION['user']) && !empty($_SESSION['cartItems'])){
    $amount = $_POST['total_Amount'];
    $user_id = $_SESSION['user']['id'];

    $query = "INSERT INTO orders(`user_id`, total_amount) VALUES ($user_id, $amount)";
    $datbase  = new Database();
    $order = $datbase->insert($query);
    $order_id = $datbase->getLastId();
    foreach($_SESSION['cartItems'] as $cartitem){
        $query = "INSERT INTO order_item(`book_id`,`order_id`,`quantity`) VALUES ({$cartitem['id']},$order_id,{$cartitem['quantity']})";
        $order_item = $datbase->insert($query);
    }
    $datbase->close();
    header("Location:index.php");
}
?>




