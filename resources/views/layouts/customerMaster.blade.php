<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link rel="icon" type="image/x-icon" href="{{ asset('../assets/img/logo/Logo.png') }}" />
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<title>SIDIKAR</title>
</head>
<body>
  		<!-- Start Header/Navigation -->
      <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
          <a class="navbar-brand" style="color: #12498C" href="{{ route('customer.home') }}">CERAMIC DINOYO</a>
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color: #12498C"></i></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto ">
              <li class="nav-item @yield('home')">
                <a class="nav-link" href="{{ route('customer.home') }}">Home</a>
              </li>
              <li class="nav-item @yield('commerce')"><a class="nav-link" href="{{ route('customer.commerce') }}">E-Commerce</a></li>
              <li class="nav-item @yield('tourist')"><a class="nav-link" href="{{ route('customer.tourist') }}">Pariwisata</a></li>
              <li class="nav-item @yield('contact')"><a class="nav-link" href="{{ route('customer.contact') }}">Kontak</a></li>
            </ul>
			<ul class="navbar-nav ms-auto mx-auto custom-navbar-nav">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
				    	<li><a class="nav-link" style="color: #12498C" href="{{ route('customer.profile') }}"><i class="fa-solid fa-user"></i></a></li>
              			<li><a class="nav-link" style="color: #12498C" href="{{ route('customer.cart') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Selamat Datang, {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                      {{-- <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                      </li> --}}
                  @endguest
              </ul>
            {{-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

            </ul> --}}
			
          </div>
        </div>
          
      </nav>
      <!-- End Header/Navigation -->

   		<!-- Start Hero Section -->
       <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5" data-aos="fade-right">
                    <div class="intro-except">
                        <h1>Kampung Wisata <span clsas="d-block">Keramik Dinoyo</span></h1>
                        <p class="mb-4">Kampung Wisata Keramik Dinoyo merupakan destinasi wisata yang berada di Kota Malang.</p>                        
						<p><a href="{{ route('customer.commerce') }}" class="btn btn-secondary me-2">Shop Now</a>
						<a href="{{ route('customer.tourist') }}" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-md-7" style="align-content: center" data-aos="fade-left">
                    <div class="hero-img-wrap" style="display: flex; justify-content: flex-end">
                        <img src="{{ asset('images/Keramikdummy.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

<main>
    @yield('content')
</main>

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="{{ asset('images/Keramikdummy.png') }}" alt="Image" class="img-fluid">
				</div>

				<div class="row">

				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">
							<img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="..." style="width: 150px; height: 150px">	
						</a></div>
						<p class="mb-4" style="color: white; text-align: justify">Kampung Keramik Dinoyo adalah sebuah kampung wisata di Kota Malang, Jawa Timur yang terkenal dengan kerajinan keramiknya.
							Kampung ini terletak di Kelurahan Dinoyo, Kecamatan Lowokwaru, dan dihuni oleh banyak pengrajin keramik yang terampil.</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#"><b>Company</b></a></li>
									<li><a href="#">Sejarah</a></li>
									<li><a href="#">Lokasi dan Operasional</a></li>
									<li><a href="#">Tiket masuk</a></li>
									<li><a href="#">Fasilitas</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#"><b>Resource</b></a></li>
									<li><a href="#">Produk Keramik</a></li>
									<li><a href="#">Wisata</a></li>
									<li><a href="#">Workshop Keramik</a></li>
									<li><a href="#">Pemesanan Produk</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">

						<div class="col-lg-6 text-center text-lg-start">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">About Us</a></li>
								<li class="me-4"><a href="#">Contact</a></li>								
								<li class="me-4"><a href="#">Privacy Policy</a></li>
								<li class="me-4"><a href="#">Sitemap</a></li>
								<li ><a href="#">Terms of Use</a></li>
							</ul>
						</div>
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-end" style="color: white"> &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved.</p>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

		<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    	<script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    	<script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<script>
			new DataTable('#cart-table');
		</script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		  </script>
		<script>
						// Initialize the carousel only on mobile devices
			$(document).ready(function() {
			if ($(window).width() <= 768) {
				$('.carousel').carousel();
			}
			});

		</script>
		@include('sweetalert::alert')
</body>
</html>