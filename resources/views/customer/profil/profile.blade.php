@extends('layouts.CustomerMaster')
@section('content')

<div class="section beta default_h">
    <div class="container d-flex justify-content-center mt-2">
      <div class="card" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Profil</h5>
          <div class="container">
            <div class="row">
              <div class="col-3"><b>Nama</b></div>
              <div class="col-9">{{ $user->name }}</div>
            </div>
            <div class="row">
              <div class="col-3"><b>Email</b></div>
              <div class="col-9">{{ $user->email }}</div>
            </div>
            <div class="row">
              <div class="col-3"><b>Telepon</b></div>
              <div class="col-9">{{ $user->phone }}</div>
            </div>
            <div class="row">
              <div class="col-3"><b>Alamat</b></div>
              <div class="col-9">{{ $user->address }}</div>
            </div>
          </div>
          <div class="mt-2 text-center">
            <a href="{{ route('user.editProfile',['id'=>$user->id]) }}" class="btn btn-primary">Edit Profil</a>
            <a href="{{ route('user.status') }}" class="btn btn-primary">Status Order</a>
          </div>
        </div>
      </div>
        {{-- <div class="row py-5">
            <h1 class="text-center text-uppercase" style="color: #12498C"><b>My Profile</b></h1>
            <h5 class="d-flex justify-content-end my-5" style="color: #12498C"><b>Welcome, Customer</b></h5>
            <div class="col-4">
                <ul class="list group">
                    <li class="list-group-item mb-3"><a href="" class="btn btn-primary">Ubah Akun</a></li>
                    <li class="list-group-item"><a href="{{ route('user.status') }}" class="btn btn-primary">Status Order</a></li>
                </ul>
            </div>
            <div class="col-8">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form6Example1" class="form-control" />
                          <label class="form-label" for="form6Example1">First name</label>
                        </div>
                      </div>
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="form6Example2" class="form-control" />
                          <label class="form-label" for="form6Example2">Last name</label>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Text input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="form6Example4" class="form-control" />
                      <label class="form-label" for="form6Example4">Address</label>
                    </div>
                  
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form6Example5" class="form-control" />
                      <label class="form-label" for="form6Example5">Email</label>
                    </div>
                  
                    <!-- Number input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="number" id="form6Example6" class="form-control" />
                      <label class="form-label" for="form6Example6">Phone</label>
                    </div>
                  
                    <!-- Message input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                      <label class="form-label" for="form6Example7">Additional information</label>
                    </div>
                  
                   
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Edit your profile</button>
                  </form>
            </div>
        </div> --}}
    </div>
</div>
@endsection