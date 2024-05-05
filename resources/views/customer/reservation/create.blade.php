@extends('layouts.CustomerMaster')
@section('tourist', 'active')
@section('content')
{{-- start reservation here --}}
<div class="section default_h beta">
    <div class="container py-4">
        <h1 class="text-center" data-aos="fade-down" style="color: #12498C"><b>RESERVASI</b></h1>
        <div class="card" style="background-color: #12498C; color: white" data-aos="fade-right">
            <div class="card-body">
                <div class="row">
                    <div class="col-md" >
                        <form action="{{ route('customer.reservation.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="city">Kota</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="workshop_type">Workshop</label>
                                <input type="text" class="form-control" id="workshop_type" name="workshop_type" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy" required>
                            </div>
                            <button type="submit" class="btn" 
                            style="background: #f9bf29; color: black; margin-top: 2vh; "> Kirim </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end reservation here --}}
@endsection