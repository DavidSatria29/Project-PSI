@extends('layouts.CustomerMaster')
@section('content')
<div class="container pt-4 px-4 container-user d-flex justify-content-center">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <div class="card " style="width:500px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Konfirmasi Pembayaran</h5>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4">Kode Pembayaran</div>
                                <div class="col-1">:</div>
                                <div class="col-7">
                                    <p>{{ $paymen_method->code }}</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('customer.confirmation.store.orders', ['id'=>$order->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="{{ $order->payment_method }}">
                            <div class="input-group mb-3">
                                    <label for="message" class="input-group-text">Pesan Tambahan</label>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                    <label for="image" class="input-group-text">Upload Bukti Pembayaran</label>
                                    <input type="file" name="image" id="image">
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