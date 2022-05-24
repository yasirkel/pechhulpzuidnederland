<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index() 
    {
        $reviews = Review::join('users', 'users.id', '=', 'reviews.user_id')
            ->get(['reviews.score as score', 'reviews.omschrijving as omschrijving', 'reviews.status as status', 'users.name as name']);

        return view('reviews', [
            'reviews' => $reviews,
        ]);
    }

    public function getReviews() {
        $reviews = Review::join('users', 'users.id', '=', 'reviews.user_id')
            ->get(['reviews.id as id', 'reviews.score as score', 'reviews.omschrijving as omschrijving', 'reviews.status as status', 'users.name as name']);

            return view('checkreview',[
                'reviews' => $reviews,
            ]);
    }

    public function disableReview($id) {

        $review = Review::find($id);
        $review->status = 0;
        $review->save();

        return redirect()->route('reviews-overzicht');
    }

    public function enableReview($id) {

        $review = Review::find($id);
        $review->status = 1;
        $review->save();

        return redirect()->route('reviews-overzicht');

    }
}

