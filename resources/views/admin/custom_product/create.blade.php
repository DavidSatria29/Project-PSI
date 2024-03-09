@extends('layouts.adminMaster')
@section('title', 'products-Dashboard')
@section('CustomProduct', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Create Form Product</h6>
                <form action="{{ route('admin.custom_product.store') }}" method="POST">
                    @csrf
                    <!-- <div class="mb-3">
                        <label for="id" class="form-label">CustomProduct ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}">
                        @error('id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                        <label for="amount" class="form-label">Amount</label>
                        <input mount="integer" class="form-control" id="mount" name="amount" value="{{ old('amount') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
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