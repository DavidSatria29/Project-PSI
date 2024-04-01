@extends('layouts.CustomerMaster')
@section('home', 'active')
@section('content')
{{-- start reservation here --}}
<div class="section default_h beta">
    <div class="container my-4">
        <h1 class="text-center"><b>RESERVATION FORM</b></h1>
        <div class="card" style="background-color: #12498C; color: white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        {{-- <form action="{{ route('reservation.store') }}" method="POST"> --}}
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="workshop">Jenis Workshop:</label>
                                <input type="text" class="form-control" id="workshop" name="workshop" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="button" class="btn btn-light mt-2">Kirim</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- end reservation here --}}
@endsection
