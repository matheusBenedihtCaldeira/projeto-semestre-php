<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar conta</title>
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
  <?php include 'components/navbar.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5">
            <h2>Register Project</h2>
          </div>
          <div class="mt-5">
            <form action="../controllers/project/RegisterProjectController.php" enctype="multipart/form-data" method="post">
              <div class="row">
                <div class="col-md-10 mb-3">
                  <label for="name" class="form-label">Project Name</label>
                  <input type="text" name="name" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="start_date" class="form-label">Start Date</label>
                  <input type="date" name="start_date" class="form-control" />
                </div>
                <div class="col-md-5 mb-3">
                  <label for="end_date" class="form-label">End Date</label>
                  <input type="date" name="end_date" class="form-control" />
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-10 mb-3">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="description"></textarea>
                    <label for="description">Description</label>
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
