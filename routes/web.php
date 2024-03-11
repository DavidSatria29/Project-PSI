<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/commerce', function () {
    return view('shop');
});
Route::get('/pariwisata', function () {
    return view('pariwisata');
});
Route::get('/main', function () {
    return view('main');
});
