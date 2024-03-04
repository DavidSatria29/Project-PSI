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
    <title>E-commerce</title>

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
                  <li><a class="dropdown-item" href="{{ url('/commerce') }}">go to page</a></li>
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
                  <li><a class="dropdown-item" href="{{ url('/pariwisata') }}">go to page</a></li>
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

    {{-- Produk --}}
    <div class="section beta default_h">
      <div class="container pt-4 pb-4">
        <div class="row align-items-center"> <!-- Added align-items-center class here -->
          <h1 class="text-center"><b>Produk</b></h1>
        </div>
        <div class="row align-items-center pt-5"> <!-- Added align-items-center class here -->
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-whiskey-glass fa-5x"></i><br>Gelas</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-seedling fa-5x"></i><br>Vas</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-utensils fa-5x"></i><br>Alat Makan</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-palette fa-5x"></i><br>Custom</button>
                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-hat-wizard fa-5x"></i><br>Hiasan</button>
              </div>
        </div>

      </div>
    </div>

      {{-- Metode Pembayaran --}}
    <div class="section beta default_h">
      <div class="container py-4">
        <div class="row">
          <h1 class="text-center"><b>Metode Pembayaran</b></h1>         
          <div class="card">
            <div class="card-body">
                <div class="form-check py-1">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Bank
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Cash on Delivery
                    </label>
                  </div>
              <a href="#" class="btn btn-primary py-2">Done</a>
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