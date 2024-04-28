@extends('layouts.CustomerMaster')
@section('content')

{{-- start status section --}}

<div class="container pt-4">
    <div class="row align-items-center"> <!-- Added align-items-center class here -->
        <h1 class="text-center" style="color: #12498C"><b>Produk Asli</b></h1>
    </div>
    <div class="row my-5 ">
      @forelse ($product_orders as $product_order)
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Pesanan ke-{{ $loop->iteration }}</h5>
              <div class="row">
                <div class="col-3"><b>Barang</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $product_order->product_details}}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Total</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $product_order->total}}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Status</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $product_order->status}}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Tanggal</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $product_order->updated_at}}</div>
              </div>
              <div class="row">
                  <a href="{{ route('customer.detail.orders', ['id'=>$product_order->id])}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-12">
          <div class="text-center">
            <p>Anda belum memesan barang apapun</p>
            <a href="{{ route('customer.commerce') }}" class="btn  btn-primary">Pesan</a>
          </div>
        </div>
      @endforelse
    </div>
</div>
<br>
<hr style="color: #12498C">
<div class="container pt-4">
    <div class="row align-items-center"> <!-- Added align-items-center class here -->
        <h1 class="text-center" style="color: #12498C"><b>Produk Custom</b></h1>
    </div>
    <div class="row my-5 ">
      @forelse ($custom_orders as $custom_order)
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pesanan ke-{{ $loop->iteration }}</h5>
              <div class="row">
                <div class="col-3"><b>Barang</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $custom_order->product_details}}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Total</b></div>
                <div class="col-1">:</div>
                <div class="col-8">{{ $custom_order->total}}</div>
              </div>
              <div class="row">
                <div class="col-3"><b>Status</b></div>
                <div class="col-9">{{ $custom_order->status}}</div>
              </div>
                <div class="row">
                    <div class="col-3"><b>Tanggal</b></div>
                    <div class="col-1">:</div>
                    <div class="col-8">{{ $custom_order->updated_at}}</div>
              <div class="row">
                  <a href="{{ route('customer.detail.orders', ['id'=>$custom_order->id])}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-12">
          <div class="text-center">
            <p>Anda belum Memasan Produk Custom</p>
            <a href="'{{ route('customer.custom_products.create') }}" class="btn btn-primary">Pesan</a>
          </div>
        </div>
      @endforelse
    </div>
</div>

{{-- end status section --}}
@endsection