<?php

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthLogOut;
use \App\Http\Controllers\ProductsController;

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

Route::get('/', [PostController::class, 'index']);



//vygenerovat auth routes aby sme vedli sa na ne odvolat
Auth::routes();

Route::resource('/posts', PostController::class);  //for creation routes

Route::resource('/creation', PostController::class);  //for creation routes

Route::get('/creation', function () {
    return view('pages/creation');
})->middleware('auth');

Route::get('/events', function () {
    return view('pages/events');
})->middleware('auth');

Route::get('/eshop', function () {
    return view('pages/eshop');
})->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// cesta pre AJAX volanie
// Controller-name@method-name
Route::get('/getProducts',[ProductsController::class, 'getProducts']);
