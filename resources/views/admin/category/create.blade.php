@extends('layouts.adminMaster')
@section('title', 'categories-Dashboard')
@section('category', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4">Create Form Categorie</h6>
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input class="form-control" id="description" name="description" value="{{ old('description') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    @endsection