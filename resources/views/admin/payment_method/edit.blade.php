@extends('layouts.adminMaster')
@section('title', 'payment_method-Dashboard')
@section('payment_method', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class=" rounded h-100 p-4">
                <h6 class="mb-4">Edit Form Payment Method</h6>
                <form action="{{ route('admin.payment_method.update', ['payment_method'=>$payment_method->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $payment_method->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="number" class="form-control" id="code" name="code" value="{{ old('code') ?? $payment_method->code }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection