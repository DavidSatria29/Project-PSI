@include('layout.header')
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

    {{-- Start Workshop Keramik Section --}}
    <div class="section beta default_h">
      <div class="container py-4">
        <div class="row">
          <h1 class="text-center"><b>Workshop Keramik</b></h1>
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

      </div>
    </div>
    {{-- end Workshop Keramik Section --}}
    
    @include('layout.footer')