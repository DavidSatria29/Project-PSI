<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url("assets/css/bootstrap.min.css")  }}>
    <link rel="stylesheet" href={{url("assets/css/custom.css")  }}>
    <link rel="stylesheet" href={{url("fonts/fonts.css")  }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>main</title>

</head>

<body>
    {{-- Navbar --}}  
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>DINOYO CERAMIC</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  E-Commerce
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pariwisata
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kontak
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    {{-- banner --}}
    <div class="section alpha default_h">
      <div class="container pt-5">
        <div class="row">
          <div class="col">
            <div class="row">
              <h1>Kampung Wisata <br> Keramik Dinoyo</h1>
            </div>
            <div class="row">
              <h3>Kampung Wisata Keramik Dinoyo merupakan destinasi wisata yang berada di Kota Malang.</h3>
            </div>
            <div class="row">
              <div class="col-2">
                <button type="button" class="btn btn-warning">Sign in</button>
              </div>
              <div class="col-2">
                <button type="button" class="btn btn-outline-light">Sign up</button>
              </div>
            </div>
          </div>
          <div class="col">
            <img src="images/Keramikdummy.png" class="rounded mx-auto d-block" alt="...">
          </div>
        </div>
      </div>
    </div>

    {{-- Sejarah --}}
    <div class="section beta default_h">
      <div class="container">
        <div class="row">
          <h1 class="">Sejarah</h1>
          <div class="col-4">
            <img src="..." class="rounded mx-auto d-block" alt="...">
          </div>
          <div class="col-6">
            <p>Lorem ipsum</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Lokasi dan Jam Operasional --}}
    <div class="section beta default_h">
      <div class="container">
        <div class="row">
          <h1>Lokasi dan Jam Operasional</h1>
          <div class="col">
            <h1>SENIN - MINGGU
              08.00 - 15.00</h1>
          </div>
          <div class="col">
            <img src="..." class="rounded mx-auto d-block" alt="...">
          </div>
        </div>
      </div>
    </div>

    {{-- Fasilitas --}}
    <div class="section gamma default_h">
      <div class="container">
        <div class="row">
          <h1>Fasilitas</h1>
          <div class="col">
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
          </div>
          <div class="col">
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
          </div>
          <div class="col">
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="row">
              <img src="..." class="rounded mx-auto d-block" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>

      {{-- review --}}
    <div class="section beta default_h">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- border card --}}
    <div class="section alpha default_h">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="row">
              <img src="..." class="card-img-top" alt="...">
            </div>
            <div class="row">
              <h5>lorem ipsum</h5>
            </div>
            <div class="row"></div>
          </div>
          <div class="col">
            <div class="row">
              <h5>Company</h5>
            </div>
            <div class="row">
              <p>Sejarah</p>
            </div>
            <div class="row">
              <p>Lokasi dan Operasional</p>
            </div>
            <div class="row">
              <p>Tiket masuk</p>
            </div>
            <div class="row">
              <p>Fasilitas</p>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <h5>Resource</h5>
            </div>
            <div class="row">
              <p>Produk Keramik</p>
            </div>
            <div class="row">
              <p>Produk Wisata</p>
            </div>
            <div class="row">
              <p>Workshop Keramik</p>
            </div>
            <div class="row">
              <p>Pemesanan Produk</p>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <h5>Newslatter</h5>
            </div>
            <div class="row"></div>
            <div class="row"></div>
          </div>
        </div>
      </div>
    </div>
{{-- footer --}}
    <div class="section alpha">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <p>About us</p>
          </div>
          <div class="col">
            <p>Contact</p>
          </div>
          <div class="col">
            <p>Privacy Policy</p>
          </div>
          <div class="col">
            <p>Sitemap</p>
          </div>
          <div class="col">
            <p>Terms of Use</p>
          </div>
          <div class="col"></div>
          <div class="col">
            <p>© 2024, All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
    <script src={{ url("assets/js/bootstrap.bundle.min.js") }}></script>
</body>
</html>