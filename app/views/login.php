<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-white">
<div class="container d-flex justify-content-center align-items-center mt-5">
  <div class="col-sm-8 col-md-6 col-lg-4">
    <div class="text-center mb-4">
    <img width="94" height="94" src="https://img.icons8.com/3d-fluency/94/biotech.png" alt="biotech"/>
    <h2 class="h4 mb-3 fw-bold">Entrar na sua conta</h2>
    <?php
          #Verifica se tem algum erro presente na URL 
          if (isset($_GET['error'])) {
          #Exibe uma mensagem de aviso caso a requisição tenha sido enviada incorretamente e retornado para o formulario
          echo '<div class="alert alert-danger" role="alert">Usuário ou senha inválido</div>';
          }
          ?>
    
</div>
    
    <form action="../controllers/user/LoginController.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required>
      </div>
      
      <div class="mb-3">
        <div class="d-flex justify-content-between">
          <label for="password" class="form-label">Senha</label>
        </div>
        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••••••" required>
      </div>
      
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>
    
    <p class="text-center mt-4 mb-0">
      Não é registrado? <a href="registerUser.html" class="text-decoration-none">Realizar cadastro</a>
    </p>
  </div>
</div>
</body>
</html>