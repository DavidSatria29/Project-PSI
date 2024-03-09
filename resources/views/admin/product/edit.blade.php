@extends('layouts.adminMaster')
@section('title', 'product-Dashboard')
@section('product', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Form Product</h6>
                <form action="{{ route('admin.product.update',$product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{$product->category_id}}">
                    <input type="hidden" name="user_id" value="{{$product->user_id}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" value="{{$product->name}}" type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" value="{{$product->type}} " type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" value="{{$product->price}}" type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input name="stock" value="{{$product->stock}}" type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input name="image" value="{{$product->image}}" type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection