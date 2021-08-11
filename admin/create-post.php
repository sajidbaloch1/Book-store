<?php
include "../assets/data/connection.php";
if(!empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['author']) && !empty($_POST['category']) && !empty($_POST['price']) && !empty($_POST['description'])){
    $name = $_POST['name'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $dis = $_POST['description'];
$query = "INSERT INTO books(`name`,`image`,`author_id`,`category_id`,`price`,`description`) VALUES ('$name','$image', $author, $category,$price,'$dis')";
$datbase = new Database();
$result  = $datbase->insert($query);
header("Location:index.php");
}
?>