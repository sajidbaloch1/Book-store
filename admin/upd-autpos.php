<?php include "../assets/data/connection.php";
if(!empty($_POST['name'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    
    $query = "UPDATE author SET `name` = '$name' WHERE id = $id";
    $database = new Database();
    $author = $database->query($query);
    header("Location:author.php");
}

?>