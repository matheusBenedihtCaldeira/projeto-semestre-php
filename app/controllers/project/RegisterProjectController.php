<?php
    include_once "../../repositories/ProjectRepository.php";
    include_once "../../models/entities/ProjectEntity.php";

    $projectRepository = new ProjectRepository();
    $data = filter_input_array(INPUT_POST);

    if(isset($_POST['register'])){
        try{
            $project = new ProjectEntity(
                $data['name'], 
                $data['start_date'], 
                $data['end_date'],
                $data['description']);
            $projectRepository->save($project);
            header("Location: ../../views/projects.php");
        }catch(Exception $e){
            echo("Erro: ". $e->getMessage());
        }
    }
?>