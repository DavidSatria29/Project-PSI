@extends('layouts.adminMaster')
@section('title', 'product-Dashboard')
@section('product', 'active')
@section('content')
<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.product.create')}}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus "></i></a>
    </div>
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id="product-table" class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Pemilik</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products->count() > 0)
                        @foreach ($products as $product)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->user->name }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td><img src="{{ $product->image }}" alt="Product Image" style="max-width: 100px;"></td>
                            <td><a href="{{url('admin/products/edit/'.$product->id)}}" class="btn btn-success rounded-pill px-3"><i class="fa fa-pen"></i>Edit</a></td>
                            <td>
                                <form action="{{route('admin.product.delete',$product->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill px-3" type="submit"><i class="fa fa-pen"></i>Delete</button>
                                </form>
                            </td>
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