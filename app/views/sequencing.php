<?php
    include_once "../repositories/SequencingRepository.php";
    $sequencingRepository = new SequencingRepository();
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sequencing = $sequencingRepository->findById($id);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Projects</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
</head>
<body>
  <?php include './components/navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center">
              <h1>Detalhes do sequenciamento</h1>
              <hr class="border border-primary border-2 opacity-50">
            </div>
            <div class="col-md-8">
                <h3 class="fw-medium fs-4">Nome:</h3>
                <p class="fs-5"><?php echo($sequencing->getName())?></p>
                <h3 class="fw-medium fs-4">Método de sequenciamento:</h3>
                <p class="fs-5"><?php echo($sequencing->getMethod())?></p>
                <h3 class="fw-medium fs-4">Projeto:</h3>
                <p class="fs-5"><?php echo($sequencing->getProject()->getName())?></p>
            </div>
            <hr class="border border-primary border-2 opacity-50">
            <div class="col-md-8">
                <h3 class="fw-medium fs-4">Observações:</h3>
                <p class="fs-5"><?php echo($sequencing->getComments())?></p>
            </div>
            <div>
            <a href="exportSequencing.php?id=<?= $sequencing->getId() ?>">
                <button class="btn btn-success btn-sm" type="button">Exportar</button>
            </a>
            <a href="../controllers/sequencing/DeleteSequencing.php?id=<?= $sequencing->getId() ?>">
                <button class="btn btn-danger btn-sm" type="button">Excluir</button>
            </a>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</body>
</html>