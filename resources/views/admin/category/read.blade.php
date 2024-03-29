@extends('layouts.adminMaster')
@section('title', 'Category-Dashboard')
@section('category', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.category.create')}}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus "></i></a>
    </div>
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($categories->count() > 0) "category-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td><a href="{{ route('admin.category.edit', ['category'=>$category->id]) }}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                                <td><a href="{{ route('admin.category.delete', ['category'=>$category->id])}}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
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