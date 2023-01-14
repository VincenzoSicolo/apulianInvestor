<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;


Route::get('/', [IndexController::class, 'index']);

Route::get('/hello', [IndexController::class, 'show']);

Route::resource('listing', ListingController::class);

  // Route::get('listing/index', [ListingController::class], 'index');
//   Route::get('listing/show', [ListingController::class], 'show');

//   Route::post('listing/create', [ListingController::class], 'create');