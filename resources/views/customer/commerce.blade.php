@extends('layouts.CustomerMaster')
@section('commerce', 'active')
@section('content')

    {{-- Produk --}}
    <div class="section beta">
      <div class="container pt-4 pb-4" style="display: flex; flex-direction: column; align-items: center;">        <div class="row align-items-center"> <!-- Added align-items-center class here -->
          <h1 class="text-center" style="color: #12498C" data-aos="fade-down"><b>PRODUK</b></h1>
        </div>
        <div class="row align-items-center justify-content-center pt-1" data-aos="fade-down"> <!-- Added justify-content-center class here -->
          <div class="col-md-4 ">
              <a href="{{ route('customer.glass_products') }}" >
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Gelas1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Gelas</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Gelas</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>

            </a>
          </div>

          <div class="col-md-4 ">
            <a href="{{ route('customer.vase_products') }}">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Keramik2.png" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Vas</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Vas</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>

            </a>
          </div>      

          <div class="col-md-4 ">
            <a href="{{ route('customer.utensil_products') }}">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Piring3.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Alat Makan</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Alat Makan</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>

            </a>
          </div>


        </div>
        <div class="row align-items-center pt-5" data-aos="fade-down"> 
          <div class="col-md-4 ">
            <a href="{{ route('customer.decoration_products') }}">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Decor1.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Hiasan</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Hiasan</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>

          </a>
          </div>

          <div class="col-md-4 ">
            <a href="{{ route('customer.custom_products.create') }}">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Decor2.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Custon</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Custom</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>

            </a>
            
          </div>
          <div class="col-md-4 ">
            <a href="{{ route('customer.other_products') }}">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="images/Gelas3.jpg" alt="Avatar" style="width:300px;height:300px;">
                    <h1>Lain-Lain</h1>
                  </div>
                  <div class="flip-card-back">
                    <h1>Lain-Lain</h1>
                    <p>Klik untuk Membeli</p>
                    <p>Click for start buying</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>

      {{-- Metode Pembayaran --}}
    <div class="section beta ">
      <div class="container py-4">
        <div class="row align-items-center">
          <h1 class="text-center" style="color: #12498C;" data-aos="fade-down"><b>METODE PEMBAYARAN</b></h1>         
            <div class="card d-inline-flex" data-aos="fade-down">
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