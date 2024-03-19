@extends('layouts.craftmanMaster')
@section('title', 'Report-Dashboard')
@section('report', 'active')
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
                <table id=@if($reports->count() > 0) "report-table" @else "empty-table" @endif class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Custom Product ID</th>
                            <th>Product ID</th>
                            <th>Nama Produk</th>
                            <th>Sold</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reports as $report)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $report->order_id }}</td>
                            <td>{{ $report->product_id }}</td>
                            <td>{{ $report->custom_product_id }}</td>
                            <td>{{ $report->product_name }}</td>
                            <td>{{ $report->sold }}</td>
                            <td><a href="{{ route('craftman.report.delete', ['report'=>$report->id])}}" class="btn btn-danger rounded-pill px-3"><i class="bx bxs-eraser"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection