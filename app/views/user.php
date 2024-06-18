<?php
    include_once "../repositories/UserRepository.php";
    include_once '../repositories/database.php';
    $userRepository = new UserRepository();

    if(isset($_SESSION['idUser'])){
        $user = $userRepository->findById($_SESSION['idUser']);
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
              <h1>Detalhes do usuário</h1>
              <hr class="border border-primary border-2 opacity-50">
            </div>
            <div class="col-md-8">
                <h3 class="fw-medium fs-4">Nome:</h3>
                <p class="fs-5"><?php echo($user->getFirstName())?></p>
                <h3 class="fw-medium fs-4">Sobrenome:</h3>
                <p class="fs-5"><?php echo($user->getLastName())?></p>
                <h3 class="fw-medium fs-4">E-mail:</h3>
                <p class="fs-5"><?php echo($user->getEmail())?></p>
                <h3 class="fw-medium fs-4">Gênero:</h3>
                <p class="fs-5"><?php echo($user->getGender())?></p>
                <h3 class="fw-medium fs-4">Data de nascimento:</h3>
                <p class="fs-5"><?php echo($user->getDateOfBirth())?></p>  
            </div>
            <hr class="border border-primary border-2 opacity-50">
            <div>
            <a href="logout.php">
                <button class="btn btn-danger btn-sm" type="button">Logout</button>
            </a>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</body>
</html>