@extends('layouts.CustomerMaster')
@section('tourist', 'active')
@section('content')
{{-- Start Paket Wisata Section--}}
<div class="section beta default_h">
  <div class="container py-4">
    <div class="row">
      <h1 class="text-center" style="color: #12498C"><b>PAKET WISATA</b></h1>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;">
          <img src="images/paket1.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Ukir Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.200,000</h5>
            <p class="card-text text-justify">Nikmati pengalaman mengukir keramik yang unik dan personal dalam paket wisata ini. Dibimbing oleh para ahli, Anda akan menemukan keindahan dalam setiap goresan yang Anda buat. Biaya: Rp.200,000.</p>
          </div>
        </div>
      </div>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;">
          <img src="images/paket2.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Kerajinan Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.300,000</h5>
            <p class="card-text text-justify">Jelajahi seni kerajinan keramik yang menakjubkan dalam paket wisata ini. Dari proses pembuatan hingga finishing, Anda akan belajar teknik-teknik yang memukau dari para perajin terampil. Biaya: Rp.300,000.</p>
          </div>
        </div>
      </div>
      <div class="col d-flex" style="justify-content: center">
        <div class="card" style="width: 18rem;">
          <img src="images/paket3.png" class="card-img-top p-3" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Ukir dan Bikin Keramik</h4>
            <h5 class="card-text text-center" style="color: red">Rp.400,000</h5>
            <p class="card-text text-justify">Dapatkan pengalaman lengkap dengan mengukir dan membuat keramik sendiri dalam paket wisata ini. Temukan kebahagiaan dalam menciptakan karya seni Anda sendiri, mulai dari konsep hingga produk jadi. Biaya: Rp.400,000.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Paket Wisata Section --}}

    {{-- Start Workshop Keramik Section --}}
    <div class="section beta default_h">
      <div class="container py-4">
        <div class="row">
          <h1 class="text-center" style="color: #12498C"><b>WORKSHOP KERAMIK</b></h1>
          <div class="col d-flex" style="justify-content: center">
            <div class="card mx-1" style="width: 18rem;">
              <img src="images/Paket Edukasi.png" class="card-img-top" alt="...">
            </div>
            <div class="card mx-1" style="width: 18rem;">
              <img src="images/Paket Edukasi.png" class="card-img-top" alt="...">
            </div>
            <div class="card mx-1" style="width: 18rem;">
              <img src="images/Paket Edukasi.png" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
        <div class="row justify-content-center my-4"> <!-- Added a new row for centering the button -->
          <a href="/reservasi" class="btn btn-primary btn-lg">Reservasi Sekarang</a>
        </div>
      </div>
    </div>
    {{-- end Workshop Keramik Section --}}
@endsection