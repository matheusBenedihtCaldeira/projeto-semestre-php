<?php 
    include_once '../../repositories/UserRepository.php';
    
    $userRepository = new UserRepository();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($userRepository->login($email, $password)){
        if(isset($_SESSION['idUser'])){
            header("Location: /projeto-semestre-php/app/views/index.php");
        }
    }else{
        header("Location: /projeto-semestre-php/app/views/login.php?error=invalid_request");
        exit;
    }
    
?>