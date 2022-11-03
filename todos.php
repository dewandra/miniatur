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
              <a class="nav-link" href="portofolio.php">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="todos.php"
                >Todos</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- section todos -->
    <section class="todos">
      <div class="container-lg">
        <div class="row min-vh-100 align-content-center align-items-center">
          <div class="row">
            <div class="col-md-6">
              <h3 class="fw-bold">hi there,</h3>
              <h1 class="fw-light">u have some advice for us?</h1>
              <p class="text-muted">send us a message!</p>
            </div>
            <div class="col-md-6" id="todos-form">
              <div>
                <div class="row" id="todos-kolom">
                  <div
                    class="alert alert-danger text-center"
                    id="todos-alert"
                    role="alert"
                  >
                    empty column!
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="text" id="todos-name" placeholder="name" />
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="date" id="todos-date" placebholder="date" />
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea
                      placeholder="fell free to send your message"
                      id="todos-msg"
                    ></textarea>
                  </div>
                  <div class="col-md-3">
                    <button
                      type="submit"
                      class="btn btn-dark form-control"
                      id="submit"
                      onclick="addData()"
                    >
                      send
                    </button>
                  </div>
                  <div class="col-md-9 mt-1">
                    <p class="text-muted">miniaturindonesia@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <h4 class="fw-bold text-center mt-3">Message</h4>
            <div class="text-end" id="filter-div">
              <input
                class="rounded-pill text-center"
                type="text"
                id="input-keyword"
                placeholder="search name"
              />
              <button
                type="submit"
                class="rounded-pill"
                id="btn-search"
                data-bs-toggle="modal"
                data-bs-target="#filterModal"
                onclick="filterData()"
              >
                <i class="fa fa-search text-black-50"></i>
              </button>
            </div>
            <div class="col-lg-12 mt-2">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody id="todos-table"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section todos -->

    <!-- start section footer -->
    <footer class="footer border-top py-2">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12">
            <p class="m-0 text-center text-white">&copy; 2022 Dewandra</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end section footer -->

    <!-- Modal Edit -->
    <div
      class="modal fade"
      id="editModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="alert alert-dark text-center"
            id="modal-alert"
            role="alert"
          >
            success update data
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>

    <!-- Modal Filter -->
    <div
      class="modal fade"
      id="filterModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Result</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <table class="table" id="modal-body-filter"></table>
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
