<?php include "../assets/data/connection.php";
if(!empty($_POST['name'])){
    $name = $_POST['name'];

    $query = "INSERT INTO category (`name`) VALUES ('$name')";
    $database = new Database();
    $category = $database->insert($query);
    header("Location:category.php");
}
?>