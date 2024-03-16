@include('layout.header')

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

    @include('layout.footer')