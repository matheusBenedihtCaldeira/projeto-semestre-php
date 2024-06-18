<?php
    include_once "../../repositories/SequencingRepository.php";
    $sequencingRepository = new SequencingRepository();
    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sequencingRepository->delete($id);
        header("Location: ../../views/sequencings.php");
    }
?>