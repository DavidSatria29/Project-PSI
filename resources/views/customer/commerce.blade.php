@extends('layouts.CustomerMaster')
@section('commerce', 'active')
@section('content')

    {{-- Produk --}}
    <div class="section beta default_h">
      <div class="container pt-4 pb-4">
        <div class="row align-items-center"> <!-- Added align-items-center class here -->
          <h1 class="text-center" style="color: #12498C"><b>Produk</b></h1>
        </div>
        <div class="row align-items-center pt-5"> <!-- Added align-items-center class here -->
            <div class="d-grid gap-2 d-md-block text-center" role="group" aria-label="Basic outlined example">
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fas fa-wine-glass fa-5x"></i><br>Gelas</a>
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-whiskey-glass fa-5x"></i><br>Vas</a>
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-utensils fa-5x"></i><br>Alat Makan</a>
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fas fa-snowman fa-5x"></i><br>Hiasan</a>
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fas fa-file-alt fa-5x"></i><br>Custom</a>
                <a href="{{ route('user.commerce') }}" type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-palette fa-5x"></i><br>Lain-lain</a>
              </div>

        </div>

      </div>
    </div>

      {{-- Metode Pembayaran --}}
    <div class="section beta default_h">
      <div class="container py-4">
        <div class="row align-items-center" style="min-height: 50vh">
          <h1 class="text-center" style="color: #12498C"><b>Metode Pembayaran</b></h1>         
            <div class="card">
              <div class="card-body justify-content" style="min-height: 200px">
                <img src="images/Visa.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">
                <img src="images/MC.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">
                <img src="images/shopee.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">    
                <img src="images/tokopedia.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">    
                <img src="images/BCA.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">    
                <img src="images/BRI.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">    
                <img src="images/BNI.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">
                <img src="images/OVO.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">
                <img src="images/COD.png" class="mx-5 my-3 img-fluid" style="max-height: 5vh; " alt="">
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection