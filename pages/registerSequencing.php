<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar sequenciamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
<?php include 'navbar.php' ?>
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
          <form action="../scripts/registerSequencing.php" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" />
              </div>
              <div class="col-md-5 mb-3">
                <label for="origin" class="form-label">Origem</label>
                <input type="text" name="origin" class="form-control" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="extraction_date" class="form-label">Data de Extração</label>
                <input type="date" name="extraction_date" class="form-control" />
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
                <button class="btn btn-primary">Enviar</button>
                <button class="btn disabled">Cancelar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>