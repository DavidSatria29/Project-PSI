@extends('layouts.adminMaster')
@section('title', 'Custom-Products-Dashboard')
@section('custom_product', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class=" bg-secondary roundedrounded h-100 p-4">
                <h6 class="mb-4">Create Form Custom Product</h6>
                <form action="{{ route('admin.custom_product.update', ['custom_product'=>$custom_product->id])}}" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{$custom_product->category_id}}">
                    <input type="hidden" name="user_id" value="{{$custom_product->user_id}}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" value="{{$custom_product->name}}" type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input name="amount" value="{{$custom_product->amount}}" type="number" class="form-control" id="name" name="name" value="{{ old('amount') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input name="description" value="{{$custom_product->description}} " type="text" class="form-control" id="type" name="type" value="{{ old('description') }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input name="image" value="{{$custom_product->image}}" type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection