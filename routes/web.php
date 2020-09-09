<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

// Auth::routes();

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::any('@{slug}', function () { // Image gallery
    return view('welcome');
});

Route::any('admin/{slug}', function () { // Image gallery
    return view('welcome');
});
Route::any('{slug}', function () { // Image gallery
    return view('welcome');
});
