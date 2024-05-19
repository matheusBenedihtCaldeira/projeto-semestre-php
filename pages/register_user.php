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
            <h2>Cadastro de usuario</h2>
          </div>
          <div class="mt-5">
            <form action="../scripts/registerUser.php", method="POST">
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" name="nome" class="form-control"/>
                </div>
                <div class="col-md-5 mb-3">
                  <label for="sobrenome" class="form-label">Sobrenome</label>
                  <input type="text" name="sobrenome" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="exemplo@email.com">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" name="senha" class="form-control" placeholder="••••••••••••">
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
