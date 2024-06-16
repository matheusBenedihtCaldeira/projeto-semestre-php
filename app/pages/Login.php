<?php 
    include '../views/login.html';

    if($_SERVER["REQUEST_METHOD"] == "POST" && 
    isset($_POST['email']) &&
    isset($_POST['password'])){
        require_once '../models/entities/UserEntity.php';
        $user = new UserEntity();
        $user->login($_POST['email'], $_POST['password']);
        echo($user->__toString());
    }
?>