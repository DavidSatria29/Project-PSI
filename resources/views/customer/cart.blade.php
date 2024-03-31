@extends('layouts.CustomerMaster')
@section('content')

<style>
  .custom-input {
    font-size: 12px; /* Atur ukuran font */
    padding: 0.25rem 0.5rem; /* Atur padding */
    width: 50px; /* Atur lebar */
}

.custom-input-other {
    font-size: 12px; /* Atur ukuran font */
    padding: 0.25rem 0.5rem; /* Atur padding */
    width: 100px; /* Atur lebar */
}
</style>
<div class="untree_co-section before-footer-section">
  <div class="container px-5 container-user">
      <div class="col-12 mt-1">
          <div class="rounded h-100 p-4">
              <div class="table-responsive px-5" style="background-color: white">
                  <table id=@if($mergedData->count() > 0) "cart-table" @else "empty-table"  @endif class="table table-bordered text-center">
                      <thead>
                          <tr>
                              <th>NO</th>
                              <th>Gambar</th>
                              <th>Nama Produk</th>
                              <th>Harga</th>
                              <th>Jumlah</th>
                              <th>Total</th>
                              <th>Update</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($mergedData as $data)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><img src="{{asset('assets/img/products/'.$data['image'])}}" class="" alt="Product Image" width="100px"></td>
                              <td>{{ $data['product_name'] }}</td>
                              <td><input type="number" class="form-control text-center form-control-sm custom-input-other mx-auto" name="price" id="Price" value="{{ old('price')??$data['price'] }}" readonly></td>
                              <form action="{{ route('customer.cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                <td><input type="number" class="form-control text-center form-control-sm custom-input mx-auto" name="amount" id="Amount" value="{{ old('amount')??$data['amount'] }}"></td>
                                <td><input type="number" class="form-control text-center form-control-sm custom-input-other mx-auto" name="total" id="Total" value="{{ old('total')??$data['total'] }}" readonly></td>
                                <td><button type="submit" class="btn btn-primary px-1" id="button">Simpan</button></td>
                              </form>
                              <td><a href="{{ route('customer.cart.delete', ['id'=>$data['id']])}}" role="button" class="btn btn-danger rounded-pill px-2"><i class="fa fa-eraser"></i></a></td>
                          </tr>
                          @empty
                          <tr>
                              <td colspan="8" class="text-center">Data Kosong</td>
                          </tr>
                          @endforelse
                      </tbody>
                  </table>
                  <div class="container text-center mb-2 mt-2">
                    <a href="{{ route('customer.checkout') }}" class="btn btn-primary">Check Out</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
      document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan semua elemen input jumlah dan harga
        const amountInputs = document.querySelectorAll("input[name='amount']");
        const priceInputs = document.querySelectorAll("input[name='price']");
        const totalInputs = document.querySelectorAll("input[name='total']");

        // Menambahkan event listener untuk setiap input jumlah
        amountInputs.forEach(function(input, index) {
            input.addEventListener('input', function() {
                // Mendapatkan nilai jumlah dari input
                const amount = parseInt(input.value);

                // Mendapatkan harga per barang dari input harga
                const price = parseFloat(priceInputs[index].value);

                // Menghitung total berdasarkan jumlah barang dan harga per barang
                const total = amount * price;

                // Memperbarui nilai input total
                totalInputs[index].value = total; // Di sini menggunakan toFixed(2) untuk membatasi desimal menjadi dua angka
            });
        });
    });

</script>
@endsection