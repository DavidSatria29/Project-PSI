<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;


class ReviewCustomerController extends Controller
{

    public function index()
    {
        $reviews = Review::all();
        return view('customer.riview.read', compact('reviews'));
    }

    public function showReservationForm()
    {
        $products = Product::all(); // Misalkan Anda memiliki model Product

        return view('reservation.form', compact('products'));
    }

    public function create()
    {
        return view('customer.form.review');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'product_name' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
            'comment' => 'required|string',
        ]);

        // Create a new review
        $review = new Review();
        $review->user_id = auth()->id();
        $review->name = $request->name;
        $review->product_name = $request->product_name;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        return redirect()->route('customer.riview.show')->with('success', 'Review created successfully');
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('costumer.riview.show1')->with('success', 'Data berhasil dihapus');
    }
}
