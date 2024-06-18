<?php
    include_once "../../repositories/ProjectRepository.php";
    $projectRepository = new ProjectRepository();
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $projectRepository->delete($id);
        header("Location: ../../views/projects.php");
    }
?>