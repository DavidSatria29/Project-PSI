@extends('layouts.CustomerMaster')
@section('content')


<div class="container pt-4 px-4 container-user d-flex justify-content-center">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <div class="card" style="width: 500px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pembayaran</h5>
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
                                <div class="col-3">Total Barang</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    <p>{{ $order->total }}</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('customer.payment.update.orders', ['id'=>$order->id]) }}" method="POST" class="">
                            @csrf
                            <div class="input-group mb-3">
                                <label for="address" class="input-group-text">Alamat</label>
                                <input type="text" class="form-control form-control-sm custom-input" id="address" name="address" value="{{ old('address')??$order->address }}">
                            </div>
                            <div class=" input-group mb-3">
                                <label for="payment_method" class="input-group-text">Metode Pembayaran</label>

                                <select name="payment_method" id="payment_method" class="form-select form-control-sm custom-input">
                                    <option>--Silahkan pilih--</option>
                                    @foreach ($payment_methods as $payment_method)
                                        <option value="{{ $payment_method->name }}">{{ $payment_method->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
