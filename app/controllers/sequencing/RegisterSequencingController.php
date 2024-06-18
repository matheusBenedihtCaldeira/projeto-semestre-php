<?php 

    include_once "../../repositories/SequencingRepository.php";
    include_once "../../repositories/ProjectRepository.php";
    include_once "../../models/entities/SequencingEntity.php";
    include_once "../../models/entities/ProjectEntity.php";

    $sequencingRepository = new SequencingRepository();
    $projectRepository = new ProjectRepository();
    $data = filter_input_array(INPUT_POST);

    if (isset($_POST['register']) && $_SERVER["REQUEST_METHOD"] === "POST" && is_uploaded_file($_FILES['sequencing_file']['tmp_name'])){
        $sequencingFile = $_FILES['sequencing_file'];
        try{
            $sequencingFileContent = file_get_contents($sequencingFile["tmp_name"]);
            $projectId = $data['project'];
            $project = $projectRepository->findById($projectId);
            $sequencing = new SequencingEntity(
                $data['name'],
                $data['method'],
                $sequencingFileContent,
                $project,
                $data['comments']
            );
            $sequencingRepository->save($sequencing);
            header("Location: ../../views/sequencings.php");
        }catch(Exception $e){
            echo("Erro: ". $e->getMessage());
        }
    }else{
        #Realiza o redirecionamento para o formulario novamente, pois a requisição não foi enviada corretamente
        header("Location: /projeto-semestre-php/app/views/registerSequencing.php?error=invalid_request");
        exit;
    }
?>