<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css -->
  <link href="app.css" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="fonts-6/css/all.css" />

  <!-- logo -->
  <link rel="icon" href="img/logo-only.png" type="image/x-icon" />

  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-transparent navbar-dark position-fixed w-100 my-auto">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="img/logo-web (1).png" width="220" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link" aria-current="page" href="/">HOME</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/overview">COMPANY</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/product">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="contact">
    <div class="container-fluid overlay h-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div data-aos="zoom-in">
              <h3>Need Consultation ? please contact us who are ready to help</h3>
            </div>
            <div class="kontak">
              <div data-aos="fade-up" data-aos-duration="3000">
                <h6>Contact</h6>
              </div>
              <div class="mb-3 d-flex align-items-center" data-aos="fade-up" data-aos-duration="3000">
                <div>
                  <img src="img/asset/alamat.png" alt="" />
                </div>
                <a href="">GRAND SLIPI TOWER Jl. Letjen. S Parman - Kav. 22-24 Slipi
                  Jakarta Barat.</a>
              </div>
              <div class="mb-3" data-aos="fade-up" data-aos-duration="3000">
                <img src="img/asset/telepon.png" alt="" />
                <a href="">+62 21 5042-0093</a>
              </div>
              <div class="mb-3" data-aos="fade-up" data-aos-duration="3000">
                <img src="img/asset/email.png" alt="" />
                <a href="">palevi.etmgroup@gmail.com</a>
              </div>
              <div class="mb-3" data-aos="fade-up" data-aos-duration="3000">
                <img src="img/asset/email.png" alt="" />
                <a href="">sales.etmgroup@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-contact w-100" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
              data-aos-duration="500">
              <form action="{{ route('contact')}}" method="post">
                @csrf
                <h2>Any questions ?</h2>
                <div class="card-body">
                  @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success')}}
                  </div>
                  @endif
                  <div class="form-floating mb-3">
                    <input type="text" name="name" id="name" class="form-control" id="floatingInput"
                      placeholder="text" />
                    <label for="floatingInput" class="d-flex align-items-center">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control" id="floatingInput"
                      placeholder="name@example.com" />
                    <label for="floatingInput" class="d-flex align-items-center">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="subject" id="subject" class="form-control" id="floatingInput"
                      placeholder="text" />
                    <label for="floatingInput" class="d-flex align-items-center">subject</label>
                  </div>
                  <div class="form-floating">
                    <textarea class="form-control" name="comments" id="comments" placeholder="Leave a comment here"
                      id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" class="d-flex align-items-center">Comments</label>
                  </div>
                  <br>
                  <dir class="col-12 btn">
                    <button type="submit" class="button-kontak">SEND IN</button>
                  </dir>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
    </section>
    <section class="footer">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="img/logo-only.png" class="img" alt="" />
              ETM Metal group
            </h6>
            <p>
              ETM Metal Group's dedication to excellence ensures that we consistently deliver high-quality solutions,
              setting a benchmark for the industry and solidifying our position as a trusted partner in the global
              market.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Products</h6>
            <p>
              <a href="#!" class="text-reset">ALUMINIUM BILLET</a>
            </p>
            <p>
              <a href="#!" class="text-reset">TIN INGOT</a>
            </p>
            <p>
              <a href="#!" class="text-reset">COPPER INGOT</a>
            </p>
            <p>
              <a href="#!" class="text-reset">ALUMINIUM INGOT</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div> -->
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>
              <i class="fas fa-home me-3 text-secondary"></i> GRAND SLIPI TOWER
              Jl. Letjen. S Parman - Kav. 22-24 Slipi Jakarta Barat.
            </p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              palevi.etmgroup@gmail.com
            </p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              sales.etmgroup@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> +65 9057-3510</p>
            <p>
              <i class="fas fa-print me-3 text-secondary"></i> +662 21 5042-0093
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025)">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="">ETM metal group</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    const counters = document.querySelectorAll(".timer")
    counters.forEach(counters => {
      let initial_count = 0;
      const final_count = counters.dataset.to;
      const counting = setInterval(updateCounting, 1);


      function updateCounting() {
        initial_count = initial_count + 1;
        counters.innerText = initial_count;

        if (initial_count >= final_count) {
          clearInterval(counting);
        }
      }
    })
  </script>
  <script>
    AOS.init();
  </script>
  <script src="js/script.js"></script>
</body>

</html>