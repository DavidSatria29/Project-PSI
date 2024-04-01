@extends('layouts.CustomerMaster')
@section('home', 'active')
@section('content')
{{-- start reservation here --}}
<div class="section default_h beta">
    <div class="container my-4">
        <h1 class="text-center"><b>RESERVATION FORM</b></h1>
        <div class="card" style="background-color: #12498C; color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <form action="{{ route('reservation.store') }}" method="POST"> --}}
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="workshop">Jenis Workshop:</label>
                                <input type="text" class="form-control" id="workshop" name="workshop" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="booking_date">Tanggal Booking:</label>
                                <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                            </div>
                            <div class="form-group">
                                <label for="city">Kota:</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>RINCIAN</h4>
                        <table class="table">
                            <thead>
                                <tr style="color: white">
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color: white">
                                    <td>WORKSHOP A</td>
                                    <td>$650</td>
                                </tr>
                                <tr style="color: white">
                                    <td>WORKSHOP B</td>
                                    <td>$1100</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Subtotal: $1750</p>
                        <hr>
                        <p>Shipping: Free</p>
                        <hr>
                        <p><strong>Total: $1750</strong></p>
                        <hr>
                        <p><strong>Payment Method</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="bank_payment" value="bank">
                            <label class="form-check-label" for="bank_payment">
                                <img  class="mx-5 my-3 img-fluid" style="max-height: 5vh; " src="images/Visa.png" alt="Bank Transfer">
                                <img  class="mx-5 my-3 img-fluid" style="max-height: 5vh; " src="images/MC.png" alt="Bank Transfer">

                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="cod">
                            <label class="form-check-label" for="cash_on_delivery">
                                <img  class="mx-5 my-3 img-fluid" style="max-height: 5vh; " src="images/COD.png" alt="Cash on Delivery">
                            </label>
                        </div>
                        <br>
                        <button type="button" class="btn btn-success">Reservasi Sekarang</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end reservation here --}}
@endsection
