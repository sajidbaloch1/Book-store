<?php include "../assets/data/connection.php";
$id = $_POST['id'];

$query = "DELETE FROM author WHERE id = $id";
$database = new Database();
$author = $database->query($query);
header("Location:author.php");

?>