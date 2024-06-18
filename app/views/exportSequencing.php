<?php
include_once "../repositories/SequencingRepository.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sequencingRepository = new SequencingRepository();
    $sequencing = $sequencingRepository->findById($id);

    if ($sequencing) {
        $filename = "sequencing_" . $sequencing->getName() . ".txt";
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        $output = $sequencing->getSequencing();
        echo($output);
    }
}
?>
