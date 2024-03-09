@extends('layouts.adminMaster')
@section('title', 'products-Dashboard')
@section('product', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Create Form Product</h6>
                <form action="{{ route('admin.product.store') }}" method="POST">
                    @csrf
                    <!-- <div class="mb-3">
                        <label for="id" class="form-label">Product ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}">
                    </div> -->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Select Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Select User</label>
                        <select class="form-control" id="user_id" name="user_id">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    @endsection