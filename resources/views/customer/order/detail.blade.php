@extends('layouts.CustomerMaster')
@section('content')

<div class="container pt-4 px-4 container-user d-flex justify-content-center">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <div class="card" style="width: 600px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Detail Pemesanan</h5>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Detail Barang</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <ul>
                                        @foreach ($product_details as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Jumlah Barang</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <ul>
                                        @foreach ($amount_details as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Jumlah Barang</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <p>{{ $order->total }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Alamat Rumah</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <p>{{ $order->address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Metode Pembayaran</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <p>{{ $order->payment_method }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">Status Barang</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <p>{{ $order->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection