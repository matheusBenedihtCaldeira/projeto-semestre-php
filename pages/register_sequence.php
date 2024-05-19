<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar conta</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5">
            <h2>Cadastro de Sequenciamento</h2>
          </div>
          <div class="mt-5">
            <form action="../scripts/register_sequence_func.php" enctype="multipart/form-data" method="POST">
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" name="nome" class="form-control"/>
                </div>
                <div class="col-md-5 mb-3">
                  <label for="origem" class="form-label">Origem</label>
                  <input type="text" name="origem" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="data_extracao" class="form-label">Data de Extração</label>
                    <input type="date" name="data_extracao" class="form-control">
                </div>
                <div class="col-md-5">
                    <label for="sequence_file" class="form-label">Arquivo do Sequenciamento</label>
                    <input class="form-control" type="file" name="sequence_file">
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 mb-3">
                <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Observações</label>
</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 mb-3">
                    <button class="btn btn-primary">Enviar</button>
                    <button class="btn ">Cancelar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
