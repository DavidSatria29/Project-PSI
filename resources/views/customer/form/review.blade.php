@extends('layouts.CustomerMaster')
@section('home', 'active')
@section('content')
{{-- start reservation here --}}
<div class="section default_h beta">
    <div class="container my-4">
        <h1 class="text-center" data-aos="fade-down"><b>RESERVATION FORM</b></h1>
        <div class="card" style="background-color: #12498C; color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md" >
                        <form action="{{ route('customer.review.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user_id">User ID:</label>
                                <input type="number" class="form-control" id="user_id" name="user_id" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="produk">Jenis produk:</label>
                                <input type="text" class="form-control" id="produk" name="produk" required>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Product ID:</label>
                                <input type="text" class="form-control" id="product_id" name="product_id" required>
                            </div>
                            <div class="form-group">
                                <label for="custom_product_id">Custom Product ID:</label>
                                <input type="text" class="form-control" id="custom_product_id" name="custom_product_id">
                            </div>
                            <div class="form-group">
                                <label for="product_name">Product Name:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating:</label>
                                <input type="number" class="form-control" id="rating" name="rating" step="0.1" min="0" max="5" required>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-light mt-2">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end reservation here --}}
@endsection