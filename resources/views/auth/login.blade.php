@extends('layouts.authMaster')
@section('title', 'Login')
@section('content')
   
    <!----------------------- Main Container -------------------------->
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-2">
    
        <!----------------------- Login Container -------------------------->
    
           <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
    
           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #cd6e10;">
               <div class="featured-image mb-3">
                <img src="{{ asset('img/LOGO.png') }}" class="img-fluid" style="width: 200px;">
               </div>
               <p class="text-white fs-2 text-center" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Selamat Datang di Website SABUMI</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Silahkan Masuk Terlebih Dahulu.</small>
           </div> 
    
        <!-------------------- ------ Right Box ---------------------------->
            
           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2 class="text-center">Masuk</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf 
                        <div class="input-group mb-1">
                            <input type="text" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="LoginEmail" placeholder="Email address" name="email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="d-inline-block mt-0">
                                <small id="pesanEmail"></small>
                            </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" placeholder="Password" id="LogPass" name="password" required autocomplete="current-password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div>
                                <small id="PesanPassword" class="d-inline-block mt-0"></small>
                            </div>
                        <div class="input-group mb-2 d-flex justify-content-between ms-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="form-check-label text-secondary"><small>{{ __('Remember Me') }}</small></label>
                            </div>
                        </div>
                        <div class=" input-group mb-3 d-flex justify-content-center">
                            <div class="justify-content-center text-center">
                                <button type="submit" class="btn btn-primary" id="tombol">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                    </form>
                    <div class="row">
                        <div class="col-7">
                            <small>{{ __('Belum Punya Akun ?') }} <a href="{{ route('register') }}">{{ __('Daftar') }}</a></small>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
@endsection
