<?php 
$server_name = "localhost";
$user_name = "root";
$database_name = "book_store";

$conn = mysqli_connect($server_name,$user_name,"",$database_name);

if(!$conn){
    echo "your connection failed";
}

?>