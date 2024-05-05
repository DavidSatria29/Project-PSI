@extends('layouts.CustomerMaster')
@section('tourist', 'active')
@section('content')
{{-- Start Paket Wisata Section--}}
<div class="section beta default_h">
  <div class="container py-4">
    <div class="row">
      <h1 class="text-center" style="color: #12498C" data-aos="fade-down"><b>PAKET WISATA</b></h1>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;" data-aos="flip-right">
          <img src="images/paket1.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Ukir Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.200,000</h5>
            <p class="card-text text-justify" style="text-align: justify">Nikmati pengalaman mengukir keramik yang unik dan personal dalam paket wisata ini. Dibimbing oleh para ahli, Anda akan menemukan keindahan dalam setiap goresan yang Anda buat. Biaya: Rp.200,000.</p>
          </div>
        </div>
      </div>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;" data-aos="flip-right">
          <img src="images/paket2.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Kerajinan Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.300,000</h5>
            <p class="card-text text-justify" style="text-align: justify">Jelajahi seni kerajinan keramik yang menakjubkan dalam paket wisata ini. Dari proses pembuatan hingga finishing, Anda akan belajar teknik-teknik yang memukau dari para perajin terampil. Biaya: Rp.300,000.</p>
          </div>
        </div>
      </div>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;" data-aos="flip-right">
          <img src="images/paket3.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Ukir dan Bikin Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.400,000</h5>
            <p class="card-text text-justify" style="text-align: justify" >Dapatkan pengalaman lengkap dengan mengukir dan membuat keramik sendiri dalam paket wisata ini. Temukan kebahagiaan dalam menciptakan karya seni Anda sendiri, mulai dari konsep hingga produk jadi. Biaya: Rp.400,000.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Paket Wisata Section --}}

{{-- Start Workshop Keramik Section --}}
<div class="blog-section">
  <div class="container">
      <div class="row mb-3">
          <h1 class="section-title text-center" style="color: #12498C"data-aos="fade-down"><b>WORKSHOP KERAMIK</b></h1>
          <div class="col-md-6">
          </div>
          <div class="col-md-6 text-start text-md-end" data-aos="fade-left">
              <a href="#" class="more">View All Workshop</a>
          </div>
      </div>

      <div class="row">

          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0"data-aos="flip-right">
              <div class="post-entry">
                  <a href="#" class="post-thumbnail">
                      <div class="card" style="width: 18rem;">
                          <img src="images/Paket Edukasi.png" class="card-img-top p-3" alt="...">
                      </div>
                  </a>
              </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0" data-aos="flip-right">
              <div class="post-entry">
                  <a href="#" class="post-thumbnail">
                      <div class="card" style="width: 18rem;">
                          <img src="images/Paket Edukasi.png" class="card-img-top p-3" alt="...">
                      </div>
                  </a>
              </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0" data-aos="flip-right">
              <div class="post-entry">
                  <a href="#" class="post-thumbnail">
                      <div class="card" style="width: 18rem;">
                          <img src="images/Paket Edukasi.png" class="card-img-top p-3" alt="...">
                      </div>
                  </a>
              </div>
          </div>

      </div>
      <div class="row px-3">
          <div class="col-md-4">
            <div class="row justify-content-center my-4" data-aos="fade-right"> <!-- Added a new row for centering the button -->
              <a href="/reservasi" class="btn btn-primary">Reservasi Sekarang</a>
            </div>
          </div>
          <div class="col-md-2">

        
            <div class="row justify-content-center my-4" data-aos="fade-right"> <!-- Added a new row for centering the button -->
              <a href="{{ route('customer.reservation.show') }}" class="btn btn-primary">Lihat Reservasi</a>
            </div>

          </div>
      </div>
  </div>
</div>

{{-- end Workshop Keramik Section --}}
@endsection