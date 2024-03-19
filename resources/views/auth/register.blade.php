@extends('layouts.authMaster')
@section('title', 'Register')
@section('content')
<!----------------------- Main Container -------------------------->

<div class="container d-flex justify-content-center align-items-center min-vh-100 mt-2">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #12498C;">
            <div class="featured-image mb-3">
            <img src="{{ asset('../assets/auth/img/Logo.png') }}" class="img-fluid" style="width: 200px;">
            </div>
            <p class="text-white fs-2 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Selamat Datang di Website SIDIKAR</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Silahkan daftar terlebih dahulu</small>
        </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2 class="text-center">Daftar</h2>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf 
                    <div class="input-group mb-1">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror" value="{{ old('name') }}" id="RegNama" placeholder="Name" name="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-inline-block mt-0">
                        <small id="pesannama"></small>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="RegEmail" placeholder="Email address" name="email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-inline-block mt-0">
                        <small id="PesanEmail"></small>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" placeholder="Password" id="RegPass" name="password" required autocomplete="current-password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <small id="PesanPass" class="d-inline-block mt-0"></small>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" id="RegPass2" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div>
                        <small id="PesanPass2" class="d-inline-block mt-0"></small>
                    </div>
                    <div class=" input-group mb-3 d-flex justify-content-center mt-2">
                        <div class="justify-content-center">
                            <button type="submit" class="btn text-white align-center" style="background-color: #12498C" id="tombol">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-7">
                        <small>{{ __('Sudah Punya Akun ?') }} <a href="{{ route('login') }}">{{ __('Masuk') }} </a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
