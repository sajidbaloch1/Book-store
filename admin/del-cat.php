<?php include "../assets/data/connection.php";
$id = $_POST['id'];

$query = "DELETE FROM category WHERE id = $id";
$databse = new Database();
$cat = $databse->query($query);
header("Location:category.php");
?>