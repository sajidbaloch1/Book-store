<?php include "assets/data/connection.php";
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $database = new Database();
    $query = "SELECT * FROM users WHERE User_email = '$email' AND `User_password` = '$pass'";
    $users = $database->query($query);
$database->close();


if(count($users) === 1){
    session_start();
    $_SESSION['user'] = $users[0];
    if($_SESSION['user']['type'] == 'ADMIN'){
        header("Location:admin/");
    }else{
        header("Location:index.php");
    }
}else{
    header('Location: login.php?err=Incorrect%20your%20email%20OR%20password');

}

}

?>