<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('listings/{listing}', [ListingController::class, 'show']);