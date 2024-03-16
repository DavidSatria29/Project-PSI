@extends('layouts.adminMaster')
@section('title', 'Order-Dashboard')
@section('order', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid px-5 container-user">
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($orders->count() > 0) "order-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Product Name</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Total</th>
                            <th>Adress</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->product_details }}</td>
                            <td>{{ $order->amount_details }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->status }}</td>
                            <td><a href="{{ route('admin.order.edit', ['order'=>$order->id])}}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                            <td><a href="{{ route('admin.order.delete', ['order'=>$order->id])}}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection