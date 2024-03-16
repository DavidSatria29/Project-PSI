@extends('layouts.adminMaster')
@section('title', 'product-Dashboard')
@section('product', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.product.create')}}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus "></i></a>
    </div>
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($products->count() > 0) "product-table" @else "empty-table" @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td><img src="{{asset('assets/img/products/'.$product->image)  }}" alt="Product Image" style="max-width: 40px;"></td>
                            <td><a href="{{route('admin.product.edit', ['product'=>$product->id])}}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                            <td><a href="{{route('admin.product.delete', ['product'=>$product->id])}}" class="btn btn-success rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection