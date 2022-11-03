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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="portofolio.php"
                >Portofolio</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="todos.php">Todos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- section portofolio -->
    <section class="portofolio" id="portofolio">
      <div class="container-lg">
        <div class="row min-vh-100 align-content-center align-items-center">
          <div class="text-center">
            <div class="section-title">
              <h2 class="fw-bold mb-5">Portofolio</h2>
            </div>
            <div class="row text-center">
              <div class="col-md-6 col-lg-4">
                <div class="portofilio-item">
                  <img
                    src="img/porto1-removebg-preview.png"
                    class="w-100 img-thumbnail mb-3"
                    alt=""
                  />
                  <h4>Good Dog</h4>
                  <p class="text-muted">Animal Miniature</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="portofilio-item">
                  <img
                    src="img/porto2-removebg-preview.png"
                    class="w-100 img-thumbnail mb-3"
                    alt=""
                  />
                  <h4>Ninja's Bikers</h4>
                  <p class="text-muted">Vehicle Miniature</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="portofilio-item">
                  <img
                    src="img/porto3-removebg-preview.png"
                    class="w-100 img-thumbnail mb-3"
                    alt=""
                  />
                  <h4>Red Bull</h4>
                  <p class="text-muted">Animal Miniature</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section portofolio -->

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
  
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
