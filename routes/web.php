<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All listings
Route::get('/', function () {

    $listings = Listing::all();

    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => $listings
    ]);
});

// Single listing
// ELoquent models have route model binding that handles 404 automaticly.
Route::get('listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);

});