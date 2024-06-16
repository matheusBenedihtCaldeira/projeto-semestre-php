<?php 
    include '../views/registerUser.html';

    if($_SERVER["REQUEST_METHOD"] == "POST" && 
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['gender']) &&
    isset($_POST['date_of_birth'])){
        require_once '../models/entities/UserEntity.php';
        $user = new UserEntity($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['gender'], $_POST['date_of_birth']);
        echo($user->__toString());
    }
?>