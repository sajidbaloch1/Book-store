
<?php
session_start();
include "assets/data/connection.php";
if (empty($_SESSION['user'])) {
    header("Location:login.php");
} elseif (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['category']) && !empty($_POST['author']) && !empty($_POST['price'])) {
    $_SESSION['cartItems'][] = $_POST;

    header("Location:cart.php");
}

?>