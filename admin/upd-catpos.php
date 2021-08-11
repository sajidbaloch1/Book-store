<?php include "../assets/data/connection.php";
if(!empty($_POST['name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];


    $query = "UPDATE category SET `name` = '$name' WHERE id = $id";
    $database = new Database();
    $category = $database->query($query);
    header("Location:category.php");
}
?>