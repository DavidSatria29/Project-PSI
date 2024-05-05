@extends('layouts.adminMaster')
@section('title', 'payment_conformation-Dashboard')
@section('payment_confirmation', 'active')
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
                <table id=@if($payment_confirmations->count() > 0) "payment_confirmation-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User Id</th>
                            <th>Order Id</th>
                            <th>Payment Method</th>
                            <th>Image</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($payment_confirmations as $payment_confirmation)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $payment_confirmation->user_id }}</td>
                                <td>{{ $payment_confirmation->order_id }}</td>
                                <td>{{ $payment_confirmation->payment_method }}</td>
                                <td><img src="{{ asset('assets/img/payment_confirmations/'.$payment_confirmation->image) }}" alt="Payment Confirmation Image" style="max-width: 250px;"></td>
                                <td>{{ $payment_confirmation->message }}</td>
                                <td>{{ $payment_confirmation->status }}</td>
                                <td><a href="{{ route('admin.payment_confirmation.edit', ['payment_confirmation'=>$payment_confirmation->id]) }}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                                <td><a href="{{ route('admin.payment_confirmation.delete', ['payment_confirmation'=>$payment_confirmation->id]) }}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
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