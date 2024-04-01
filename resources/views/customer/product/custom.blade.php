@extends('layouts.CustomerMaster')
@section('commerce', 'active')
@section('content')


<div class="container pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Create Form Custom Product</h6>
                <form action="{{ route('customer.custom_products.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Ukuran</label>
                        <input type="text" class="form-control" id="size" name="size" value="{{ old('size') }}">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Warna</label>
                        <input type="text" class="form-control" id="color" name="color" value="{{ old('color') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" cols="100" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">jumlah</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image Upload</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection