<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/commerce', function () {
    return view('commerce');
});
Route::get('/commerce2', function () {
    return view('commerce2');
});
Route::get('/pariwisata', function () {
    return view('pariwisata');
});
Route::get('/kontak', function () {
    return view('kontak');
});
