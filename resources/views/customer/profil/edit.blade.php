@extends('layouts.CustomerMaster')
@section('content')
<div class="container pt-4 px-4 container-user">
    <div class="row g-4">
        <div class="col-sm-6">
            <div class="rounded h-100 p-4">
                <h6 class="mb-4 text-center">Edit Form Profil</h6>
                <form action="{{ route('user.updateProfile',['id'=>$user->id]) }}" method="POST" class="">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') ?? $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">telepon</label>
                        <input type="number" class="form-control" id="telepon" name="phone" value="{{ old('phone') ?? $user->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="address" value="{{ old('adress') ?? $user->address }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection