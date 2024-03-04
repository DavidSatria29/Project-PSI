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
              <h1><b>Kampung Wisata <br> Keramik Dinoyo</b></h1>
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

      {{-- Paket Wisata --}}
    <div class="section beta default_h">
      <div class="container py-4">
        <div class="row">
          <h1 class="text-center"><b>Paket Wisata</b></h1>
          <div class="col d-flex" style="justify-content: center">
            <div class="card" style="width: 18rem;">
              <img src="images/paket1.png" class="card-img-top p-3" alt="...">
              <div class="card-body">
                <h4 class="card-title text-center">Wisata 1</h4>
                <h5 class="card-text text-center" style="color: red">Rp.200,000</h5>
                <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis turpis id justo pretium, id bibendum ipsum lobortis. Donec vel hendrerit ante. Integer id justo ut est porta sollicitudin.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex" style="justify-content: center">
            <div class="card" style="width: 18rem;">
              <img src="images/paket2.png" class="card-img-top p-3" alt="...">
              <div class="card-body">
                <h4 class="card-title text-center">Wisata 2</h4>
                <h5 class="card-text text-center" style="color: red">Rp.300,000</h5>
                <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis turpis id justo pretium, id bibendum ipsum lobortis. Donec vel hendrerit ante. Integer id justo ut est porta sollicitudin.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex" style="justify-content: center">
            <div class="card" style="width: 18rem;">
              <img src="images/paket3.png" class="card-img-top p-3" alt="...">
              <div class="card-body">
                <h4 class="card-title text-center">Wisata 3</h4>
                <h5 class="card-text text-center" style="color: red">Rp.400,000</h5>
                <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis turpis id justo pretium, id bibendum ipsum lobortis. Donec vel hendrerit ante. Integer id justo ut est porta sollicitudin.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- border card --}}
    <div class="section alpha default_h">
      <div class="container pt-5">
        <div class="row">
          <div class="col">
            <div class="row">
              <img src="images/logo.png" class="card-img-top" alt="..." style="width: 150px; height: 150px">
            </div>
            <div class="row">
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
            <div class="row">
              <div class="col-2"><i class="fa-brands fa-x-twitter fa-2x"></i></div>
              <div class="col-2"><i class="fa-brands fa-instagram fa-2x"></i></div>
              <div class="col-2"><i class="fa-brands fa-facebook fa-2x"></i></div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <h4><b>Company</b></h4>
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
              <h4><b>Resource</b></h4>
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
              <h4><b>Newslatter</b></h4>
            </div>
            <div class="row">
              <input class="form-control me-2" type="search" placeholder="enter your email address" aria-label="enter your email address">
            </div>
            <div class="row pt-2">
              <button type="button" class="btn btn-outline-light">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- footer --}}
    <div class="section alpha">
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-1">
            <p class="text-center">About us</p>
          </div>
          <div class="col-1">
            <p class="text-center">Contact</p>
          </div>
          <div class="col-1">
            <p class="text-center">Privacy Policy</p>
          </div>
          <div class="col-1">
            <p class="text-center">Sitemap</p>
          </div>
          <div class="col-1">
            <p class="text-center">Terms of Use</p>
          </div>
          <div class="col">
            <p class="text-end">© 2024, All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
    <script src={{ url("assets/js/bootstrap.bundle.min.js") }}></script>
</body>
</html>