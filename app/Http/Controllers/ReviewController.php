<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the  review.
     */
    public function index()
    {
        // Fetch all reviews from the database
        $reviews = Review::all();

        // Return the view to display all reviews
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a review
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating the data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        // Create a new review using the validated data
        $review = Review::create($validatedData);

        // Redirect to the review's details page
        return redirect()->route('reviews.show', $review->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        // Return the view to display the review details
        return view('reviews.show', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // Validate the input fields
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        // Update the review using the validated data
        $review->update($validatedData);

        // Redirect to the review's details page
        return redirect()->route('reviews.show', $review->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
         // Delete the review
         $review->delete();

         // Redirect to the reviews index page
         return redirect()->route('reviews.index');
    }
}
