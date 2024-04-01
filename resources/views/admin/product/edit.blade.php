@extends('layouts.adminMaster')
@section('title', 'product-Dashboard')
@section('product', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Edit Form Product</h6>
                <form action="{{ route('admin.product.update',['product'=>$product->id]) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">Product ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id') ?? $product->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name" name="name" value="{{ old('name') ??$product->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type" name="type" value="{{ old('type')??$product->type }}">
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input name="size" type="text" class="form-control" id="size" name="size" value="{{ old('size')??$product->size }}">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input name="color" type="text" class="form-control" id="type" name="type" value="{{ old('color')??$product->color }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" name="price" value="{{ old('price')??$product->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input name="stock" type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') ?? $product->stock  }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image Upload</label>
                        <input name="image" type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection