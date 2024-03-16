<?php

namespace App\Http\Controllers\Craftman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustomProduct;
use App\Models\Report;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::all()->count();
        $custom_product = CustomProduct::all()->count();
        $report = Report::all()->count();
        return view('craftman.dashboard', compact('product', 'custom_product', 'report'));
    }
}
