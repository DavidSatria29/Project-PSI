<?php

namespace App\Http\Controllers\Craftman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('craftman.dashboard');
    }
}
