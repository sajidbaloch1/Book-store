<?php 
session_start();
$_SESSION['user'];
unset($_SESSION["user"]);
unset($_SESSION["cartItems"]);
 header("Location:login");


?>