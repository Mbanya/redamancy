<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('our-story', function () {
    return view('pages.our-story');
})->name('our-story');

Route::get('wine-club', function () {
    return view('pages.wine-club');
})->name('wine-club');


Route::resource('shop',\App\Http\Controllers\ShopController::class);

Route::get('checkout',[\App\Http\Controllers\CheckoutController::class,'checkout'])->name('checkout');

Route::get('cart',[\App\Http\Controllers\CartController::class,'cartList'])->name('cart.list');
Route::post('cart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

