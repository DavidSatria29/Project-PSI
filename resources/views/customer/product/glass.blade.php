@extends('layouts.CustomerMaster')
@section('commerce', 'active')
@section('content')

{{-- Start Glass product --}}
<div class="container pt-4">
    <div class="row align-items-center"> <!-- Added align-items-center class here -->
        <h1 class="text-center" style="color: #12498C"><b>Produk Gelas</b></h1>
    </div>
    <div class="row my-5 ">
      @forelse ($glasses as $glass)
        <div class="col-md-4 mx-2">
          <div class="card">
            <img src="{{asset('assets/img/products/'.$glass->image)}}" class="card-img-top" alt="Product Image" width="200px">
            <div class="card-body">
              <h5 class="card-title">{{ $glass->name }}</h5>
              <div class="row">
                <div class="col-3"><b>Tipe</b></div>
                <div class="col-9">{{ $glass->type }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Ukuran</b></div>
                <div class="col-9">{{ $glass->size }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Warna</b></div>
                <div class="col-9">{{ $glass->color }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Harga</b></div>
                <div class="col-9">{{ $glass->price }}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Stok</b></div>
                <div class="col-9">{{ $glass->stock }}</div>
              </div>
              <div class="row">
                <a href="{{ route('customer.add_to_cart', ['id' =>$glass->id ])}}" class="btn btn-primary">Tambahkan Ke keranjang</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-12">
          <div class="alert alert-info text-center">
            Maaf, produk gelas tidak tersedia
          </div>
        </div>
      @endforelse
    </div>
</div>
{{-- End Glass Product --}}
@endsection