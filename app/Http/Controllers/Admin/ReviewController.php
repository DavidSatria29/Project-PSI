<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.read', compact('reviews'));
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('admin.review.show')->with('success', 'Data berhasil dihapus');
    }
}
