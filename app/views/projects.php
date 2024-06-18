<?php
    include_once "../repositories/ProjectRepository.php";
    include_once "../models/entities/ProjectEntity.php";
    $projectRepository = new ProjectRepository();    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Projetos</title>
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
            <div class="col-md-12 mt-4">
              <h1>Projetos</h1>  
              <a href="/projeto-semestre-php/app/pages/RegisterProject.php" class="btn btn-primary m-3">Registrar projeto</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Project name</th>
                        <th scope="col">Start date</th>
                        <th scope="col">End date</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($projectRepository->findAll() as $project) :?>
                            <tr>
                            <td><?= $project->getId() ?></td>
                            <td><?= $project->getName() ?></td>
                            <td><?= $project->getStartDate() ?></td>
                            <td><?= $project->getEndDate() ?></td>
                            <td>
                              <a href="../controllers/project/DeleteProjectController.php?id=<?= $project->getId() ?>">
                              <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
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