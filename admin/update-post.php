<?php include "../assets/data/connection.php";
if(!empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['category']) && !empty($_POST['author']) && !empty($_POST['price']) && !empty($_POST['description'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $dis = $_POST['description'];

    $query = "UPDATE books SET name = '$name', image = '$image', author_id = $author, category_id = $category, price = $price, description = '$dis' WHERE id = '$id'";
    $datebase = new Database();
    $books = $datebase->query($query);
    header("Location:index.php");
}
?>