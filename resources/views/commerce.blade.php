@include('layout.header')

    {{-- Produk --}}
    <div class="section beta default_h">
      <div class="container pt-4 pb-4">
        <div class="row align-items-center"> <!-- Added align-items-center class here -->
          <h1 class="text-center" style="color: #12498C"><b>Produk</b></h1>
        </div>
        <div class="row align-items-center pt-5"> <!-- Added align-items-center class here -->
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-whiskey-glass fa-5x"></i><br>Gelas</button>
                <button type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-seedling fa-5x"></i><br>Vas</button>
                <button type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-utensils fa-5x"></i><br>Alat Makan</button>
                <button type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-palette fa-5x"></i><br>Custom</button>
                <button type="button" class="btn btn-outline-primary p-5"><i class="fa-solid fa-hat-wizard fa-5x"></i><br>Hiasan</button>
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
              <div class="card-body">
                <img src="images/Visa.png" class="mx-2" style="max-height: 3vh" alt="">
                <img src="images/MC.png" class="mx-2" style="max-height: 3vh" alt="">    
                  <div class="form-check my-5">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        <b>Bank</b>
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        <b>Cash on Delivery</b>
                      </label>
                    </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    @include('layout.footer')