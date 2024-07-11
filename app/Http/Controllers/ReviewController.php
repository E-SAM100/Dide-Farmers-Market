<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Product;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->input('product_id'),
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        return redirect()->back()->with('status', 'Review submitted successfully!');
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);
        $reviews = $product->reviews()->with('user')->get();

        return view('reviews.show', compact('product', 'reviews'));
    }
}
