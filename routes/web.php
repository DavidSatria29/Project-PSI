<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
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
Route::get('/pariwisata', function () {
    return view('pariwisata');
});
