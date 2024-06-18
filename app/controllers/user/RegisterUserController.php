<?php
    include_once "../../repositories/UserRepository.php";
    include_once "../../models/entities/UserEntity.php";

    $userRepository = new UserRepository();
    $data = filter_input_array(INPUT_POST);

    if(isset($_POST['register'])){
        try{
            $user = new UserEntity(
                $data['first_name'], 
                $data['last_name'], 
                $data['email'],
                $data['password'], 
                $data['gender'], 
                $data['date_of_birth']);
                $userRepository->save($user);
                header("Location: ../../views/index.php");
        }catch(Exception $e){
            echo("Erro: ". $e->getMessage());
        }
    }else{
        echo("Teste");
    }
?>