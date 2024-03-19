@extends('layouts.adminMaster')
@section('title', 'Order-Dashboard')
@section('order', 'active')
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
                <h6 class="mb-4">Edit Form Order</h6>
                <form action="{{ route('admin.order.update', ['order'=>$order->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for=name" class="form-label">Status</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('status') ?? $order->status }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection