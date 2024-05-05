@extends('layouts.CustomerMaster')
@section('commerce', 'active')
@section('content')

{{-- Start Glass product --}}
<div class="container pt-4">
    <div class="row align-items-center"> <!-- Added align-items-center class here -->
        <h1 class="text-center" style="color: #12498C"><b>Produk Lainnya</b></h1>
    </div>
    <div class="row my-5 ">
      @forelse ($others as $other)
        <div class="col-md-4 mx-2 mb-2">
          <div class="card mb-2">
            <div class="text-center">
              <img src="{{asset('assets/img/products/'.$other->image)}}" class="card-img-top" alt="Product Image" style="max-width: 200px">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $other->name }}</h5>
              <div class="row">
                <div class="col-3"><b>Tipe</b></div>
                <div class="col-9">{{ $other->type }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Ukuran</b></div>
                <div class="col-9">{{ $other->size }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Warna</b></div>
                <div class="col-9">{{ $other->color }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Harga</b></div>
                <div class="col-9">{{ $other->price }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Stok</b></div>
                <div class="col-9">{{ $other->stock }}</div>
              </div>
              <div class="row">
                <a href="{{ route('customer.add_to_cart', ['id' =>$other->id ])}}" class="btn btn-primary">Tambahkan Ke keranjang</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-12">
          <div class="alert alert-info text-center">
            Maaf, produk tidak tersedia
          </div>
        </div>
      @endforelse
    </div>
</div>
{{-- End Glass Product --}}
@endsection