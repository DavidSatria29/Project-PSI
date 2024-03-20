<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function index()
    {
        return view('customer.commerce');
    }

    public function cart()
    {
        return view('customer.cart');
    }
    public function status()
    {
        return view('customer.status');
    }
}
