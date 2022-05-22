<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All listings
Route::get('/', [ListingController::class, 'index']);



// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Single listing, Route model binding, Keep on bottom
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listin
// update - Update listing
// delete - Delete listing








// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>', 404)
//     ->header('Content-type', 'text/plain')
//     ->header('foo','bar');
// });

// Route::get('/posts/{id}', function($id){
//     dd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;
// });