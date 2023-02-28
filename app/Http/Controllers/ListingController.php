<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index(Request $request) {
        dd($request->tag);
        $listings = Listing::all();

        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => $listings
        ]);

    }

    // Show single listing
    // ELoquent models have route model binding that handles 404 automaticly.
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
