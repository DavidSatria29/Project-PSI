@extends('layouts.adminMaster')
@section('title', 'Reservation-Dashboard')
@section('reservation', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
<div class="container-fluid px-5 container-user">
    <div class="col-12 mt-1">
        <div class="rounded h-100 p-4">
            <div class="table-responsive">
                <table id=@if($reservations->count() > 0) "reservation-table" @else "empty-table"  @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Workshop_type</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->address }}</td>
                            <td>{{ $reservation->city }}</td>
                            <td>{{ $reservation->workshop_type }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td><a href="{{ route('admin.reservation.delete', ['reservation'=>$reservation->id])}}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection