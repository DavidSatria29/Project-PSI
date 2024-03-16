@extends('layouts.adminMaster')
@section('title', 'Dashboard')
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
                            <i class="menu-icon tf-icons bx bx-user-circle bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pengguna</p>
                                <h6 class="mb-0 text-white">{{ $user }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-captions bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Kategori</p>
                                <h6 class="mb-0 text-white">{{ $category }}</h6>
                            </div>
                        </div>
                    </div>
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
                            <i class="menu-icon tf-icons bx bx-cart bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Keranjang</p>
                                <h6 class="mb-0 text-white">{{ $cart }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-receipt bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Pemesanan</p>
                                <h6 class="mb-0 text-white">{{ $order }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-notepad bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Reservasi</p>
                                <h6 class="mb-0 text-white">{{ $reservation }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bx-star bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Ulasan</p>
                                <h6 class="mb-0 text-white">{{ $review }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4 text-white">
                            <i class="menu-icon tf-icons bx bxs-contact bx-lg"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Kontak</p>
                                <h6 class="mb-0 text-white">{{ $contact }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection