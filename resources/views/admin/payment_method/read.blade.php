@extends('layouts.adminMaster')
@section('title', 'payment_method-Dashboard')
@section('payment_method', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>

<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.payment_method.create') }}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus "></i></a>
    </div>
     <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($payment_methods->count() > 0) "payment_method-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($payment_methods as $payment_method)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $payment_method->name }}</td>
                                <td>{{ $payment_method->code }}</td>
                                <td><a href="{{ route('admin.payment_method.edit', ['payment_method'=>$payment_method->id]) }}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                                <td><a href="{{ route('admin.payment_method.delete', ['payment_method'=>$payment_method->id]) }}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                            </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection