@extends('layouts.adminMaster')
@section('title', 'User-Dashboard')
@section('user', 'active')
@section('content')
<div class="container-fluid px-5 container-user">
    <div class="container mt-3">
        <a href="{{ route('admin.user.create') }}" class="btn btn-primary rounded-pill px-3"><i class="bx bx-plus "></i></a>
    </div>
     <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($users->count() > 0) "user-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alias</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->alias }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td><a href="{{ route('admin.user.edit', ['user'=>$user->id]) }}" class="btn btn-success rounded-pill px-3"><i class="bx bx-edit-alt"></i></a></td>
                                <td><a href="{{ route('admin.user.delete', ['user'=>$user->id]) }}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                            </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection