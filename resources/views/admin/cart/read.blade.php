@extends('layouts.adminMaster')
@section('title', 'Cart-Dashboard')
@section('cart', 'active')
@section('content')
<div class="container-fluid px-5 container-user">
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($carts->count() > 0) "cart-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($carts as $cart)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cart->product_name }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->total }}</td>
                            <td>{{ $cart->status }}</td>
                            <td><a href="{{ route('admin.cart.delete', ['cart'=>$cart->id])}}" class="btn btn-danger rounded-pill px-3"><i class="fa fa-pen"></i>Delete</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection