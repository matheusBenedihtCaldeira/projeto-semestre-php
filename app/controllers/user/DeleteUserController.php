<?php
    include_once "../../repositories/UserRepository.php";
    $userRepository = new UserRepository();
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $userRepository->delete($id);
        header("Location: ../../views/login.php");
    }
?>