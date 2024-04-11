<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewCustomerController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('costumer.review.read', compact('reviews'));
    }

    public function create()
    {
        return view('costumer.review.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'product_name' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('costumer.review.index')->with('success', 'Review created successfully');
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('costumer.review.index')->with('success', 'Data berhasil dihapus');
    }
}
