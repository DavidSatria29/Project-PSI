@extends('layouts.craftmanMaster')
@section('title', 'Custom-Product-Dashboard')
@section('custom_product', 'active')
@section('content')
<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid px-5 container-user">
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class=" table table-responsive">
                <table id=@if($customProducts->count() > 0) "custom_product-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($customProducts as $custom_product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $custom_product->user_id }}</td>
                            <td>{{ $custom_product->name }}</td>
                            <td>{{ $custom_product->amount }}</td>
                            <td>{{ $custom_product->description }}</td>
                            <td><img src="{{ $custom_product->image }}" alt="Product Image" style="max-width: 100px;"></td>
                            <td><a href="{{ route('craftman.custom_product.edit', ['custom_product'=>$custom_product->id]) }}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                            <td><a href="{{ route('craftman.custom_product.delete', ['custom_product'=>$custom_product->id])}}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection