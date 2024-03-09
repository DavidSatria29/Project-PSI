@extends('layouts.adminMaster')
@section('title', 'User-Dashboard')
@section('category', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Form category</h6>
                <form action="{{ route('admin.category.update', ['category'=>$category->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for=name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $category->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('role') ?? $category->description}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection