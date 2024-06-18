<?php
    include_once "../repositories/SequencingRepository.php";
    include_once "../models/entities/SequencingEntity.php";
    $sequencingRepository = new SequencingRepository();
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

    <style>
      .theme-text {
        color: #075985;
      }

      .card-img-top {
        height: 200px;
        width: 100%;
      }
      .card {
        z-index: 1;
        overflow: hidden;
        transition: 0.5s;
      }
      .card:hover {
        color: white;
      }
      .card::before {
        content: "";
        position: absolute;
        left: -100%;
        top: 0%;
        background: #075985;
        width: 100%;
        height: 100%;
        transition: 0.5s;
        z-index: -1;
      }
      .card:hover::before {
        left: 0%;
        color: white;
      }
      .container-fluid {
        background-image: url("blob-scene-haikei.svg");
        background-position: center;
        background-size: cover;
      }
    </style>
</head>
<body>
  <?php include './components/navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
              <h1>Sequenciamentos</h1>  
              <a href="/projeto-semestre-php/app/views/registerSequencing.php" class="btn btn-primary m-3">Registrar sequenciamento</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Método de sequenciamento</th>
                        <th scope="col">Nome do projeto</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($sequencingRepository->findAll() as $sequencing) :?>
                            <tr>
                            <td><?= $sequencing->getId() ?></td>
                            <td><?= $sequencing->getName() ?></td>
                            <td><?= $sequencing->getMethod() ?></td>
                            <td><?= $sequencing->getProject() ?></td>
                            <td>
                              <a href="sequencing.php?id=<?= $sequencing->getId() ?>">
                                <button class="btn  btn-success btn-sm" type="button">Visualizar</button>
                              </a>
                            </td>
                            <td>
                              <a href="../controllers/sequencing/DeleteSequencing.php?id=<?= $sequencing->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                              </a>
                            </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>