<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>miniatur</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-lg">
        <a class="navbar-brand fw-bold fs-4" href="#">Mi.Id</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portofolio.html">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todos.html">Todos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- section home -->
    <section class="home">
      <div class="container-lg">
        <div class="row min-vh-100 align-content-center align-items-center">
          <div class="col-md-6">
            <div class="home-img">
              <img src="img/miniatur-removebg-preview.png" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="home-text">
              <p class="text-muted mb-1">hello there, we are</p>
              <h1 class="text-uppercase fs-1 fw-bold">mi.id</h1>
              <h2 class="fs-4">Miniatur Indonesia</h2>
              <p class="text-muted mt-4">
                selain menyediakan jasa pembuatan miniatur, kami juga
                menyediakan platform untuk para seniman miniatur menjualkan
                produk mereka disini. produk miniatur yang seperti apa yang kami
                buat ?..
              </p>
              <!-- Button trigger modal -->
              <a
                href="#portofolio"
                class="btn btn-dark px-3 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                >our product</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section home -->

    <!-- start section footer -->
    <footer class="footer border-top py-2 fixed-bottom">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12">
            <p class="m-0 text-center text-white">&copy; 2022 Dewandra</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end section footer -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Our Product</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <table class="table table-dark table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Miniatur</th>
                  <th scope="col">Hard Material</th>
                  <th scope="col">Soft Material</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <th>Animal</th>
                  <th><i class="fa-solid fa-check"></i></th>
                  <th><i class="fa-solid fa-xmark"></i></th>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <th>Vehicle</th>
                  <th><i class="fa-solid fa-check"></i></th>
                  <th><i class="fa-solid fa-xmark"></i></th>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <th>Building</th>
                  <th><i class="fa-solid fa-check"></i></th>
                  <th><i class="fa-solid fa-xmark"></i></th>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <th>Toy</th>
                  <th><i class="fa-solid fa-check"></i></th>
                  <th><i class="fa-solid fa-xmark"></i></th>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <th>Action Figure</th>
                  <th><i class="fa-solid fa-check"></i></th>
                  <th><i class="fa-solid fa-xmark"></i></th>
                </tr>
                <tr>
                  <th></th>
                  <th></th>
                  <th>
                    <button class="btn btn-light">
                      <a href="" class="text-decoration-none text-dark"
                        >Order</a
                      >
                    </button>
                  </th>
                  <th>
                    <button class="btn btn-light">
                      <a href="" class="text-decoration-none text-dark"
                        >Order</a
                      >
                    </button>
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
