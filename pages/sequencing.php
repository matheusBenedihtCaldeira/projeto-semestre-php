<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar sequenciamento</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <a href="/projeto-php-sequenciamento/pages/registerSequencing.php" class="btn btn-primary m-3">
        Registrar sequenciamento
        </a>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <?php 
                require '../config/database.php';
                $query_select = "SELECT name, origin, extraction_date, comments FROM tb_sequencing";
                $data = mysqli_query($database, $query_select);
            ?>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Origem</th>
                  <th>Data de extração</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
              <?php 
                if($data){
                    while($row = mysqli_fetch_assoc($data)){
                        $nome = $row['name'];
                        $origem = $row['origin'];
                        $data_extracao = $row['extraction_date'];
                        echo("
                        <td>$nome</td>
                        <td>$origem</td>
                        <td>$data_extracao</td>
                        ");
                        }
                    }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
