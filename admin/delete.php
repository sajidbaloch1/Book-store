<?php include "../assets/data/connection.php";
$id = $_POST['id'];


$database = new Database();

$query = "DELETE FROM books WHERE id = $id";
$books = $database->query($query);
header("Location:index.php");
$database->close();

?>