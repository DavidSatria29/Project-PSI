@extends('layouts.adminMaster')
@section('title', 'product-Dashboard')
@section('CustomProduct', 'active')
@section('content')
<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.custom_product.create') }}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus"></i> Tambah Produk</a>
    </div>
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id="custom_product-table" class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kategori</th>
                            <th>Pemilik</th>
                            <th>Nama</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @if ($customProducts->count() > 0)
                        @foreach ($customProducts as $custom_product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $custom_product->category->name }}</td>
                            <td>{{ $custom_product->user->name }}</td>
                            <td>{{ $custom_product->name }}</td>
                            <td>{{ $custom_product->amount }}</td>
                            <td>{{ $custom_product->description }}</td>
                            <td><img src="{{ $custom_product->image }}" alt="Product Image" style="max-width: 100px;"></td>
                            <td><a href="{{ route('admin.custom_product.edit', ['custom_product'=>$custom_product->id]) }}" class="btn btn-success rounded-pill px-3"><i class="fa fa-pen"></i>Edit</a></td>
                            <td><a href="{{ route('admin.custom_product.delete', ['custom_product'=>$custom_product->id])}}" class="btn btn-danger rounded-pill px-3"><i class="fa fa-pen"></i>Delete</a></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="10" class="text-center">Data Kosong</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection