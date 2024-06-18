<?php 
  include_once "../repositories/ProjectRepository.php";
  include_once "../models/entities/ProjectEntity.php";
  $projectRepository = new ProjectRepository();    
  $projects = $projectRepository->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar sequenciamento</title>
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
      <div class="col-md-12">
        <div class="mt-5">
          <h2>Registro de Sequenciamento</h2>
          <?php
          #Verifica se tem algum erro presente na URL 
          if (isset($_GET['error'])) {
          #Exibe uma mensagem de aviso caso a requisição tenha sido enviada incorretamente e retornado para o formulario
          echo '<div class="alert alert-danger col-md-7" role="alert">Requisição enviada incorretamente. Certifique-se de enviar todos os dados necessários</div>';
          }
          ?>
        </div>
        <div class="mt-5">
          <form action="../controllers/sequencing/RegisterSequencingController.php" enctype="multipart/form-data" method="POST">
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="name" class="form-label">Nome do Projeto</label>
                <input type="text" name="name" class="form-control" />
              </div>
              <div class="col-md-5 mb-3">
                    <label for="project" class="form-label">Projeto</label>
                    <select name="project" class="form-control">
                      <option value="" selected>Selecione um projeto</option>
                      <?php
                        foreach($projects as $project){
                          echo('<option value="' . $project->getId() . '">' . $project->getName() . '</option>');
                        }
                      ?>
                    </select>
                  </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="method" class="form-label">Método de Sequenciamento</label>
                <input type="text" name="method" class="form-control" />
              </div>
              <div class="col-md-5">
                <label for="sequencing_file" class="form-label">Arquivo do Sequenciamento</label>
                <input class="form-control" type="file" name="sequencing_file" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 mb-3">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" name="comments"></textarea>
                  <label for="comments">Observações</label>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-10 mb-3">
                  <input  name="register" class="btn btn-primary" type="submit" value="Cadastrar">
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>