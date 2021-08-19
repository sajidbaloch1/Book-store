<?php session_start();
unset($_SESSION['cartItems'][$_POST['index']]);
header("Location:cart.php")
?>