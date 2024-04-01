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
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Update Form Custom Product</h6>
                <form action="{{ route('admin.custom_product.update', ['custom_product'=>$custom_product->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input name="price" value="{{ old('price')?? $custom_product->price }}" type="number" class="form-control" id="price" name="price"">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option>{{ old('status') ?? $custom_product->status }}</option>
                            <option value="aproved">Aproved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection