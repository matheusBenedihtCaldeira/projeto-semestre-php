<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BioSequencer</title>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center bg-gray">
          <div class="fs-4 m-5 p-4">
            <h2 class="fw-medium">Lorem ipsum</h2>
            <p class="fw-normal">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
              expedita voluptas culpa sapiente alias molestiae. Numquam corrupti
              in laborum sed rerum et corporis.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h1 class="text-center mt-5 display-3 fw-bold">
          Our <span class="theme-text">services</span>
        </h1>
        <hr class="mx-auto mb-5 w-25" />
        <div class="row mb-5 d-flex justify-content-center">
          <div class="col-2 col-sm-2 col-md-2 ms-2">
            <div class="card shadow">
              <img
                src="https://img.freepik.com/free-vector/artificial-intelligence-medicine-isometric-composition-with-ai-doctors-researchers-examining-patients-working-laboratory-vector-illustration_1284-82964.jpg"
                alt
                class="card-img-top"
              />
              <div class="card-body">
                <h3 class="text-center">Web Development</h3>
                <hr class="mx-auto w-75" />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                  eligendi soluta est veniam sequi nemo, quas delectus eveniet
                  ducimus rem animi. Natus non earum deleniti aliquam
                </p>
              </div>
            </div>
          </div>
          <div class="col-2 col-sm-2 col-md-2 ms-2">
            <div class="card shadow">
              <img
                src="https://www.winfatt.com/public/front/images/blog/1552579763_winfatt-scopri-i-database-del-software-gestionale-winfatt.jpg"
                alt
                class="card-img-top"
              />
              <div class="card-body">
                <h3 class="text-center">Web Development</h3>
                <hr class="mx-auto w-75" />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                  eligendi soluta est veniam sequi nemo, quas delectus eveniet
                  ducimus rem animi. Natus non earum deleniti aliquam
                </p>
              </div>
            </div>
          </div>
          <div class="col-2 col-sm-2 col-md-2 ms-2">
            <div class="card shadow">
              <img
                src="https://media.licdn.com/dms/image/D5612AQGx3op56ho51A/article-cover_image-shrink_720_1280/0/1700645546633?e=2147483647&v=beta&t=XQEf8gq7qYaLiAy72J6CgCQCm_9_T2KWqapm1QFhf-M"
                alt
                class="card-img-top"
              />
              <div class="card-body">
                <h3 class="text-center">Web Development</h3>
                <hr class="mx-auto w-75" />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                  eligendi soluta est veniam sequi nemo, quas delectus eveniet
                  ducimus rem animi. Natus non earum deleniti aliquam
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 d-flex justify-content-center my-5">
        <div class="row">
          <div class="bg-gray p-4 rounded">
            <h2 class="fw-normal">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
            <p class="fs-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
              eligendi soluta est veniam sequi nemo, quas delectus eveniet
              ducimus rem animi. Natus non earum deleniti aliquam
            </p>
            <button class="btn btn-primary btn-lg">Register sequencing</button>
          </div>
        </div>
      </div>
    </div>
    <?php include "./components/footer.php"?>
  </body>
</html>
