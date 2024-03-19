<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\CustomProduct;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $category = Category::all()->count();
        $product = Product::all()->count();
        $custom_product = CustomProduct::all()->count();
        $cart = Cart::all()->count();
        $order = Order::all()->count();
        $reservation = Reservation::all()->count();
        $review = Review::all()->count();
        $contact = Contact::all()->count();
        return view('admin.dashboard', compact('user', 'category', 'product', 'custom_product', 'cart', 'order', 'reservation', 'review', 'contact'));
    }
    public function test()
    {
        return view('admin.test');
    }
}
