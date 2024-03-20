<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('admin.cart.read', compact('carts'));
    }

    public function delete($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('admin.cart.show')->with('success', 'Data berhasil dihapus');
    }
}
