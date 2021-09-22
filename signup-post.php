<?php include "assets/data/connection.php";
if(!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['type'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $query = "INSERT INTO users (`name`,`User_email`,`User_password`,`type`) VALUES ('$name','$email','$password','$type')";
    $database = new Database();
    $users = $database->insert($query);
    if($users === TRUE){
        session_start();
        $_SESSION['user'] = $_POST;
        $_SESSION['user']['id'] = $database->getLastId();
        header("Location: index.php");
    }else{
        header('Location: SIGNUP.php?err=Email%20is%20already%20registered%20please%20login');
    }

}else{
    header("Location: signup.php");
}
?>