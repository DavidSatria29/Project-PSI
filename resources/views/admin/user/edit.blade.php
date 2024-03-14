@extends('layouts.adminMaster')
@section('title', 'User-Dashboard')
@section('user', 'active')
@section('content')
<div class="container-fluid pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class=" rounded h-100 p-4">
                <h6 class="mb-4">Edit Form User</h6>
                <form action="{{ route('admin.user.update', ['user'=>$user->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for=name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="alias" class="form-label">Alias</label>
                        <input type="text" class="form-control" id="alias" name="alias" value="{{ old('alias') ?? $user->alias }}">
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" id="role" name="role" value="{{ old('role') ?? $user->role }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection