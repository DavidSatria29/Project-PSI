@extends('layouts.craftmanMaster')
@section('title', 'Dashboard-Craftman')
@section('dashboard', 'active')
@section('content')

<style>
    .container-user{
        min-height: 83vh;
    }
</style>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4 container-user">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-package bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Produk</p>
                                <h6 class="mb-0 text-white">{{ $product }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bxs-cog bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Custom Produk</p>
                                <h6 class="mb-0 text-white">{{ $custom_product }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-notepad bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Laporan</p>
                                <h6 class="mb-0 text-white">{{ $report }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection